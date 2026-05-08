<!DOCTYPE html>
<html>
<head><title>Edit Client</title></head>
<body>
    <h1>Edit Client</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $client->name }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $client->email }}"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ $client->phone }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
