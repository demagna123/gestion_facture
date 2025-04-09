<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listes des articles</title>
</head>
<body>
    <style>
        table{
            border-collapse: collapse;
            width: 80%
        }
        th,td{
            border: 1px solid
        }
        th {
            background-color: #f4f4f4;
        }
        a{
            padding-left: 10px;
            justify-content: center;
            text-align: center;
            align-content: center;
            
        }
    </style>
    <h1>Listes des articles</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Quantité</th>
                <th>prix Unitaire</th>
                <th>Action</th>
        </thead>
        <tbody>
            
            @foreach ($articles as $article )
            <tr>
                <td>{{ $article->titre }}</td>
                <td>{{ $article->quantite }}</td>
                <td>{{ $article->prix }}</td>
                <td>
                    <a href="{{ route('articles.show', $article->id) }}">Details</a>
                    <a href="{{ route('articles.edit', $article->id) }}">Modifier</a>
                   
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                    </form>
                   
                </td>
            </tr>
           
                
            @endforeach
        </tbody>
    </table>
</body>
</html>