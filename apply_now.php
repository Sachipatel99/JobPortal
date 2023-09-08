<?php
  
  include 'config.php';
  require 'db.php';

  session_start();
     //echo $_SESSION['snm'] ;
if(!empty($_SESSION["sid"]))
{
  $email = $_SESSION["sid"];
  $sid = $_SESSION['sid'];
//   $username = $_SESSION["snm"];
  //  $username = $_SESSION["admin_name"];
}
else{
    ?>
    <script>alert("Please Login to Access the Apply Now Page");
     window.location= "index.php";
    </script>
    <?php
}
?>

<?php
//  $connect = mysqli_connect("localhost" , "root" , "" , "jobs");
 
 if(!empty($_POST['apply_now1_btn']))
 {
     
     $first_name =  $_POST['fname'];
     $last_name =  $_POST['lname'];
     $dob =  $_POST['date'];
     $email =  $_POST['email'];
     $address =  $_POST['address'];
     $city =  $_POST['city'];
     $pincode =  $_POST['pincode'];
     $state_of_resident =  $_POST['r_state'];
     $phone_no =  $_POST['ph_no'];
     $alt_phone_no =  $_POST['alt_ph_no'];
     $pref_working_mode =  $_POST['pref_work_mode'];
     $worked_prev = $_POST['worked_prev'];
     $fname =  $_FILES['uploadcv']['name'];
     $temp =  $_FILES['uploadcv']['tmp_name'];
     move_uploaded_file($temp, 'img/'.$fname);
     
    

     $q2 = mysqli_query($connect, "INSERT INTO apply_form
     (first_name, last_name, date_of_birth, email, address, city, pincode,
      state_of_resident, phone_no, alt_phone_no,
     pref_working_mode, worked_prev, upload_cv, user_id) 
     VALUE('$first_name', '$last_name', '$dob', '$email', '$address', 
     '$city', '$pincode', '$state_of_resident', '$phone_no', '$alt_phone_no', '$pref_working_mode', 
     '$worked_prev', '$fname', '$sid')");

if($q2 == 1)
{
    ?>
    <script>alert("Your Application has been submitted.The HR of the company will directly contact you through mail.");
     window.location= "index.php";
</script>

<?php
}
 }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applyform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php include("nav_bar.php");  ?>
    <div class="container">
        <form action="" method="post" name="apply_form" class="form-group" enctype="multipart/form-data">
            <h1 style="font-weight:bold; text-align: center; padding:10px;">JOB APPLICATION FORM</h1>
            <div class="row jumbotron">
                <div class="col-md-6">
                    <label for="inputname">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Enter your first name" required>
                </div>
                <div class="col-md-6">
                    <label for="inputname">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter your last name" required>
                </div>
                <div class="col-md-12">
                    <label for="inputname">Date Of Birth</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter your date of birth" required>
                </div>
                <div class="col-md-12">
                    <label for="inputname">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="col-md-12">
                    <label for="inputname">Address</label>
                    <input type="text"  name="address" class="form-control" required>
</div>
                    <div class="col-md-4">
                    <label for="inputname">City</label>
                    <input type="text"  name="city" class="form-control" placeholder="Enter your city" required>
                </div>

                <div class="col-md-4">
                <label for="">State of Resident <font color="red">*</font></label>    
                <div class="form-control">
          <select class="form-select" name="r_state" style="border:none; outline:none;" required>
          <option selected>Open this select menu</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>          
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>          
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>          
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>          
          </select>
        </div>
        </div>
               
                <div class="col-md-4">
                    <label for="inputname">Pincode </label>
                    <input type="number"  class="form-control" name="pincode" placeholder="Enter your pincode" required>
                </div>

        <div class="col-md-6">
                    <label for="inputname">Phone Number </label>
                    <input type="integer"  class="form-control" name="ph_no" placeholder="Enter your phone number" required>
                </div>

                <div class="col-md-6">
                    <label for="inputname">Alternate Phone Number </label>
                    <input type="integer"  class="form-control" name="alt_ph_no" placeholder="Enter your phone number">
                </div>
                <div class="col-md-6">
                <label for="">Preferred working mode <font color="red">*</font></label>
                <div class="form-control">
          <select class="form-select" name="pref_work_mode" style="border:none; outline:none;" required>
          <option selected>Please Select</option>
          <option value="Full Time">Full Time</option>
          <option value="Part Time">Part Time</option>
        </select>
          </div>
         </div>

         <div class="col-md-6">
         <label for="">Have you previously worked with us? <font color="red">*</font></label>
                <div class="form-control">
          <select class="form-select" name="worked_prev" style="border:none; outline:none;" required>
          <option selected>Please Select</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
          </div>
         </div>

         <div class="col-md-12">
         <label for="">Upload Your CV<font color="red">*</font></label>
          <input type="file" name="uploadcv" class="form-control" required>
          </div>

          <div class="col-md-12" style="text-align:center; margin-top:20px;">
          <input type="submit" class="btn btn-danger" value="Apply Now" name="apply_now1_btn" >
          </div>      
            </div>
        </form>
    </div>
    <?php include("footer.php");  ?>



    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->
   
</body>

</html>