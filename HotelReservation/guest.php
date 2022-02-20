<?php
include_once ('configuration.php');
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Display Guests </title>
<head>
<body>
  <h1> <center>Users</h1>
  <Table width = "100%" border = "1">
    <tr>
      <td> <center> <b>ID. </td>
      <td><center> <b>Username</b> </td>
      <td><center> <b>Firstname </td>
      <td><center> <b>LastName</td>
      <td><center> <b>Email</td>
      <td><center> <b>Mobile</td>
    </tr>


  <?php
$sql = "select * from guest";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><center> <?php echo $row['id'];?> </td>
      <td> <center><?php echo $row['username'];?> </td>
      <td> <center><?php echo $row['First_name'];?> </td>
      <td><center> <?php echo $row['Last_name'];?> </td>
      <td><center> <?php echo $row['Email_address'];?> </td>
      <td><center> <?php echo $row['Phone_number'];?> </td>
    </tr>

  <?php }
} ?>
</table>
</body
</html>
