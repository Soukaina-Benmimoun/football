<!DOCTYPE html>
<html>
<head>
    <title>Buts par équipe</title>
</head>
<body>

<h1>Buts par équipe</h1>

<table>
    <thead>
        <tr>
            <th>Équipe</th>
            <th>Buts</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipes as $equipe)
        <tr>
            <td>{{ $equipe->team_name }}</td>
            <td>{{ $equipe->total_goals }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
