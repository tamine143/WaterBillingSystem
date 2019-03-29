<?php
require 'dbconfig/config.php';
	if (isset($_SESSION['username']));
	$sql = "SELECT * FROM consumer";
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
                                          <li class="nav-item active">
                                            <a class="nav-link" href="index.php"> <i class="fas fa-power-off    "></i></a>
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
						<h1>Consumer List</h1>
					</div>
				</div>
			
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th>Account no</th>
      		<th>First name</th>
      		<th>Middle name</th>
      		<th>Last name</th>
      		<th>Purok</th>
      		<th>Barangay</th>
      		<th>City</th>
      		<th>Birthdate</th>
      		<th>Birth place</th>
      		<th>Contact no</th>
      		<th>Civil status</th>
      		<th>Occupation</th>
      		<th>Spouse name</th>
      		<th>Mother name</th>
      		<th>Father name</th>
      		<th>Type of residence</th>
      		<th>Public or Private</th>
      		<th>Senior or Pwd</th>
      		<th>Monthly income</th>
      		<th>Meter brand</th>
      		<th>Date installed</th>
          <th>Initial Reading</th>
          <th colspan='2'>Action</th>
      	</tr>

      	<?php
      		while($consumer=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
						<td><?php echo $consumer['Account_no'] ?></td>
						<td><?php echo $consumer['First_name'] ?></td>
						<td><?php echo $consumer['Middle_name'] ?></td>
						<td><?php echo $consumer['Last_name'] ?></td>
						<td><?php echo $consumer['Purok'] ?></td>
						<td><?php echo $consumer['Barangay'] ?></td>
						<td><?php echo $consumer['City'] ?></td>
						<td><?php echo $consumer['Birthdate'] ?></td>
						<td><?php echo $consumer['Birth_place'] ?></td>
						<td><?php echo $consumer['Contact_no'] ?></td>
						<td><?php echo $consumer['Civil_status'] ?></td>
						<td><?php echo $consumer['Occupation'] ?></td>
						<td><?php echo $consumer['Spouse_name'] ?></td>
						<td><?php echo $consumer['Mother_name'] ?></td>
						<td><?php echo $consumer['Father_name'] ?></td>
						<td><?php echo $consumer['Type_of_residence'] ?></td>
						<td><?php echo $consumer['Public_or_Private'] ?></td>
						<td><?php echo $consumer['Senior_or_Pwd'] ?></td>
						<td><?php echo $consumer['Monthly_income'] ?></td>
						<td><?php echo $consumer['Meter_brand'] ?></td>
						<td><?php echo $consumer['Date_installed'] ?></td>
            <td><?php echo $consumer['Initial_reading'] ?></td>
						<td>
							<a href="delete.php?delete_account=<?php echo $consumer['Account_no']; ?>"><i class="fas fa-trash text-danger "></i></a>
						</td>
						<td>
							<a href="edit.php?edit_account=<?php echo $consumer['Account_no']; ?>"><i class="fas fa-user-edit    "></i></a>
						</td>
					</tr>
      	<?php	}
      	?>
      </table>
     </div>
 </center>
</body>
</html>
