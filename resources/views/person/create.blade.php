<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add person</title>
    <link rel="stylesheet" href="/css/global.css">
</head>

<body>
    <h1>Add a new person</h1>
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

    <form action="{{route('person.store')}}" method="post">
        @csrf
        @method('post')
        <fieldset>
            <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="John Doe">
            <label for="street">Street:</label>
                <input type="text" name="street" id="street" placeholder="StreetName">
            <label for="house_nr">House number:</label>
                <input type="text" name="house_nr" id="house_nr" placeholder="15A">
            <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode" placeholder="1234AB">
            <label for="city">City:</label>
                <input type="text" name="city" id="city" placeholder="CityName">
            <label for="phone_nr">Phone number:</label>
                <input type="text" name="phone_nr" id="phone_nr" placeholder="0612345678">
            <input type="submit" value="Add a new person">
        </fieldset>
    </form>
</body>

</html>