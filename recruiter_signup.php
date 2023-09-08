
<?php

include 'config.php';
  require 'db.php';

//   session_start();
//      //echo $_SESSION['snm'] ;
// if(!empty($_SESSION["sid"]))
// {
//   $id = $_SESSION["sid"];
//   // $username = $_SESSION["admin_name"];
// }
// else{
//   header("location:index.php");
// }


?>

<?php

 
 if(!empty($_POST['recruiter_signup_btn']))
 {
     
   $first_name = $_POST['f_name'];
   $last_name = $_POST['l_name'];
   $cmp_name = $_POST['r_cmp_name'];
   $o_email = $_POST['o_eid'];
   $r_password = $_POST['r_pwd'];
   $r_contact = $_POST['r_num'];
   

     $q2 = mysqli_query($connect, "INSERT INTO recruiter_signup(first_name, last_name, company_name, official_email, password, contact_no, status ) 
     VALUE('$first_name', '$last_name', '$cmp_name', '$o_email', '$r_password', '$r_contact', 0)") or die(mysqli_error());

  if($q2 == 1)
  {
      ?>
      <script>alert("You are successfully registered!!");
       window.location= "recruiter_login.php";
      </script>

  <?php
  }
  else{
    echo"Invalid";
  }
 }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body>

<?php
 
 include("nav_bar.php");
 
 ?>

<section class="vh-100 bg-image"
  style="background-image: url('img/r4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">EMPLOYER REGISTRATION FORM</h2>

              <form method="post">

                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="f_name" placeholder="Enter First Name">
                  <label class="form-label" for="form3Example1cg">First Name</label>
                </div>

                <div class="form-outline mb-4">

                <input type="text" class="form-control form-control-lg" name="l_name" placeholder="Enter Last Name">
                  <label class="form-label" for="form3Example1cg">Last Name</label>
                </div>

                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="r_cmp_name" placeholder="Enter Company Name">
                  <label class="form-label" for="form3Example1cg">Company Name</label>
                </div>

                <div class="form-outline mb-4">
                <input type="email" class="form-control form-control-lg" name="o_eid" placeholder="Enter official email id">
                  <label class="form-label" for="form3Example3cg">Official Email Id</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" class="form-control form-control-lg" name="r_pwd" placeholder="Enter Password">
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                <input type="integer" class="form-control form-control-lg" name="r_num" placeholder="Enter Contact Number">
                  <label class="form-label" for="form3Example1cg">Contact Number</label>
                </div>

                

                 <div class="d-flex justify-content-center">
                   <div class="col-sm-offset-2 col-sm-10">
                     <center> <input type="submit" style="margin-top: 20px;"class="btn btn-info btn-success btn-block btn-lg gradient-custom-4 text-body" name="recruiter_signup_btn" value="Submit"></center>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
   
    <!-- JS -->
    <?php
 
 include("footer.php");
 
 ?>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>