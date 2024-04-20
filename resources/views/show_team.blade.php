<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Member Show</title>
</head>
<body>
    <h1>Team Member Show</h1>
    <h2>Photo: <img src="{{asset('pictures/'.$team->photo)}}" alt="photo"></h2>
    <h2>Name:{{$team->name}}</h2>
    <h2>Designation:{{$team->designation}}</h2>
</body>
</html>