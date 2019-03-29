<?php
require 'dbconfig/config.php';
  if (isset($_SESSION['username']));
  $sql = "SELECT * FROM billing";
  $records=mysqli_query($con,$sql);
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
                        <li class="nav-item dropdown active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Billing
                          </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="resedential.php">Resedential</a>
                              <a class="dropdown-item" href="commercial.php">Commercial</a>
                        </li>  
                        <li class="nav-item dropdown active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Other
                          </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="payment.php">Payment</a>
                                <a class="dropdown-item" href="discount.php">Discount</a>
                        </li>
          </ul>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <ul class="navbar-nav nav-flex-icons">
                                          <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Logout</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
      </nav>


<script src="jquery/jquery-3.3.1.slim.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="jquery/bootstrap.min.js"></script>

    <center>
      <div>
        <div class="row justify-content-center">
          <div class="col-6">
            <h1>Consumer Bill List</h1>
          </div>
        </div>
      
      <table class="table table-bordered table-hover table-striped" >
        <tr>
          <th>Account_no</th>
          <th>Reading_Date</th>
          <th>Due_Date</th>
          <th>Previous_Reading</th>
          <th>Present_Reading</th>
          <th>Cutting_Date</th>
          <th>Bill_Amount</th>
          <th colspan='2'>Action</th>
        </tr>

        <?php
          while($conbill=mysqli_fetch_assoc($records)){
            echo "<tr>";?>
            <td><?php echo $conbill['Account_no'] ?></td>
            <td><?php echo $conbill['Reading_Date'] ?></td>
            <td><?php echo $conbill['Due_Date'] ?></td>
            <td><?php echo $conbill['Previous_Reading'] ?></td>
            <td><?php echo $conbill['Present_Reading'] ?></td>
            <td><?php echo $conbill['Cutting_Date'] ?></td>
            <td><?php echo $conbill['Bill_Amount'] ?></td>
            <td>
             <a href="view_conbill.php?view_Id=<?php echo $conbill['Account_no']; ?>"><i class="fas fa-eye"></i></a>
            </td>
            <td>
              <a href="add_conbill.php?add_id=<?php echo $conbill['Account_no']; ?>"><i class="fas fa-plus"></i></a>
          </tr>
        <?php }
        ?>
      </table>
     </div>
 </center>
      


      <div class="d-flex justify-content-end mr-5">
      
      <a href="add_consumer.php"><h1><i class="fas fa-plus-circle    "></i></h1></a>
      <a href="index.php" class="btn btn-danger"> <i class="fas fa-power-off    "></i></a>
      <a href ="home.php"><input class="btn" type="button" id="list_btn" value="Home Page"/><br></a>
        </div>
</body>
</html>
