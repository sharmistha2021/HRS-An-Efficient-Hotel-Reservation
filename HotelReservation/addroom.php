<?php
include_once('configuration.php');
 ?>

 <!Doctype html>
 <html>
 <head>
   <meta charset = "utf-8">
   <title> Add Room </title>
 </head>
 <body>
   <div>
     <?php
      if(isset($_POST['create'])){
        $roomNo = $_POST['Room_number'];
        $roomType = $_POST['Room_type'];
        $roomPrice = $_POST['Room_price'];
        $roomStatus = $_POST['Room_status'];

        $sql = "INSERT INTO room(Room_number,
                                Room_type,
                                Room_price,
                                Room_status)
                                values('$roomNo', '$roomType', '$roomPrice' , '$roomStatus')";
        $result = mysqli_query($con, $sql);
        if($result){
          echo "successfully saved";
        }
        else {
          echo "there is error saving the data";
        }}
        ?>

    <form action="addroom.php" method="post" accept-charset="utf-8">
      <div>
        <Table width = "100%" border = "1">
          <tr>
            <td><center> <b>Room Number</b> </td>
            <td><center> <b>Room type</td>
            <td><center> <b>Room price</td>
            <td><center> <b>Room status</td>
          </tr>
          <tr>
            <td><center><input type="text" name="Room_number"></td>
            <td><center><input type="text" name="Room_type"></td>
            <td><center><input type="text" name="Room_price"></td>
            <td><center><input type="text" name="Room_status"></td>
          </tr>
        </div>
          <input class="btn-primary" type="submit" name="create" value="ADD">

    </form>
  </div>
</body>
</html
