<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Ticket</title>
    <style>
        body { font-family: Arial; background:#020617; color:#e5e7eb; padding:2rem; }
        h1 { color:#7dd3fc; }
        form { background:#1e293b; padding:2rem; max-width:500px; border-radius:10px; }
        select, button { width:100%; padding:.6rem; margin-bottom:1rem; }
        button { background:#38bdf8; border:none; border-radius:6px; }
    </style>
</head>
<body>

<h1>Edit Ticket</h1>

<form method="POST" action="{{ url('/tickets/'.$ticket['id']) }}">
    @csrf
    @method('PUT')

    <label>Status</label>
    <select name="status">
        <option value="open" @selected($ticket['status']=='open')>Open</option>
        <option value="in_progress" @selected($ticket['status']=='in_progress')>In Progress</option>
        <option value="closed" @selected($ticket['status']=='closed')>Closed</option>
    </select>

    <label>Priority</label>
    <select name="priority">
        <option value="low" @selected($ticket['priority']=='low')>Low</option>
        <option value="medium" @selected($ticket['priority']=='medium')>Medium</option>
        <option value="high" @selected($ticket['priority']=='high')>High</option>
    </select>

    <button>Update</button>
</form>

</body>
</html>
