<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des catégories</title>
</head>
<body>
    <style>
        table{
            border-collapse: collapse;
            width: 80%;
        }
        th,td{
            border: 1px solid black;
        }
        th{
            background-color: rgb(233, 230, 230);
        }
    </style>
    <h1>Liste des catégories</h1>

    <table>
        <thead>
            <tr>
                <th>Nom </th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $categories as $categorie )
                <tr>
                    <td>{{ $categorie->nom }}</td>
                    <td>{{ $categorie->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', $categorie->id) }}">Details</a>
                        <a href="{{ route('categories.edit',$categorie->id) }}">Modifier</a>
                       <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Etes - vous sur de vouloir supprimer?')">Supprimer</button>
                       </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>