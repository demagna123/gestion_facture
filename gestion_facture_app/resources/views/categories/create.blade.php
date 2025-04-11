<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de création de catégorie</title>
</head>
<body>

  <h2>Création de Catégorie</h2>
  <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nom">Nom de la catégorie:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="description">Description de la catégorie:</label>
    <textarea id="description" name="description" required></textarea>

    <button type="submit">Créer la Catégorie</button>
  </form>

</body>
</html>
