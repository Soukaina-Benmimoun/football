


    <div class="container">
        <h1>Liste des Équipes</h1>
        <table class="table">
            <thead>
                <tr >
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Entraineur</th>
                    <th>Classement</th>
                    <th>Pays</th>
                    <th>Division</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
                <tr  onclick= "location.href='{{ route('equipe.edit', ['id' => $equipe->id]) }}'" style="cursor: pointer;">
                        <td>{{ $equipe->id }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->entraineur }}</td>
                        <td>{{ $equipe->classement }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->division }}</td>
                        <td>
                        <form action="{{ route('equipe.destroy', ['id' => $equipe->id]) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Supprimer" class="btn btn-danger"/>
                        </form>
                       </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
