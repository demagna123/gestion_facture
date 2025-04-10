<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des clients</title>
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
    <h1>Liste des clients</h1>

    <table>
        <thead>
            <tr>
                <th>Nom client</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $clients as $client )
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}">Details</a>
                        <a href="{{ route('clients.edit',$client->id) }}">Modifier</a>
                       <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
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