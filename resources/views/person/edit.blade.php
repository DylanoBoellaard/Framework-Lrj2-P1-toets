<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit person</title>
    <link rel="stylesheet" href="/css/global.css">
</head>

<body>
    <h1>Edit person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div><a href="{{route('person.index')}}">Return to home page</a></div>

    <form action="{{route('person.update', ['person' => $person])}}" method="post">
        @csrf
        @method('put')
        <fieldset>
            <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="name" value="{{$person->name}}">
            <label for="street">Street:</label>
                <input type="text" name="street" id="street" placeholder="street" value="{{$person->street}}">
            <label for="house_nr">House number:</label>
                <input type="text" name="house_nr" id="house_nr" placeholder="house_nr" value="{{$person->house_nr}}">
            <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode" placeholder="zipcode" value="{{$person->zipcode}}">
            <label for="city">City:</label>
                <input type="text" name="city" id="city" placeholder="city" value="{{$person->city}}">
            <label for="phone_nr">Phone number:</label>
                <input type="text" name="phone_nr" id="phone_nr" placeholder="phone_nr" value="{{$person->phone_nr}}">
            <input type="submit" value="Edit person">
        </fieldset>
    </form>
</body>

</html>