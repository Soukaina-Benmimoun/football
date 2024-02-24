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
                    <!-- SQL -->
        <!-- 1 - Afficher la liste des équipes -->
            <li><a href="{{ route('equipe.list') }}">Liste des Équipes</a></li>
        <!-- 2 - Afficher la liste des équipes Français -->
            <li><a href="{{ route('equipeF.list') }}">Liste des Équipes de France</a></li>
        <!-- 3 - Insérer une nouvelle équipe italienne -->
            <li><a href="{{ route('equipe.create') }}">Ajouter une equipe italienne</a></li>
        <!-- 4 - Modifier le pays de l'équipe avec une valeur 'Espagnole' 
                on clickant sur le button update dans la page liste des equipes -->
        <!-- 5 - Supprimer cette équipe
                on clickant sur le button Supprimer dans la page liste des equipes --> 
                            <!-- Query Builder -->
        <!-- 6 - Afficher la liste des équipes avec ses joueurs -->
            <li><a href="{{ route('joueur.list') }}">Liste des Joueurs</a></li>
        <!-- 7 - Afficher la liste des équipes Espagnoles -->
            <li><a href="{{ route('listEquipeEspagnole') }}">Liste des Équipes de Espagnole </a></li>
        <!-- 8 - Afficher la listes des joueurs ayant un Age supérieur ou égal a 30 ans -->
            <li><a href="{{ route('joueur.age') }}">Liste des Joueurs ayant plus que 30 ans</a></li>
        <!-- 9 - Afficher la listes des joueurs ayant marqué 15 buts et qui occupe le poste Milieu et ayant une origine Argentine -->
            <li><a href="{{ route('joueur.post') }}">Liste des Joueurs selon le post et le nbr de buts d'origine Argentine</a></li>
        <!-- 10 - Afficher le nombre des butes marqur de chaque équipe -->
            <li><a href="{{ route('equipe.but') }}">Nombre de buts marqués par chaque équipe</a></li>
        <!-- 11 - Afficher le nombre des butes marquer par équipe et par pays -->
            <li><a href="{{ route('golsEquipePays') }}">Nombre de buts marqués par équipe et par pays</a></li>
        <!-- 12 - Afficher le nombre des butes marquer par équipe et par des joueurs ayant comme poste 'Défenseur' -->
            <li><a href="{{ route('golsEquipeDef') }}">nombre de buts marqués par équipe et par defenseur</a></li>
        <!-- 13 - Afficher les trois premiers buteurs de chaque équipe -->
            <li><a href="{{ route('joueur.topButeursParEquipe')}}">Les top trois Buteurs dans chaque equipe</a></li>
        <!-- 14 - Afficher les trois premiers buteurs -->
            <li><a href="{{ route('joueur.topButeurs')}}">Les top trois Buteurs </a></li>
        <!-- 15 - Afficher la liste des joueurs de chaque équipe par Age -->
            <li><a href=" {{route('joueur.joueurParAge')}}">la liste des joueurs de chaque équipe par Age</a></li>
        </ul>
    </nav>
</body>
</html>