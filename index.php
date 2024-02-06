<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
  * {
    margin:auto; padding: 0;
  }
  body {
    font-size: 14px;
    font-style: arial;
    background-image: url(./asset/img/bg.jpg);
    background-repeat: no-repeat; position: center;
  }
  .login-logo, .log-row {
    height:auto; width:200px;
    display: block; padding:40px 0;
  }
  .form-heading {
    width: 100%; padding: 20px 0;
    text-align: center; color: #FFF;
    background-color: #E2314E;
  }

  .login-wrap {
    margin-left: -2em;
  }

  .login-wrap input {
    padding: 10px; width: 100%;
    margin-bottom: 10px; border: 0;
  }
  .btn {
    border: 0; background-color: #E2314E;
    width: 108%; color: #FFF; padding: 10.5px;
    cursor: pointer;
  }

  .registration {
    text-align: center; color: #FFF; width: 108%;
    font-size: 12px; margin-top:1em;
    letter-spacing: 1px; font-weight: bold;
  }
  .dd {
    text-align: center; color: #E2314E;
    font-size: 12px; margin-bottom: 1em;
    letter-spacing: 1px;
  }
  </style>
</head>
<body>
<div class="style-login">
    <div class="login-logo">
          <img src="./asset/img/login_logo.png" alt=""/>
      </div>

      <h2 class="form-heading">Login</h2>
      <div class="container log-row">
          <?php
            if(isset($_POST['login'])){
              include("./acai/koneksi.php");
              
              $username = $_POST['username'];
              $password = md5($_POST['password']);
              
              $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
              if(mysqli_num_rows($query) == 0){
                echo '<div class="dd">Maaf...!!! anda gagal login.</div>';
              }else{
                $row = mysqli_fetch_assoc($query);                
                if($row['level'] == admin){
                  $_SESSION['username']=$username;
                  header("Location: ./admin/index.php");
                }else if($row['level'] == kaprodi){
                  $_SESSION['username']=$username;
                  header("Location: ./kaprodi/index.php");
                }else if($row['level'] == tim-borang){
                  $_SESSION['username']=$username;
                  header("Location: ./tim-borang/index.php");
                }else{
                  echo '<div class="dd">Maaf...!!! anda gagal login.</div>';
                }
              }
            }
          ?>
          <form class="form-signin" method="post">
              <div class="login-wrap">
                  <input type="text" name="username" placeholder="Username" required>
                  <input type="password" name="password" placeholder="Password" required>
                  <button class="btn" type="submit" name="login">LOGIN</button>
                  <br>
                  <div class="registration">
                      Masukkan Username dan Password!
                  </div>
              </div>
          </form>
      </div>
</div>
</body>
</html>