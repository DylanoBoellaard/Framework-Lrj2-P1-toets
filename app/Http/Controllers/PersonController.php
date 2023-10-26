<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $personList = DB::table('persons')
            ->select('id', 'name', 'street', 'house_nr', 'zipcode', 'city', 'phone_nr')
            ->orderBy('name', 'asc')
            ->get();

        return view('person.index', [
            'personList' => $personList,
        ]);
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'house_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        $newPerson = Person::create($data);

        return redirect(route('person.index'))->with('success', 'Person created succesfully');
    }

    public function edit(Person $person)
    {
        return view('person.edit', ['person' => $person]);
    }

    public function update(Request $request, Person $person)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'house_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        $person->update($data);

        return redirect(route('person.index'))->with('success', 'Person updated succesfully');
    }

    public function delete(Person $person)
    {
        $person->delete();

        return redirect(route('person.index'))->with('success', 'Person deleted succesfully');
    }
}
