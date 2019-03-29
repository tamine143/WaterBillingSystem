<?php
  session_start();
  require 'dbconfig/config.php';
  $consumer_account = $_GET['edit_account'];
  

 	if(isset($_GET['edit_account'])){

	$get_consumer = mysqli_query($con, "SELECT * from consumer WHERE Account_no = '$consumer_account'");

  $row = mysqli_fetch_array($get_consumer);
   }

	
   if(isset($_POST['update'])){
    $Account_no = $_POST['Account_no'];
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

    $update = " UPDATE `consumer` SET `Account_no`='$Account_no', `First_name`='$First_name', `Middle_name`='$Middle_name', `Last_name`='$Last_name', `Purok`='$Purok', `Barangay`='$Barangay', `City`='$City', `Birthdate`='$Birthdate', `Birth_place`='$Birth_place', `Contact_no`='$Contact_no', `Civil_status`='$Civil_status', `Occupation`='$Occupation', `Spouse_name`='$Spouse_name', `Mother_name`='$Mother_name', `Father_name`='$Father_name', `Type_of_residence`='$Type_of_residence', `Public_or_Private`='$Public_or_Private', `Senior_or_Pwd`='$Spouse_name', `Monthly_income`='$Monthly_income', `Meter_brand`='$Meter_brand', `Date_installed`='$Date_installed', `Initial_reading`='$Initial_reading' WHERE Account_no = '$consumer_account' ";
    if (mysqli_query($con, $update)) {

      header('location: list.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
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
      <form action="edit.php?edit_account=<?php echo $_GET['edit_account']; ?>" method='post'>
<div class="form-row">
      <div class="form-group col-md-3">
        <label for="validationCustom01">Account no</label>
        <input type="number" class="form-control" name="Account_no" value="<?php  echo $row['Account_no'];  ?>" id="validationCustom01" placeholder="Account no" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom02">First Name</label>
        <input type="text" class="form-control" name="First_name" value="<?php  echo $row['First_name'];  ?>" id="validationCustom0" placeholder="First Name" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom03">Middle Name</label>
        <input type="text" class="form-control" name="Middle_name" value="<?php  echo $row['Middle_name'];  ?>" id="validationCustom03" placeholder="Middle Name" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom04">Last Name</label>
        <input type="text" class="form-control" name="Last_name" value="<?php  echo $row['Last_name'];  ?>" id="validationCustom04" placeholder="Last Name" required>
      </div>
      <div class="form-group col-md-4">
        <label for="validationCustom05">Purok</label>
        <input type="text" class="form-control" name="Purok" value="<?php  echo $row['Purok'];  ?>" id="validationCustom05" placeholder="Purok" required>
      </div>
      <div class="form-group col-md-4">
        <label for="validationCustom06">Barangay</label>
        <input type="text" class="form-control" name="Barangay" value="<?php  echo $row['Barangay'];  ?>"  id="validationCustom06" placeholder="Barangay" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom07">City</label>
        <input type="text" class="form-control" name="City" value="<?php  echo $row['City'];  ?>"  id="validationCustom07" placeholder="City" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom08">Birth Date</label>
        <input type="Date" class="form-control" name="Birthdate" value="<?php  echo $row['Birthdate'];  ?>"  id="validationCustom08" placeholder="mm/dd/yy" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom09">Birth Place</label>
        <input type="text" class="form-control" name="Birth_place" value="<?php  echo $row['Birth_place'];  ?>"  id="validationCustom09" placeholder="Birth Place" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom10">Contact No</label>
        <input type="number" class="form-control" name="Contact_no" value="<?php  echo $row['Contact_no'];  ?>"  id="validationCustom10" placeholder="09999999999" required>
      </div>
                 <label>Civil Status
                    <select name="Civil_status">
                          <option value="<?php echo $row['$Civil_status']; ?>" selected><?php echo $row['Civil_status']; ?></option>
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                          <option value="widow">Widow</option>
                    </select>
                  </label>
      <div class="form-group col-md-3">
        <label for="validationCustom11">Occupation</label>
        <input type="text" class="form-control" name="Occupation" value="<?php  echo $row['Occupation'];  ?>"  id="validationCustom11" placeholder="Occupation" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom12">Spouse Name</label>
        <input type="text" class="form-control" name="Spouse_name" value="<?php  echo $row['Spouse_name'];  ?>"  id="validationCustom12" placeholder="Spouse">
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom13">Mother Name</label>
        <input type="text" class="form-control" name="Mother_name" value="<?php  echo $row['Mother_name'];  ?>"  id="validationCustom13" placeholder="Mother" required>
      </div>
      <div class="form-group col-md-3">
        <label for="validationCustom14">Father Name</label>
        <input type="text" class="form-control" name="Father_name" value="<?php  echo $row['Father_name'];  ?>"  id="validationCustom14" placeholder="Father" required>
      </div>
          <div class="form-row">
            <div class="col-md-4">
              <label>Type of Residence
                <select class="form-control form-control-sm" name="Type_of_residence">
                  <option value="<?php echo $row['Type_of_residence'];?>" selected><?php echo $row['Type_of_residence']; ?></option>
                </select> </br>
                </label>
            </div>
                  <label>Public or Private
                    <select name="Public_or_Private">
                        <option value="<?php echo $row['Public_or_Private'];?>" selected><?php echo $row['Public_or_Private']; ?></option>
                        <option value="private">Private</option>
                    </select>
                  </label>
                  <label>Senior or Pwd
                    <select name="Senior_or_Pwd">
                        <option value="<?php echo $row['Senior_or_Pwd'];?>" selected><?php echo $row['Senior_or_Pwd']; ?></option>
                        <option value="Senior">Senior</option>
                        <option value="Pwd">Pwd</option>
                    </select>
                  </label>
        <div class="form-group col-md-2">
        <label for="validationCustom15">Monthly Income</label>
        <input type="number" class="form-control" name="Monthly_income" value="<?php  echo $row['Monthly_income'];  ?>"  id="validationCustom15" placeholder="Monthly Income" required>
      </div>
      <div class="form-group col-md-2">
        <label for="validationCustom16">Meter Brand and No</label>
        <input type="text" class="form-control" name="Meter_brand" value="<?php  echo $row['Meter_brand'];  ?>"  id="validationCustom16" placeholder="Meter brand" required>
      </div>
      <div class="form-group col-md-2">
        <label for="validationCustom17">Date Installed</label>
        <input type="Date" class="form-control" name="Date_installed" value="<?php  echo $row['Date_installed'];  ?>"  id="validationCustom17" placeholder="Date Installed" required>
      </div>
      <div class="form-group col-md-2">
        <label>Initial Reading</label>
        <input type="text" class="form-control" name="Initial_reading" value="<?php echo $row['Initial_reading'];  ?>"required>
      </div>
  </div>
</div>
  					<form class="myform" action="home.php" method="post">
				            <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
			     </form>
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
