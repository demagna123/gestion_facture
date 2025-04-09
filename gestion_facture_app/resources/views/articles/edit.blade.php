<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de création d'article</title>
  <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
</head>
<body>

  <h2>Création d'Article</h2>
  <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Important pour les mises à jour -->

    <label for="titre">Titre de l'article:</label>
    <input type="text" id="titre" name="titre" value="{{ $article->titre }}" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{ $article->description }}</textarea>

    <label for="quantite">Quantité:</label>
    <input type="number" id="quantite" name="quantite" value="{{ $article->quantite }}" required>

    <label for="prix">Prix unitaire:</label>
    <input type="number" id="prix" name="prix" value="{{ $article->prix }}" required>

    <label for="image">Image (laisser vide pour ne pas changer):</label>
    <input type="file" id="image" name="image">

    <button type="submit">Mettre à jour</button>
</form>

</body>
</html>
