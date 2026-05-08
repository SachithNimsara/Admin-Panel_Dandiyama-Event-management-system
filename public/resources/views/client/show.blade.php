<!DOCTYPE html>
<html>
<head><title>View Client</title></head>
<body>
    <h1>Client Details</h1>

    <p>Name: {{ $client->name }}</p>
    <p>Email: {{ $client->email }}</p>
    <p>Phone: {{ $client->phone }}</p>

    <a href="{{ route('clients.index') }}">Back</a>
</body>
</html>
