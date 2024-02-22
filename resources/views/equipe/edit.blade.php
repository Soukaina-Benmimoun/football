
    <div class="container">
        <h1>Modifier l'Équipe</h1>
        <form action="{{ route('equipe.update', $equipe->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom de l'équipe</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $equipe->nom }}" required>
            </div>
            <div class="form-group">
                <label for="entraineur">Entraineur</label>
                <input type="text" class="form-control" id="entraineur" name="entraineur" value="{{ $equipe->entraineur }}" required>
            </div>
            <div class="form-group">
                <label for="classement">Classement</label>
                <input type="number" class="form-control" id="classement" name="classement" value="{{ $equipe->classement }}" required>
            </div>
            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="text" class="form-control" id="pays" name="pays" value="{{ $equipe->pays }}" required>
            </div>
            <div class="form-group">
                <label for="division">Division</label>
                <input type="text" class="form-control" id="division" name="division" value="{{ $equipe->division }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>

