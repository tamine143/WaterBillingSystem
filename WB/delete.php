<?php  
  require 'dbconfig/config.php';

  $consumer_account = $_GET['delete_account'];
  $delete= "Delete from consumer where Account_no = ".$consumer_account;
  if (mysqli_query($con, $delete)) {
    header('location: list.php');
  }else {
    echo "Error: " . $insert_consumer . "<br>" . mysqli_error($con);
  }


?>