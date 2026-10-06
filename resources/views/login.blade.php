<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
      @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
    <form method=POST action="/login">
        @csrf
        <label>Email:</label>
        <input type="email" name="email">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>