
    <div class="container">
        <h1 class="my-4">Total Goals by Team and Country</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Team Name</th>
                    <th>Country</th>
                    <th>Total Goals</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($goalsByTeamAndCountry as $team)
                    <tr>
                        <td>{{ $team->team_name }}</td>
                        <td>{{ $team->country }}</td>
                        <td>{{ $team->total_goals }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>