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
        Détails d'un Categorie
    </h1>
    <div class="container">
       
        <div class="list">
            <p>Nom categorie : {{ $categorie->nom }}</p>
        
        </div>
       <div class="list">
        <p>Description : {{ $categorie->description }}</p>
        
       </div>
       
      
    

    </div>
</body>
</html>