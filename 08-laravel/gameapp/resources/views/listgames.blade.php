<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Games</title>
</head>
<body>
    <h1>List All Games</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tittle</th>
                <th>Developer</th>
                <th>Releade Date</th>
                <th>Category</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game -> id}}</td>
                    <td>{{ $game -> tittle}}</td>
                    <td>{{ $game -> developer}}</td>
                    <td>{{ $game -> releasedate}}</td>
                    <td>{{ $game -> category->name}}</td>
                    <td>{{ $game -> user->fullname}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
