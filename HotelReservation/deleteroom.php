<?php
include_once('configuration.php');
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];
  $sql="DELETE FROM room where Room_id = $id";
  $result = mysqli_query($con,$sql);
  if($result){
    header('location:room.php');
  }else{
    echo "Not Deleted";
  }
}
 ?>
