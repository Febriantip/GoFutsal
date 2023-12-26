<?php

  require 'koneksi.php';

  if(isset($_POST["login"])){
    
    $username = set_value('username');
    $password = set_value('password');

    $ambil = mysqli_query($konek,"SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($ambil) === 1){

      //cek password
      $data = mysqli_fetch_assoc($ambil);
      if(password_verify($password,$data['password'])){
        header("Location:index.php");
        exit();
      }
    }
    $error = true;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(lap1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.container label{
    text-align: left;
    color: #fff;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #fff;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}
.back{
  text-decoration: none;
  color: #fff;
}
</style>
<body>
    <div class="container">
          <h1>Login</h1>

            <form>
              <ul>
                <li>
                  <label>Username</label><br>
                  <input type="text"><br>
                </li>
                <li>
                  <label>Password</label><br>
                  <input type="password"><br>
                </li>
                  <button><a href="index.php" class="back">login</a></button>
                <br>
                <br>
                  <button><a href="Dashboard.html" class="back">BACK</a></button> 
               </ul>
            </form>
    </div>   
</body>
</html>