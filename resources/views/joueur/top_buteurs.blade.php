<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Top Buteurs par Équipe</title>
</head>
<body>
    <h1>Top Buteurs par Équipe</h1>
        <ul>
            @foreach ($equipes as $equipe)
                <li>Nom: {{ $equipe->joueurs->nom }}, Buts: {{ $equipe->joueurs->total_buts }}</li>
            @endforeach
        </ul>
</body>
</html>
