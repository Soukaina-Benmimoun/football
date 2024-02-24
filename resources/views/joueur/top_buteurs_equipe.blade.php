    <h1>Top Buteurs par Équipe</h1>
    @foreach ($toptroisButeurEquipe as $equipeId => $joueurs)
        <h2>Équipe: {{ $equipeId }}</h2>
        <ul>
        @foreach ($joueurs as $joueur)
                <li>Nom: {{ $joueur->nom }}, Prenom: {{ $joueur->prenom }}, Gols: {{ $joueur->gols }}</li>
            @endforeach
        </ul>
    @endforeach