<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Top Buteurs par Équipe</title>
</head>
<body>
    <h1>Top Buteurs par Équipe</h1>
    @foreach ($troisPremiersButeursParEquipe as $equipeId => $data)
        <h2>Équipe: {{ $data['equipe'] }}</h2>
        <ul>
            @foreach ($data['joueurs'] as $joueur)
                <li>Nom: {{ $joueur->nom }} {{ $joueur->prenom}} , Buts: {{ $joueur->total_buts }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
