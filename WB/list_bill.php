<?php
require 'dbconfig/config.php';
	if (isset($_SESSION['username']));
	$sql = "SELECT * FROM consumer,billing WHERE consumer.Account_no = billing.Account_no";
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
						<h1>Bill List</h1>
					</div>
				</div>
			
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th>Billing ID</th>
      		<th>Account NO</th>
      		<th>Billing Date</th>
      		<th>Present Reading</th>
      		<th>Previous Reading</th>
      		<th>Due Date</th>
      		<th>Cutting Date</th>
      		<th>Bill Amount</th>
          <th colspan='3'>Action</th>
      	</tr>

      	<?php
      		while($consumer=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>
						<td><?php echo $consumer['billing_id'] ?></td>
						<td><?php echo $consumer['Account_no'] ?></td>
						<td><?php echo $consumer['billing_date'] ?></td>
						<td><?php echo $consumer['present_reading'] ?></td>
						<td><?php echo $consumer['previous_reading'] ?></td>
						<td><?php echo $consumer['due_date'] ?></td>
						<td><?php echo $consumer['cutting_date'] ?></td>
						<td><?php echo $consumer['bill_amount'] ?></td>
						<td>
							<a href="payment.php?account_no=<?php echo $consumer['Account_no']; ?>&billing_id=<?php echo $consumer['billing_id']; ?>&bill_amount=<?php echo $consumer['bill_amount']; ?>"><i class="fas fa-eye"></i></a>
						</td>
            <td>
              <a href="delete_bill.php?delete_account=<?php echo $consumer['Account_no']; ?>"><i class="fas fa-trash text-danger "></i></a>
            </td>
						<td>
							<a href="edit_bill.php?edit_account=<?php echo $consumer['Account_no']; ?>"><i class="fas fa-user-edit    "></i></a>
						</td>
					</tr>
      	<?php	}
      	?>
      </table>
     </div>
 </center>
</body>
</html>
