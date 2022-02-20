<?php
include_once('configuration.php');
 ?>

 <!Doctype html>
 <html>
 <head>
   <meta charset = "utf-8">
   <title> signup page </title>
   <link rel = "stylesheet" type="text/css"href="index.css"/>
 </head>
 <body>
   <div>
     <?php
      if(isset($_POST['create'])){
        $firstname = $_POST['First_name'];
        $lastname = $_POST['Last_name'];
        $phone = $_POST['Phone_number'];
        $email = $_POST['Email_address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO guest(First_name, Last_name,  Phone_number, Email_address, username, password)values('$firstname', '$lastname', '$phone' , '$email', '$username', '$password')";
        $result = mysqli_query($con, $sql);
        if($result){
          echo "successfully saved";
          header("Location: login.php");
          die;
        }
        else {
          echo "there is error saving the data";
        }}
        ?>

        <form action="signup.php" method="post" accept-charset="utf-8">
        <section id="signup">
          <div class="s_container">
          <div class="form">
            <h1> Registration Form </h1>
            <p> Please Fill up the Form: </p>
          </div>

            <label class="info" for="First_name"> <b> First Name: </b><br></label>
            <input type="text" name="First_name" required placeholder="firstname"><br><br>

            <label class="info" for="Last_name"> <b> Last Name: </b><br></label>
            <input type="text" name="Last_name" required placeholder="lastname"><br><br>

            <label class="info" for="Email_address"> <b> Email: </b><br></label>
            <input type="email" name="Email_address" required placeholder="..@email.com"><br><br>

            <label class="info" for="Phone_number"> <b> Mobile: </b><br></label>
            <input type="int" name="Phone" required placeholder="mobile"><br><br>

            <label class="info" for="username"> <b> User Name: </b><br></label>
            <input type="text" name="username" required placeholder="username"><br><br>

            <label class="info" for="password"> <b> Password: </b><br></label>
            <input type="password" name ="password" required placeholder="password"><br><br>
            <input class="btn-primary" type="submit" name="create" value="sign up">
          </div>
        </section>

        </form>
      </div>
    </body>
    </html>
