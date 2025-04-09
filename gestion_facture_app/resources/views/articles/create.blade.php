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
  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="titre">Titre de l'article:</label>
    <input type="text" id="titre" name="titre" required>

    <label for="description">Description de l'article:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="quantite">Quantité disponible:</label>
    <input type="number" id="quantite" name="quantite" required>

    <label for="prix">Prix unitaire:</label>
    <input type="number" id="prix" name="prix" required>

    <label for="image">Image de l'article:</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <button type="submit">Créer l'Article</button>
  </form>

</body>
</html>
