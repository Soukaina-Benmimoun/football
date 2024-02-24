<h1>Age des joueurs</h1>
    @foreach ($joueurParAge as $equipeNom => $joueurs)
        <h2>Equipe Nom: {{ $equipeNom }}</h2>
        <ul>
            @foreach ($joueurs as $joueur)
                <li>{{ $joueur->nom }} {{ $joueur->prenom }}: {{ $joueur->age }} ans</li>
            @endforeach
        </ul>
    @endforeach