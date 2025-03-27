<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Home</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>
    <p>{{ $greeting }}</p>

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>