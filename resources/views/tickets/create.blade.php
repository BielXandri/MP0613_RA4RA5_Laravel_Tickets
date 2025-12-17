<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Ticket</title>
    <style>
        body { font-family: Arial; background:#020617; color:#e5e7eb; padding:2rem; }
        h1 { color:#38bdf8; }
        form { background:#1e293b; padding:2rem; max-width:500px; border-radius:10px; }
        input, textarea, select { width:100%; margin-bottom:1rem; padding:.5rem; }
        button { padding:.6rem 1.2rem; background:#38bdf8; border:none; border-radius:6px; }
    </style>
</head>
<body>

<h1>Create Ticket</h1>

<form method="POST" action="{{ url('/tickets') }}">
    @csrf

    <label>Title</label>
    <input type="text" name="title" required>

    <label>Description</label>
    <textarea name="description" required></textarea>

    <label>Priority</label>
    <select name="priority">
        <option value="low">Low</option>
        <option value="medium" selected>Medium</option>
        <option value="high">High</option>
    </select>

    <button>Create</button>
</form>

</body>
</html>
