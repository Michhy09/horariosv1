<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plazas</title>
</head>
<body>
    <h2>Plazas</h2>
    <ul>
        @foreach ($plazas as $plaza)
             <li>{{ $plaza->idplaza}} . {{ $plaza->nombrePlaza}}</li>
        @endforeach
       
        
    </ul>
   
</body>
</html>