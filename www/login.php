<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>LOGIN</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="min/style.css" type="text/css" rel="stylesheet" >
    <link href="css/stylemap.css" type="text/css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php
include 'koneksi.php';
session_start();
if(isset($_SESSION['user'])){
  header("location:index.php");
}
$user=$pass=$error="";
if(isset($_POST['submit'])){
    $user=$_POST['user']; 
    $pass=$_POST['pass'];
    $query = mysql_query("SELECT * FROM user WHERE username = '$user' and password = '$pass'");
    $row=mysql_num_rows($query);
    if ($row==1){
        $_SESSION['user'] = $user;
        header("location:index.php");
    } else {
        $error="Username atau Password Anda Salah";
    }
}

?>

</head>
<body bgcolor="#e0e0e0">
    <div class="row" style="margin-top: 7.5%;">
      <div class="col s12 m4 offset-m4 l4 offset-l4">
       <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s12">
              <span class="black-text center-align">
                <h4>LOGIN</h4>
                <span class="red-text"><center><?php echo $error ?></center></span>
                <form action="" method="POST">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="user" class="validate" maxlength="32">
                    <label for="username">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="pass" class="validate" maxlength="32">
                    <label for="password">Password</label>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="submit">LOGIN
                    <i class="material-icons right">send</i>
                  </button>
                </form>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</html>