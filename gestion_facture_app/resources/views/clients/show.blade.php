<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details d'un client</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .list{
            display: flex;
        }
    </style>
    <h1>
        Détails d'un Client
    </h1>
    <div class="container">
        <div class="image">
            @if ($client->image)
            <img src="{{ asset('storage/clients/' . basename($client->image)) }}" alt="Image de l'article" width="200">
             @else
            <span>Aucune image</span>
            @endif
        </div>
        <div class="list">
            <p>Nom client : {{ $client->nom }}</p>
        
        </div>
       <div class="list">
        <p>Email client : {{ $client->email }}</p>
        
       </div>
       <div class="list">
        <p>Tel client :  {{ $client->telephone }}</p>
       
       </div>
       <div class="list">
        <p>Adresse client :  {{ $client->adresse }}</p>
       
       </div>
      
    

    </div>
</body>
</html>