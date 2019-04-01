<?php
		require 'dbconfig/config.php';
		session_start();
		$error = array();

		if(isset($_POST['login'])){
		$username = mysqli_escape_string($con, $_POST['username']);
		$password = mysqli_escape_string($con, $_POST['password']);

		if (empty($username)){
			array_push($error, "username is required");
		}
		if (empty($password)){
			array_push($error, "password is required");
		}
		if(count($error) == 0){
		$password = md5($password);
		$query = " SELECT * FROM user Where username = '$username' AND password ='$password'";
		$results = mysqli_query($con, $query);
		$num_count = mysqli_num_rows($results);
		if ($num_count == 1){
			$row = mysqli_fetch_array($results);
			$_SESSION['username'] = $row['username'];
			$_SESSION['success'] = "Welcome";
			header('location: home.php');
			
		}
		else{
			array_push($error, "Invalid username pr password");
			}
		}
	}	
?>

<!DOCTYPE.html>
<html>
	<head>
		<title>Water Billing</title>
			<link rel="stylesheet" type="text/css" href="style.css">
				<?php include('style.php')?>
	</head>
<body style="background-color: skyblue;">
	<div class="container" style="width: 500px;
    	border: solid 10px;
    	border-radius: 4px;
    	margin-top: 65px;
    	background-color: skyblue;
	}">
	<h2 align="center">WATER BILLING SYSTEM</h2><hr>
	<form method="post">
		<div class="form-group">
			<b><label for="user">Username:</label></b>
			<input type="text" name="username" class="form-control" id="user" placeholder="Enter Username" required>
		</div>
		<div class="form-group">
			<b><label for="pwd">Password:</label></b>
			<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
		</div>
		<div align="center">
		<button type="submit" name="login" class="btn btn-default">Login</button>
		</div>
	</form>
</body>
</html>

