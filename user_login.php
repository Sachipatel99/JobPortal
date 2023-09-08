<?php

include 'config.php';
  
  require 'db.php';

 session_start();
 

 if(!empty($_POST['user_login_btn']))
 {
    $email =  $_POST['l_email'];
    $password =  $_POST['l_pass'];

    $q = mysqli_query($connect, "SELECT * FROM user_signup WHERE email = '$email'  and  password ='$password'");
    
    $row = mysqli_num_rows($q);

    if($row > 0)
    {
        $data = mysqli_fetch_assoc($q);
        $_SESSION["sid"] = $data['uid'];
        header('location: index.php');
    }
    else{
        header('location: user_login.php');

    }

}


?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>

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



<div class="">
    <?php include("nav_bar.php");  ?>
</div>


<section class="vh-100 bg-image" style="background-image: url('img/i6.jpg');">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">EMPLOYEE LOGIN FORM</h3>

            <form class="" action="" method="post">

            <div class="form-outline mb-4">
              <input type="email" class="form-control form-control-lg" name="l_email" placeholder="Enter email"/>
              <label class="form-label" for="">EMAIL ID</label>
            </div>

            <!-- <div class="form-group">
                            <label class="control-label col-sm-12" for="">EMAIL ID</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="l_email" placeholder="Enter email">
                            </div>
                        </div> -->

            <div class="form-outline mb-4">
              <input type="password" class="form-control form-control-lg" name="l_pass" placeholder="Enter Password" />
              <label class="form-label" for="">PASSWORD</label>
            </div>

            <!-- <div class="form-group">
                            <label class="control-label col-sm-12" for="">PASSWORD</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="l_pass" placeholder="Enter Password">
                            </div>
                        </div> -->

           
            <!-- <button class="btn btn-primary btn-lg btn-block" type="submit" name="user_login_btn" value="LOGIN">Login</button> -->
            <input type="submit" class="btn btn-primary btn-lg btn-block"  name="user_login_btn" value="LOGIN">

            <hr class="my-4">


              <!--  <div class="col-sm-offset-2 col-sm-12">
                            <center><input type="submit" class="btn btn-info" name="user_login_btn" value="LOGIN">
                            </center>
                        </div> -->
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- footer -->
 <?php include("footer.php");  ?>

 </body>

</html>
    

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>