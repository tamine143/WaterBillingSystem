<?php

  require 'dbconfig/config.php';
  if(isset($_POST['Add'])){
    $billing_id = $_POST['billing_id'];
    $Account_no = $_POST['Account_no'];
    $billing_date = $_POST['billing_date'];
    $present_reading = $_POST['present_reading'];
    $previous_reading = $_POST['previous_reading'];
    $due_date = $_POST['due_date'];
    $cutting_date = $_POST['cutting_date'];
    $bill_amount = $_POST['bill_amount'];

     $insert_bill = "INSERT INTO `billing` (`billing_id`, `Account_no`, `billing_date`, `present_reading`, `previous_reading`, `due_date`, `cutting_date`, `bill_amount`) VALUES ('$billing_id', '$Account_no', '$billing_date', '$present_reading', '$previous_reading', '$due_date', '$cutting_date', '$bill_amount')";
    
    
    if (mysqli_query($con, $insert_bill)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){
            location.href='';
          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_bill . "<br>" . mysqli_error($con);
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
                                            <a class="nav-link" href="index.php"> <i class="fas fa-power-off    "></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
</nav>


      <center>
                <h1>Add Bill</h1>
      </center>
       <form class="needs-validation" method='post'>
  <div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom02">Billing ID</label>
        <input type="number" class="form-control" name="billing_id" id="validationCustom0" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Account No</label>
        <select name="Account_no"  class="form-control" id="validationCustom03" required>
          <option value=""></option>
          <?php
            $q = "SELECT * FROM `consumer`";
            $result = mysqli_query($con, $q );
            while($row = mysqli_fetch_assoc($result))
            {?> 
              <option value="<?php echo $row['Account_no'] ?>"><?php echo $row['Account_no'] ?></option> 

            <?php }
          ?>

        </select>
        <!--input type="number" class="form-control" name="Account_no" id="validationCustom03" required-->
      </div>
      <div  class="form-group col-md-3 name">
        <label for="validationCustom04">Name</label>
        <input type="text" class="form-control" id="name" readonly="">
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Billing Date</label>
        <input type="Date" class="form-control" name="billing_date" id="validationCustom04" required>
      </div>
      <div class="form-group col-md-3 reading">
        <label for="validationCustom05">Previous Reading</label>
        <input type="number" class="form-control" name="previous_reading" id="reading" readonly="">
      </div>
      <div class="form-group col-md-3">
        <label for="pre">Present Reading</label>
        <input type="number" class="form-control" name="present_reading" id="pre" required>
      </div>
       <div class="form-group col-md-3">
        <label for="validationCustom07">Due Date</label>
        <input type="Date" class="form-control" name="due_date" onchange="setSecondDate();" id="date1" required>
      </div>
      <div class="form-group col-md-3">
        <label for="cutting_date">Cutting Date</label>
        <input type="Date" class="form-control"  name="cutting_date" id="date2"/>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom09">Bill Amount</label>
        <input type="number" class="form-control" name="bill_amount" id="validationCustom09" required>
      </div>        
              <input class="btn" type="submit" name ="Add" id="Add_btn" value="Add"/>
              <a href ="list_bill.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
</form>

<script src="jquery/jquery-3.3.1.slim.min.js"></script>
<script src="jquery/popper.min.js"></script>
<script src="jquery/bootstrap.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/jquery-3.3.1.min.js"></script>

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

<script>
function setSecondDate() {
    var days = 5;
    var date = new Date(document.getElementById("date1").value);
    date.setDate(date.getDate() + parseInt(days));
    document.getElementById("date2").valueAsDate = date;
};
  $( document ).ready(function() {
    $('.name').hide();
    $('#validationCustom03').change(function(){ 
      $.ajax({
        url: 'components/query.php',
        type: 'POST',
        data:{
          'find_account':1,
          'account_no': $(this).val() 
        },
        async: true,
        dataType: 'JSON',
        success: function(response,data){ 
          $('#name').val(response.First_name + " " + response.Middle_name + " " + response.Last_name);
          $('.name').show();
          $('#reading').val(response.initial);
          $('.reading').show();
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