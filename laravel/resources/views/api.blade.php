<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Country</th>
                <th>Total Confirm</th>
                <th>Total Deaths</th>
                <th>Total Recovered</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data ['Countries'] as country )
                <tr>
                    <td>{{ $country['Country'] }}</td>
                    <td>{{ $country['Total Confirm'] }}</td>
                    <td>{{ $country['Total Deaths'] }}</td>
                    <td>{{ $country['Total Recovered'] }}</td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>