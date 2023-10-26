<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Person homepage
Route::get('/person/index', [PersonController::class, 'index'])->name('person.index');

// Person create page
Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');

// Send create paga data to database
Route::post('/person', [PersonController::class, 'store'])->name('person.store');

// Person Edit page
Route::get('/person/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');

// Person update page
Route::put('/person/update/{person}', [PersonController::class, 'update'])->name('person.update');

// Person delete page
Route::delete('/person/delete/{person}', [PersonController::class, 'delete'])->name('person.delete');
