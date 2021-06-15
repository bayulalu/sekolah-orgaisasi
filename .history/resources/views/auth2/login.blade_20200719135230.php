

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>
    
    body,html{
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: sans-serif;
}
.d1{
  width: 70%;
  height: 100%;
  overflow: hidden;
  float: left;
  background: url('./login.jpg') center;
}
.login{
  position: fixed;
  overflow: hidden;
  width: 100%;
  max-width: 500px;
  right: 0;
  margin: 0;
  background: #fff;
  height: 100%;
  z-index: 1;
}
.login form{
  margin: 160px 30px;
}
.login h2{
  font-size: 30px;
  color: #f44336;
}
.login label{
  display: block;
  font-size: 18px;
  font-weight: 700;
  margin: 8px 0
}
.txtb{
  width: 100%;
  padding: 8px 0;
  font-size: 18px;
}
.check{
  margin: 8px 0;
}
.btn{
  display: block;
  float: right;
  background: #f44336;
  font-size: 18px;
  padding: 8px 50px;
  color: white;
  border: none;
}
</style>
<body>
    <div class="d1">

    </div>
    <div class="login">
      <form class="" action="index.html" method="post">
        <h2>
    Login Form</h2>
    <label for="">Email :</label>
        <input class="txtb" type="text" name="" value="">
        <label for="">Password :</label>
        <input class="txtb" type="password" name="" value="">
        <div class="check">
    
        <input type="checkbox" name="" value="">
        <span>Remamber Me</span>
    
      </div>
    <input class="btn" type="button" name="" value="Login">
      </form>
    </div>
</body>
</html>

