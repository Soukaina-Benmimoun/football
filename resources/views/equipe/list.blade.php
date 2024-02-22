


    <div class="container">
        <h1>Liste des Équipes</h1>
        <table  border=1 class="table">
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
                <tr>
                        <td>{{ $equipe->id }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->entraineur }}</td>
                        <td>{{ $equipe->classement }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->division }}</td>
                        <td><a href="{{ route('equipe.edit', ['id' => $equipe->id]) }}"><button>Update</button></a></td>
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
