<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
    </style>
    <h1>
        Détails d'un articcle
    </h1>
    <div class="container">
        {{ $article->titre }}
        {{ $article->description }}
        {{ $article->quantite }}
        {{ $article->prix }}
        @if ($article->image)
        <img src="{{ asset('storage/articles/' . basename($article->image)) }}" alt="Image de l'article" width="200">
         @else
        <span>Aucune image</span>
        @endif

    </div>
</body>
</html>