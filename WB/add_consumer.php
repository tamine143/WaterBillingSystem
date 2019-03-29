<?php

  require 'dbconfig/config.php';
  if(isset($_POST['save'])){
    $Account_no =$_POST['Account_no'];
    $First_name = $_POST['First_name'];
    $Middle_name = $_POST['Middle_name'];
    $Last_name = $_POST['Last_name'];
    $Purok = $_POST['Purok'];
    $Barangay = $_POST['Barangay'];
    $City = $_POST['City'];
    $Birthdate = $_POST['Birthdate'];
    $Birth_place = $_POST['Birth_place'];
    $Contact_no = $_POST['Contact_no'];
    $Civil_status = $_POST['Civil_status'];
    $Occupation = $_POST['Occupation'];
    $Spouse_name = $_POST['Spouse_name'];
    $Mother_name = $_POST['Mother_name'];
    $Father_name = $_POST['Father_name'];
    $Type_of_residence = $_POST['Type_of_residence'];
    $Public_or_Private = $_POST['Public_or_Private'];
    $Senior_or_Pwd = $_POST['Senior_or_Pwd'];
    $Monthly_income = $_POST['Monthly_income'];
    $Meter_brand = $_POST['Meter_brand'];
    $Date_installed = $_POST['Date_installed'];
    $Initial_reading = $_POST['Initial_reading'];
    
    $insert_consumer = "INSERT INTO `consumer` (`Account_no`, `First_name`, `Middle_name`, `Last_name`, `Purok`, `Barangay`, `City`, `Birthdate`, `Birth_place`, `Contact_no`, `Civil_status`, `Occupation`, `Spouse_name`, `Mother_name`, `Father_name`, `Type_of_residence`, `Public_or_Private`, `Senior_or_Pwd`, `Monthly_income`, `Meter_brand`, `Date_installed`, `Initial_reading`) VALUES ('$Account_no', '$First_name', '$Middle_name', '$Last_name', '$Purok', '$Barangay', '$City', '$Birthdate', '$Birth_place', '$Contact_no', '$Civil_status', '$Occupation', '$Spouse_name', '$Mother_name', '$Father_name', '$Type_of_residence', '$Public_or_Private', '$Senior_or_Pwd', '$Monthly_income', '$Meter_brand', '$Date_installed', '$Initial_reading')";
    
    if (mysqli_query($con, $insert_consumer)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){
            location.href='';
          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_consumer . "<br>" . mysqli_error($con);
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
                <h1>Add Consumer</h1>
      </center>
       <form class="needs-validation" action="add_consumer.php" method='post'>
  <div class="form-row">
      <div class="form-group col-md-3">
        <label for="validationCustom01">Account no</label>
        <input type="number" class="form-control" name="Account_no" id="validationCustom01" placeholder="Account no" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom02">First Name</label>
        <input type="text" class="form-control" name="First_name" id="validationCustom0" placeholder="First Name" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Middle Name</label>
        <input type="text" class="form-control" name="Middle_name" id="validationCustom03" placeholder="Middle Name" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Last Name</label>
        <input type="text" class="form-control" name="Last_name" id="validationCustom04" placeholder="Last Name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="validationCustom05">Purok</label>
        <input type="text" class="form-control" name="Purok" id="validationCustom05" placeholder="Purok" required>
      </div>
      <div class="form-group col-md-4">
        <label for="validationCustom06">Barangay</label>
        <input type="text" class="form-control" name="Barangay" id="validationCustom06" placeholder="Barangay" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom07">City</label>
        <input type="text" class="form-control" name="City" id="validationCustom07" placeholder="City" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom08">Birth Date</label>
        <input type="Date" class="form-control" name="Birthdate" id="validationCustom08" placeholder="mm/dd/yy" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom09">Birth Place</label>
        <input type="text" class="form-control" name="Birth_place" id="validationCustom09" placeholder="Birth Place" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom10">Contact No</label>
        <input type="number" class="form-control" name="Contact_no" id="validationCustom10" placeholder="09999999999" required>
      </div>
          <div class="form-row">
            <div class="col-md-2">
              <label>Civil Status  </label>
                <select name="Civil_status" class="form-control form-control-sm">
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="widow">Widow</option>
                </select> 
            </div>
      <div class="form-group col-md-3">
        <label for="validationCustom11">Occupation</label>
        <input type="text" class="form-control" name="Occupation" id="validationCustom11" placeholder="Occupation" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom12">Spouse Name</label>
        <input type="text" class="form-control" name="Spouse_name" id="validationCustom12" placeholder="Spouse">
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom13">Mother Name</label>
        <input type="text" class="form-control" name="Mother_name" id="validationCustom13" placeholder="Mother" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom14">Father Name</label>
        <input type="text" class="form-control" name="Father_name" id="validationCustom14" placeholder="Father" required>
      </div>
          <div class="form-row">
            <div class="col-md-4">
              <label>Type of Residence  </label>
                <select class="form-control form-control-sm" name="Type_of_residence">
                  <option value="residential">Residential</option>
                  <option value="commercial">Commercial</option>
                </select> </br>
            </div>
            <div class="col-md-4">
              <label>Public or Private  </label>
                <select class="form-control form-control-sm" name="Public_or_Private">
                  <option value="public">Public</option>
                  <option value="private">Private</option>
                </select> </br>           
            </div>
          </div>

        <label>Senior or Pwd
          <select name="Senior_or_Pwd">
              <option value="Senior">Senior</option>
              <option value="Pwd">Pwd</option>
          </select>
         </label>
        <div class="form-group col-md-2">
        <label for="validationCustom15">Monthly Income</label>
        <input type="number" class="form-control" name="Monthly_income" id="validationCustom15" placeholder="Monthly Income" required>
      </div>
      <div class="form-group col-md-2">
        <label for="validationCustom16">Meter Brand and No</label>
        <input type="text" class="form-control" name="Meter_brand" id="validationCustom16" placeholder="Meter brand" required>
      </div>
      <div class="form-group col-md-2">
        <label for="validationCustom17">Date Installed</label>
        <input type="Date" class="form-control" name="Date_installed" id="validationCustom17" placeholder="Date Installed" required>
      </div>
      <div class="form-group col-md-2">
        <label for="validationCustom18">Initial Reading</label>
        <input type="text" class="form-control" name="Initial_reading" id="validationCustom18" placeholder="Initial Reading" required>
      </div>
  </div>
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