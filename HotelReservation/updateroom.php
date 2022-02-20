<?php
include_once('configuration.php');
$id='';
if(isset($_GET['updateid'])){
$id = $_GET['updateid'];
}
 ?>

 <!Doctype html>
 <html>
 <head>
   <meta charset = "utf-8">
   <title> Update room </title>
 </head>
 <body>
   <div>
     <?php
 
      if(isset($_POST['create'])){
        print_r($_POST);
        $rid = $_POST['db_room_id'];
        $roomNo = $_POST['Room_number'];
        $roomType = $_POST['Room_type'];
        $roomPrice = $_POST['Room_price'];
        $roomStatus = $_POST['Room_status'];
        $sql = "UPDATE room
                SET Room_number=$roomNo,
                    Room_type = '$roomType', 
                    Room_price = $roomPrice, 
                    Room_status = '$roomStatus'
                WHERE Room_id = '$rid'";
        $result = mysqli_query($con, $sql);
        
        if($result){
          header("Location:room.php?update=successful");
        }
        else {
          echo "there is error saving the data".mysqli_error($con);
        }}
        ?>

    <form action="updateroom.php" method="post" accept-charset="utf-8">
      <div>
        <Table width = "100%" border = "1">
          <tr>
            <td><center> <b>Room Number</b> </td>
            <td><center> <b>Room type</td>
            <td><center> <b>Room price</td>
            <td><center> <b>Room status</td>
          </tr>
          <tr>
            <input type="hidden" name="db_room_id" value=<?php echo $id; ?>/>
            <td><center><input type="text" name="Room_number"></td>
            <td><center><input type="text" name="Room_type"></td>
            <td><center><input type="text" name="Room_price"></td>
            <td><center><input type="text" name="Room_status"></td>
          </tr>
        </div>
          <input class="btn-primary" type="submit" name="create" value="UPDATE">

    </form>
  </div>
</body>
</html
