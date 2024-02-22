
    <div class="container">
        <h1>Liste des Joueurs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro</th>
                    <th>Poste</th>
                    <th>Âge</th>
                    <th>Nationalité</th>
                    <th>Buts</th>
                    <th>Passes Décisives</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->numero }}</td>
                        <td>{{ $joueur->post }}</td>
                        <td>{{ $joueur->age }}</td>
                        <td>{{ $joueur->nationalite }}</td>
                        <td>{{ $joueur->gols }}</td>
                        <td>{{ $joueur->assists }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

