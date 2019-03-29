<?php

  require 'dbconfig/config.php';
  if(isset($_POST['Search']))
{
  $view = $_POST['Account_no'];
  $show = "SELECT First_name, Middle_name, Last_name, Purok, Barangay, City FROM consumer WHERE Account_no = $view LIMIT 1";
  $result = mysqli_query($con,$show);
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $First_name = $row['First_name'];
        $Middle_name = $row['Middle_name'];
        $Last_name = $row['Last_name'];
        $Purok = $row['Last_name'];
        $Barangay = $row['Barangay'];
        $City = $row['City'];
      }  
    }
  else {
        echo "Undifined Account";
            $First_name = "";
            $Middle_name = "";
            $Last_name = "";
            $Purok = "";
            $Barangay = "";
            $City = "";
    
    
    }
    mysqli_free_result($result);
    mysqli_close($con);
    
  }else{
            $First_name = "";
            $Middle_name = "";
            $Last_name = "";
            $Purok = "";
            $Barangay = "";
            $City = "";
    }
 ?>
      <center>
                <h1>Billing</h1>
      </center>
       <form class="needs-validation" action="" method='post'>
  <div class="form-col">
      <div class="form-group col-md-3">
        <label for="validationCustom02">Account NO</label>
        <input type="number" class="form-control" name="Account_no" id="validationCustom0" required>
      </div>
</form>
        <input class="btn" type="button" name="Search" value="Search"/><br></a>
</body>
</html>