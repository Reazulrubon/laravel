<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider Show</title>
</head>
<body>
    <h1>Slider Show</h1>
    <h2>Photo: <img src="{{asset('pictures/'.$slider->photo)}}" alt="photo"></h2>
    <h2>Name:{{$slider->name}}</h2>
    <h2>Designation:{{$slider->designation}}</h2>
</body>
</html>