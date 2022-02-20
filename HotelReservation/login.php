<?php
include_once('configuration.php');
if(isset($_POST['create'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from guest where username = '$username'";
  $result = mysqli_query($con, $sql);
  if($result){
    if($result){
      $username = mysqli_fetch_assoc($result);
      if($username['password'] === $password){
        session_start();
        $_SESSION['logged_in'] = true;
        // echo '<!-- <pre>';
        // var_dump($_SESSION);
        // echo '</pre> -->';
        header("Location:userroom.php");

      }
    }
  }
  else {
    echo "there is error";
  }
}
 ?>

 <!Doctype html>
 <html>
 <head>
   <meta charset = "utf-8">
   <title> Login page </title>
   <link rel = "stylesheet" type="text/css"href="index.css"/>
 </head>
 <body>
   <div>
<form action="login.php" method="post" accept-charset="utf-8">
<section id="login">
  <div class="s_container">
  <div class="form">
    <h1> LOGIN </h1>
  </div>

    <label class="info" for="username"> <b> User Name: </b><br></label>
    <input type="text" name="username" required placeholder="username"><br><br>

    <label class="info" for="password"> <b> Password: </b><br></label>
    <input type="password" name ="password" required placeholder="password"><br><br>
    <input class="btn-primary" type="submit" name="create" value="Login">
  </div>
</section>

</form>
</div>
</body>
</html>
