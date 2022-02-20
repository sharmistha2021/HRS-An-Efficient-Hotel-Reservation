<?php
include_once ('configuration.php');
if($_GET['update'] == 'successful'){
  echo "Update successful";
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Display Rooms </title>
<head>
<body>
  <h1> <center>Rooms</h1>
  <center> <a href="addroom.php">Add Room</a>
  <Table width = "100%" border = "1">
    <tr>
      <td> <center> <b>Room ID. </td>
      <td><center> <b>Room Number</b> </td>
      <td><center> <b>Room type</td>
      <td><center> <b>Room price</td>
      <td><center> <b>Room status</td>
      <td><center> <b>Action</td>
    </tr>


  <?php
$sql = "select * from room";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><center> <?php echo $row['Room_id'];?> </td>
      <td> <center><?php echo $row['Room_number'];?> </td>
      <td> <center><?php echo $row['Room_type'];?> </td>
      <td><center> <?php echo $row['Room_price'];?> </td>
      <td><center> <?php echo $row['Room_status'];?> </td>
      <td><center> <a href="updateroom.php?updateid=<?php echo $row['Room_id'];?> ">Update</a><a href="deleteroom.php?deleteid=<?php echo $row['Room_id']?> ">Delete</a> </td>
    </tr>

  <?php }
} ?>
</table>
</body
</html>
