
<?php

  require '../dbconfig/config.php';

  if(isset($_POST['find_account']))
  {
  	$account_no = $_POST['account_no'];

  	$query = "SELECT * FROM `consumer`  where Account_no =". $account_no;
  	$result = mysqli_query($con,$query );
  	$row = mysqli_fetch_assoc($result);
  	$account['First_name'] = $row['First_name'];
  	$account['Middle_name'] = $row['Middle_name'];
  	$account['Last_name'] = $row['Last_name'];
  	$account['initial'] = $row['Initial_reading'];

  	echo json_encode($account);

  }

  if(isset($_POST['senior_pwd']))
  {
  	$senior_pwd = $_POST['senior_pwd'];

  	$query = "SELECT ".$senior_pwd." FROM `discount`";
  	$result = mysqli_query($con,$query );
  	$row = mysqli_fetch_assoc($result);
  	$discount['discount'] = $row[$senior_pwd]; 

  	echo json_encode($discount);

  }
 