<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Tableau de bord</h1>
    <h2>Liste des produits ou services disponibles</h2>
    <ul>
        @foreach ($products as $product)
        <li>{{$product->name}} | {{$product->package_id}} | Prix = {{$product->price}}$ca {{$product->type_payment}}</li>            
        @endforeach
    </ul>
</body>
</html>