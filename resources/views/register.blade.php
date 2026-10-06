<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="/register">
        @csrf
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        @error('password')
            <p>{{ $message }}</p>       
        @enderror
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>