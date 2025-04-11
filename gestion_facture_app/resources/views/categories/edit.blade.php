<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mise a jour de categorie</title>
  <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
</head>
<body>

  <h2>Mise à jour  d'un categorie</h2>
  <form action="{{ route('categories.update', $categorie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 

    <label for="titre">Nom categorie:</label>
    <input type="text" id="titre" name="nom" value="{{ $categorie->nom }}" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{ $categorie->description }}</textarea>




    <button type="submit">Mettre à jour</button>
</form>

</body>
</html>
