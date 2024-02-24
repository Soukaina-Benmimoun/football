<h1>Les trois premiers Buteurs</h1>
    <ul>
        @foreach ($toptrois as $joueur)
            <li>{{ $joueur->nom }} {{ $joueur->prenom }}: {{ $joueur->gols }} goals</li>
        @endforeach
    </ul>