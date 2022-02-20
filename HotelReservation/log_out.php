<?php
    session_start();
    include_once('configuration.php');
    session_destroy();
    header("Location:index.php");
 ?>
