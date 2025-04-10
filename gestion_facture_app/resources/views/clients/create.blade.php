<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de création de client</title>
</head>
<body>

  <h2>Création de Client</h2>
  <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nom">Nom Complet:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telephone">Numéro de téléphone:</label>
    <input type="number" id="telephone" name="telephone" required>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" required>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" required>

    <button type="submit">Créer Client</button>
  </form>

</body>
</html>
