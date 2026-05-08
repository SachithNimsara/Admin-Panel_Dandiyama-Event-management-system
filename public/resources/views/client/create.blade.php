<!DOCTYPE html>
<html>
<head><title>Create Client</title></head>
<body>
    <h1>Add Client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone"><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>

