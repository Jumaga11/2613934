<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All games</title>
</head>

<body>
    <table>
        <tr>
            <th>title</th>
            <th>developer</th>
            <th>releasedate</th>
            <th>category_id</th>
            <th>genre</th>
            <th>slider</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach ($game as $game)
            <tr>
                <td>{{ $game->tittle }}</td>
                <td>{{ $game->developer }}</td>
                <td>{{ $game->releasedate }}</td>
                <td>{{ $game->category_id }}</td>
                <td>{{ $game->genre }}</td>
                <td>{{ $game->slider }}</td>
                <td>{{ $game->description }}</td>
                <td>{{ $game->image }}</td>
                <td><img src="{{ public_path().'/images/'.$game->image}}" width="40px" alt=""></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
