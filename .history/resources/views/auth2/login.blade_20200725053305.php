
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
<body>
    <div class="d1">

    </div>
    <div class="login">
      <form class="" action="{{ route('login') }}" method="post">
        @csrf
        <h2>Login </h2>
        <label for="">User :</label>
        <input class="txtb" type="text" name="user" value="" required>
        <label for="">Password :</label>
        <input class="txtb" type="password" name="password" value="" required>
        <div class="check">
    
      </div>
        <button type="submit" class="btn btn-info login-btn">Login</button>
      </form>
    </div>
</body>
</html>

