<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ticket Error</title>
    <style>
        body { font-family: Arial; background:#1e293b; color:#f87171; padding:2rem; }
        h1 { color:#f87171; }
        ul { margin-top:1rem; }
        a { color:#38bdf8; text-decoration:none; }
    </style>
</head>
<body>
    <h1>Invalid Ticket Parameters</h1>
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <p><a href="{{ url('/tickets') }}">Back to tickets</a></p>
</body>
</html>
