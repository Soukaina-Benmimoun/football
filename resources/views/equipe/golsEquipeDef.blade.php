
    <div class="container">
        <h1 class="my-4">Total Goals by Team and Defender</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Team Name</th>
                    <th>Total Goals by Defenders</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($golsEquipeDefs as $golsEquipeDef)
                    <tr>
                        <td>{{ $golsEquipeDef->team_name }}</td>
                        <td>{{ $golsEquipeDef->total_goals }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>