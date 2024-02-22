@foreach ($equipes as $equipe)
    <div class="card mb-3">
        <div class="card-header">
            <h3>{{ $equipe->nom }}</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Joueurs</h5>
            <ul class="list-group list-group-flush">
                @foreach ($equipe->joueurs as $joueur)
                    <li class="list-group-item">{{ $joueur->nom }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endforeach
