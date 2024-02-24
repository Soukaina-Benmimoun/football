<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{ route('equipe.list') }}">Liste des Équipes</a>
            </li>
            <li>
                <a href="{{ route('equipez.list') }}">Liste des Équipes de Zambie</a>
            </li>
            <li>
                <a href="{{ route('equipe.create') }}">ajouter une equipe</a>
            </li>
            <li>
                <a href="{{ route('joueur.list') }}">Liste des Joueurs</a>
            </li>
            <li>
                <a href="{{ route('listEquipeMexico') }}">Liste des Équipes de Mexico </a>
            </li>
            <li>
                <a href="{{ route('joueur.age') }}">Liste des Joueurs ayant plus de 30 ans</a>
            </li>
            <li>
                <a href="{{ route('joueur.post') }}">Liste des Joueurs selon le post et le nbr de buts</a>

            </li>
            <li>
                <a href="{{ route('equipe.but') }}">nombre de buts marqués par chaque équipe</a>
            </li>
            <li>
                <a href="{{ route('golsEquipePays') }}">nombre de buts marqués par équipe et par pays</a>
            </li>
            <li>
                <a href="{{ route('golsEquipeDef') }}">nombre de buts marqués par équipe et par defenseur</a>
            </li>
        </ul>
    </nav>
</body>
</html>