
    <div class="container">
        <h1>Ajouter une Équipe</h1>
        <form action="{{ route('equipe.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de l'équipe</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="entraineur">Entraineur</label>
                <input type="text" class="form-control" id="entraineur" name="entraineur" required>
            </div>
            <div class="form-group">
                <label for="classement">Classement</label>
                <input type="number" class="form-control" id="classement" name="classement" required>
            </div>
            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="text" class="form-control" id="pays" name="pays" required>
            </div>
            <div class="form-group">
                <label for="division">Division</label>
                <input type="text" class="form-control" id="division" name="division" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

