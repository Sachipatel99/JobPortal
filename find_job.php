<?php require('db.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>find jobs</title>
  </head>
  <style>
    .navbar{
      position: absolute !important;
      width: 100%;
      top: 0;
    }
  </style>
  <body>
    
  <?php require("nav_bar.php"); ?>
  <center><h1 class="card-title" style="padding: 20px; margin-top: 50px;"><font color = red ><b>RESULTS</b></font></h1></center>
  <table class="table table-striped">
  <thead>
                        <tr>
                        <th scope="col">JOB TITLE</th>
                        <th scope="col">JOB TYPE</th>
                        <th scope="col">JOB STATUS</th>
                        <th scope="col">COMPANY NAME</th>
                        <th scope="col">CITY</th>
                        <th scope="col"><center>ACTION</center></th>
                        </tr>
                        </thead>
  <tbody>
  <?php 
                            if(!empty($_POST['find_job_btn']))
                            {
                                
                                $title      = $_POST["job_title"];
                                $location   = $_POST["location"];
     $q = mysqli_query($connect, " SELECT * FROM add_job WHERE job_title  LIKE '%$title%' AND city = '$location'")
                                 or die(mysqli_error($connect));

                                 if(mysqli_num_rows($q) > 0)
                                 {
                                    while($data = mysqli_fetch_assoc($q))
                                    {
                                    //   echo $data['job_title'];
                                      ?>
                                       <tr>
                                        <td><?php echo $data['job_title'] ?></td>
                                        <td><?php echo $data['job_type'] ?></td>
                                        <td><?php echo $data['job_status'] ?></td>
                                        <td><?php echo $data['cmp_name'] ?></td>
                                        <td><?php echo $data['city'] ?></td>
        <td><center><a href="view_details.php?xid=<?php echo $data['jid'] ?>" class='btn btn-info'>VIEW DETAILS</a>
                                    
                                      </tr>
                                      <?php
                                    }
                            
                                 }
                                 else
                                 {
                                    ?>
                                    <tr>
                                        <td colspan="6"><font color = red ><b>No record found</b></font></td>
                                    </tr>
                                    <?php
                                 }
                                }
                            ?>
                           
   
  </tbody>
</table>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php include("footer.php");  ?>
</body>
</html>

