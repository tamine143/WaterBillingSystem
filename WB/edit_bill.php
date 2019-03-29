<?php
  session_start();
  require 'dbconfig/config.php';
  $edit_bill = $_GET['edit_account'];
  

 	if(isset($_GET['edit_account'])){

	$get_bill = mysqli_query($con, "SELECT * from billing WHERE Account_no = '$edit_bill'");

  $row = mysqli_fetch_array($get_bill);
   }

	
   if(isset($_POST['Edit'])){
    $billing_id = $_POST['billing_id'];
    $Account_no = $_POST['Account_no'];
		$present_reading = $_POST['present_reading'];
    $previous_reading = $_POST['previous_reading'];
    $due_date = $_POST['due_date'];
    $cutting_date = $_POST['cutting_date'];
    $bill_amount = $_POST['bill_amount'];
    
    $updated = " UPDATE `billing` SET `billing_id`='$billing_id', `Account_no`='$Account_no', `present_reading`='$present_reading', `previous_reading`='$previous_reading', `due_date`='$due_date', `cutting_date`='$cutting_date', `bill_amount`='$bill_amount' WHERE Account_no = '$edit_bill' ";
    if (mysqli_query($con, $updated)) {

      header('location: list_bill.php');
    }else {
      echo "Error: " . $updated . "<br>" . mysqli_error($con);
    }

      }
        
?>


<!DOCTYPE.html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="mystyle.css">
<?php include('style.php')?>
</head>
<body>
  
			<div>
      <h1>Edit Consumer</h1>
      <form action="list_bill.php?edit_account=<?php echo $_GET['edit_account']; ?>" method='post'>
<div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom01">Billing ID</label>
        <input type="number" class="form-control" name="billing_id" value="<?php  echo $row['billing_id'];  ?>" id="validationCustom01" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom02">Account No</label>
        <input type="number" class="form-control" name="Account_no" value="<?php  echo $row['Account_no'];  ?>" id="validationCustom02" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Present Reading</label>
        <input type="number" class="form-control" name="present_reading" value="<?php  echo $row['present_reading'];  ?>" id="validationCustom03" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Previous Reading</label>
        <input type="number" class="form-control" name="previous_reading" value="<?php  echo $row['previous_reading'];  ?>" id="validationCustom04" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom05">Due Date</label>
        <input type="Date" class="form-control" name="due_date" value="<?php  echo $row['due_date'];  ?>" id="validationCustom05" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom06">Cutting Date</label>
        <input type="Date" class="form-control" name="cutting_date" value="<?php  echo $row['cutting_date'];  ?>"  id="validationCustom06" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom07">Bill Amount</label>
        <input type="number" class="form-control" name="bill_amount" value="<?php  echo $row['bill_amount'];  ?>"  id="validationCustom07" required>
      </div>
		        <input class="btn" type="submit" name ="Edit" id="edit_btn" value="Update"/>
            <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
</form>

<script src="jquery/jquery-3.3.1.slim.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="jquery/bootstrap.min.js"></script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }); 
  }, false);
})();
</script>
			
			</div>	
</body>
</html>
