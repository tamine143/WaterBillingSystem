<?php
  require 'dbconfig/config.php';

  if(isset($_POST['Insert'])){
    $receipt_no = $_POST['receipt_no'];
    $billing_id = $_POST['billing_id'];
    $Account_no = $_POST['Account_no'];
    $Senior_or_Pwd = $_POST['Senior_or_Pwd'];
    $discount = $_POST['discount'];
    $penalty = $_POST['penalty'];
    $Bill_Amount = $_POST['Bill_Amount'];
    $total_amount_to_be_pay = $_POST['total_amount_to_be_pay'];
    $Date_payed = $_POST['Date_payed'];
    $Mode_of_payment = $_POST['Mode_of_payment'];

    $insert_payment = "INSERT INTO `payment` (`receipt_no`, `billing_id`, `Account_no`, `Senior_or_Pwd`, `discount`, `penalty`, `Bill_Amount`, `total_amount_to_be_pay`, `Date_payed`, `Mode_of_payment`) VALUES ($receipt_no, $billing_id, $Account_no, '$Senior_or_Pwd', $discount, $penalty, $Bill_Amount, $total_amount_to_be_pay, '$Date_payed', '$Mode_of_payment')";
    
    if (mysqli_query($con, $insert_payment)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){
            location.href='payment.php';
          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_payment . "<br>" . mysqli_error($con);
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
                                            <a class="nav-link" href="index.php">Logout</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
      </nav>
 

       	<h1><b>Payment</b></h1>
    <form class="needs-validation" method='post'>
  <div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom02">Receipt No</label>
        <input type="number" class="form-control" name="receipt_no" id="validationCustom02" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Billing ID</label>
        <input type="number" value="<?php echo isset($_GET['billing_id']) ? $_GET['billing_id'] : null;  ?>" class="form-control" name="billing_id" id="validationCustom03" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Account No</label>
        <input type="number" class="form-control" value="<?php echo isset($_GET['account_no']) ? $_GET['account_no'] : null;  ?>" name="Account_no" id="validationCustom04" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom05">Senior or Pwd</label>
        <!--input type="text" class="form-control" name="Senior_or_Pwd" id="validationCustom05" required-->
        <select  class="form-control" name="Senior_or_Pwd" id="validationCustom05" required>
          <option value=""></option> 
          <option value="Senior">Senior</option>
          <option value="Pwd">Pwd</option> 
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom06">Discount</label>
        <input type="number" class="form-control" name="discount" id="validationCustom06" required>
      </div>
      <div class="form-group col-md-3">
        <label for="penalty">Penalty</label>
        <input type="number" class="form-control" value="0" name="penalty" id="penalty" required>
      </div>
      <div class="form-group col-md-3">
        <label for="bill_amount">Bill Amount</label>
        <input type="number" value="<?php echo isset($_GET['bill_amount']) ? $_GET['bill_amount'] : null;  ?>"  class="form-control" name="Bill_Amount" id="bill_amount" required>
      </div>
            <div class="form-group col-md-3">
        <label for="totpay">Total Amount to be Pay</label>
        <input type="number" class="form-control"  name="total_amount_to_be_pay" id="totpay" required>
      </div>
        <div class="form-group col-md-3">
        <label for="validationCustom07">Date Payed</label>
        <input type="Date"  class="form-control" name="Date_payed" id="validationCustom07" required>
      </div>
	<div class="form-row">	
		<div class="col-md-3">
			<label>Mode of Payment</label>
				<select class="form-control form-control-sm" name="Mode_of_payment">
				<option value="residential">Cash</option>
					<option value="commercial">Check</option>>
			</select>
		</div>
	</div>
  <input class="btn" type="submit" name ="Insert" id="save_btn" value="Save"/>
  
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <button id="btnPrint" type="button" class="btn btn-info btn-rounded btn-sm" >Print</button>
          </div>
        </div>
      </div>
</center>
</table>
<script src="jquery/jquery-3.3.1.slim.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="jquery/bootstrap.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/jquery-3.3.1.min.js"></script>

<script>

  $( document ).ready(function() { 
    var bill_amount = parseFloat($('#bill_amount').val()); 
    $('#validationCustom06').change(function(){ 
      if($(this).val().length > 0 ){
        $('#totpay').val(bill_amount -  parseFloat($(this).val())); 
      }
         
    }); 
    
    $('#validationCustom05').change(function(){  
      $.ajax({
        url: 'components/query.php',
        type: 'POST',
        data:{
          'senior_pwd':1,
          'senior_pwd': $(this).val()
        },
        async: true,
        dataType: 'JSON',
        success: function(response,data){  
          $('#validationCustom06').val(response.discount) ;
          $('#validationCustom06').change(); 
          
          $('#totpay').val( parseFloat($('#totpay').val()) - parseFloat($('#penalty').val()));
        }, 
        // Error Handler
        error: function(xhr, textStatus, error){
          console.info(xhr.responseText);
        }
  
      });
    });


  });
    
</script>
</body>
</html>

