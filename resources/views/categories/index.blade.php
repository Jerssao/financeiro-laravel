<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorias</title>
</head>
<body>
    <h1>Categories</h1>
    <ul>
        @foreach ($categorias as $categoria) 
         <li>{{$categoria['name']}} - {{$categoria['type']}}  - {{$categoria['description']}}</li>   
        @endforeach
    </ul>
</body>
</html>