<?php

  require 'dbconfig/config.php';
  if(isset($_POST['save'])){
    $Account_no = $_POST['Account_no'];
    $Reading_Date = $_POST['Reading_Date'];
    $Due_Date = $_POST['Due_Date'];
    $Previous_Reading = $_POST['Previous_Reading'];
    $Present_Reading = $_POST['Present_Reading'];
    $Cutting_Date = $_POST['Cutting_Date'];
    $Bill_Amount = $_POST['Bill_Amount'];

    $insert_conbill = "INSERT INTO `wb`.`billing` (`Account_no`, `Reading_Date`, `Due_Date`, `Previous_Reading`, `Present_Reading`, `Cutting_Date`, `Bill_Amount`) VALUES ('$Account_no', '$Reading_Date', '$Due_Date', '$Previous_Reading', '$Present_Reading', '$Cutting_Date', '$Bill_Amount')";
    
    if (mysqli_query($con, $insert_conbill)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){
            location.href='';
          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_conbill . "<br>" . mysqli_error($con);
    }

      }

?>

<!DOCTYPE.html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="style.css">
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
                <h1>Add Conbill</h1>
      </center>
       <form class="needs-validation" action="add_conbill.php" method='post'>
  <div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom01">Account no</label>
        <input type="number" class="form-control" name="Account_no" id="validationCustom01" required>
      </div>  
      <div class="form-group col-md-3">
        <label for="validationCustom02">Reading Date</label>
        <input type="Date" class="form-control" name="Reading_Date" id="validationCustom0" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Due Date</label>
        <input type="Date" class="form-control" name="Due_Date" id="validationCustom03" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Previous Reading</label>
        <input type="text" class="form-control" name="Previous_Reading" id="validationCustom04" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom05">Present Reading</label>
        <input type="text" class="form-control" name="Present_Reading" id="validationCustom05" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom06">Cutting Date</label>
        <input type="Date" class="form-control" name="Cutting_Date" id="validationCustom06" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom07">Bill Amount</label>
        <input type="text" class="form-control" name="Bill_Amount" id="validationCustom07" required>
      </div>
      
        
              <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
              <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
</form>


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
</body>
</html>