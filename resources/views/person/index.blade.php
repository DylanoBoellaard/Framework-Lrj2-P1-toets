<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/global.css">
</head>
<body>
    <div id="container">
        <h1>Person index</h1>

        <div id="systemMessage">
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>

        <a href="{{route('person.create')}}">Add person</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Street</th>
                    <th>House number</th>
                    <th>Zipcode</th>
                    <th>City</th>
                    <th>Phone number</th>
                    <th>Edit person</th>
                    <th>Delete person</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personList as $person) <!-- Foreach Loop to display all person details -->
                <tr>
                    <td>{{$person->name}}</td>
                    <td>{{$person->street}}</td>
                    <td>{{$person->house_nr}}</td>
                    <td>{{$person->zipcode}}</td>
                    <td>{{$person->city}}</td>
                    <td>{{$person->phone_nr}}</td>
                    <td><a href="{{route('person.edit', [$person-> id])}}"><img src="/img/Edit-icon.png" alt="edit.png"></a></td>
                    <td>
                        <form action="{{route('person.delete', [$person-> id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="image" src="/img/Delete-icon.png" alt="delete.png" id="img" width="50px">
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>