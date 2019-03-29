<?php
  session_start();
  require 'dbconfig/config.php';
  $edit_penalty = $_GET['edit_account'];
  

 	if(isset($_GET['edit_account'])){

	$get_penalty = mysqli_query($con, "SELECT * from penalty WHERE Account_no = '$edit_penalty'");

  $row = mysqli_fetch_array($get_penalty);
   }

	
   if(isset($_POST['edit'])){
    $penalty = $_POST['penalty'];
    
    $updated = " UPDATE `penalty` SET `penalty`='$penalty' WHERE Account_no = '$edit_penalty' ";
    if (mysqli_query($con, $updated)) {

      header('location: penalty.php');
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
      <h1>Edit Penalty</h1>
      <form action="penalty.php?edit_account=<?php echo $_GET['edit_account']; ?>" method='post'>
<div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom01">Penalty</label>
        <input type="number" class="form-control" name="billing_id" value="<?php  echo $row['penalty'];  ?>" id="validationCustom01" required>
		        <input class="btn" type="submit" name ="edit" id="edit_btn" value="Update"/>
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
