<?php
session_start();
include_once ('configuration.php');
if(isset($_SESSION['logged_in'])){
  echo "you are logged_in" ;
}else{
  echo "not logged_in";

}
 ?>
<html>
  <body>

    <form action = "log_out.php" method = "get">
  <input class="btn-primary" type="submit" name="create" value="Logout">
</form>
  </body>
</html>
