<?php session_start();

if(!isset($_SESSION['username'])){
  header('location: index.php');
}
if(isset($_POST['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: index.php');
}
?>

<!DOCTYPE.html>
<html>
  <head>
    <title>Water Billing</title>
      <link rel="stylesheet" type="text/css" href="style.css">
        <?php include('style.php')?>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Water Bill Info</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Consumer
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="add_consumer.php">Add Consumer</a>
                      <a class="dropdown-item" href="list.php">List of Consumer</a>
              </li>   
                <li class="nav-item active">
                    <a class="nav-link" href="billing.php">Billing</a>
                </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Other
                                </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="payment.php">Payment</a>
                                    <a class="dropdown-item" href="discount.php">Discount</a>
                                    <a class="dropdown-item" href="penalty.php">Penalty</a>
                                    <a class="dropdown-item" href="commercial.php">Commercial</a>
                                    <a class="dropdown-item" href="residential.php">Residential</a>
                            </li>
          </ul>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <ul class="navbar-nav nav-flex-icons">
                                          <li class="nav-item active" name="logout">
                                            <a class="nav-link" name="logout" href="index.php"> <i class="fas fa-power-off    "></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
      </nav>

<center>
	   <div class ="tag">
		    <marquee><h1><b>GOOD WATER brings GOOD LIFE</b><br>
		    <b>Sustainable, Affordable, Realiable, and Safe water for all.</b></h1>
	   </div></marquee>
</center>
	

<script src="jquery/jquery-3.3.1.slim.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="jquery/bootstrap.min.js"></script>
	
	
</body>
</html>
