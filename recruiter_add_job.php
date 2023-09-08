                                                
<?php
  
  include 'config.php';
  require 'db.php';

  session_start();
     //echo $_SESSION['snm'] ;
if(!empty($_SESSION["sid"]))
{
  $email = $_SESSION["sid"];
  $sid = $_SESSION['sid'];
  $username = $_SESSION["snm"];
  // $username = $_SESSION["admin_name"];
}
else{
  header("location:");
}
?>

<?php
//  $connect = mysqli_connect("localhost" , "root" , "" , "jobs");
 
 if(!empty($_POST['r_add_job_btn']))
 {
     
     $job_title =  $_POST['j_title'];
     $job_type =  $_POST['j_type'];
     $job_status =  $_POST['j_status'];
     $vacancy =  $_POST['j_vacancy'];
     $number_of_hours =  $_POST['j_hours'];
     $qualification =  $_POST['j_qualification'];
     $experience =  $_POST['j_experience'];
     $job_des =  $_POST['j_des'];
     $salary =  $_POST['j_salary'];
     $city =  $_POST['j_city'];
     $jcmpname =  $_POST['cmp_name'];
     $fname =  $_FILES['cmp_logo']['name'];
     $temp =  $_FILES['cmp_logo']['tmp_name'];
     move_uploaded_file($temp, 'admin/uploaded_images/'.$fname);
     $cmp_eid =  $_POST['cmp_eid'];
     $cmp_category =  $_POST['cmp_category'];
     $cmp_address =  $_POST['cmp_address'];

     $q2 = mysqli_query($connect, "INSERT INTO add_job
     (job_title, job_type, job_status, vacancy, number_of_hours, qualification, experience, job_description, salary, city,
      cmp_name, cmp_logo_name, cmp_eid, cmp_category, cmp_address,posted_by) 
     VALUE('$job_title', '$job_type', '$job_status', '$vacancy', '$number_of_hours', 
     '$qualification', '$experience', '$job_des', '$salary', '$city', '$jcmpname', '$fname',
     '$cmp_eid', '$cmp_category', '$cmp_address' ,'recruiter')");

if($q2 == 1)
{
    ?>
    <script>alert("Job Successfully Added!!");
     window.location= "index.php";
</script>

<?php
}
 }


?>








<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap 5 icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Add Form</title>

    <style>
        .edit_add_job{
            background-color:white;
        }
    </style>
</head>

<body style="background-color: #D4FAFC;">
    <?php include("nav_bar.php");  ?>
    <div class="container edit_add_job mb-5">
        <div class="row mt-5 mb-3 " style="padding:70px;">
            <div class="col-md-6">
            <form action="" method="post" enctype="multipart/form-data">

                <center><h4>JOB DETAILS</h4></center>

                <div class="mb-3 mt-5">
                    <label for="" class="form-label">Job Title <font color="red">*</font></label>
                    <input type="text" class="form-control" name="j_title" id="" required>
                </div>
                <!-- <div class="form-group">
          <label for="">Job Title <font color="red">*</font></label>
          <input type="text" name="j_title" class="form-control" required>
          </div> -->
                <div class="mb-3">
                    <label for="" class="form-label">Job Type<font color="red">*</font></label>
                    <select class="form-select" name="j_type" required>
          <option selected>Please Select</option>
          <option value="Full Time">Full Time</option>
          <option value="Part Time">Part Time</option>
        </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job Status<font color="red">*</font></label>
                    <select class="form-select" name="j_status" required>
          <option selected>Please Select</option>
          <option value="Available">Available</option>
          <option value="Unavailable">Unavailable</option>
        </select>
                </div>

                <div class="mb-3">
                    <label  class="form-label">Vacancy <font color="red">*</font></label>
                    <input type="number" name="j_vacancy" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label  class="form-label">Number Of Hours <font color="red">*</font></label>
                    <input type="number" name="j_hours" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label  class="form-label">Qualification  <font color="red">*</font></label>
                    <input type="text" name="j_qualification" class="form-control" required>
                </div>
               
                <div class="mb-3">
                    <label  class="form-label">Experience (in years) <font color="red">*</font></label>
                    <input type="number" name="j_experience" class="form-control" required>
                </div>

          <div class="mb-3">
                    <label  class="form-label">Job Description <font color="red">*</font></label>
                    <textarea  name="j_des" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label  class="form-label">Salary</label>
                    <input type="number" name="j_salary" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label  class="form-label">City</label>
                    <input type="text" name="j_city" class="form-control">
                </div>

            </div>
            <div class="col-md-6">


            <center><h4>COMPANY DETAILS</h4></center>
                <div class="mb-3 mt-5">
                    <label for="" class="form-label">Company Name<font color="red">*</font></label>
                    <input type="text" class="form-control" id="" name="cmp_name" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Upload Company Logo<font color="red">*</font></label>
                    <input type="file" class="form-control" id="" name="cmp_logo" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Company Email Id <font color="red">*</font></label>
                    <input type="email" class="form-control" id="" name="cmp_eid" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Company Category<font color="red">*</font></label>
                    <input type="text" class="form-control" id="" name="cmp_category" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Company Address</label>
                    <textarea  name="cmp_address" class="form-control"></textarea>
                </div>
                 
                <div class="form-group mb-3">
          <center><input type="submit" name="r_add_job_btn" class="btn btn-info" value="ADD JOB"></center>

          </form>
                
          </div>
         



            </div>


            </div>

        </div>
    </div>
    <?php include("footer.php");  ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->


</body>

</html>