<?php
 require 'db.php';
 include 'config.php'; 

 session_start();

/* View Code */
if(isset($_GET['xid']))
{
 $id = $_GET['xid']; 
 //echo($id);
  $result = mysqli_query($connect, "SELECT * FROM add_job WHERE jid = '$id'");
  $data = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=$version">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
   <body>

                                             <!-- Background img + Nav -->
      
                                          
                                                <!-- Nav bar -->
    <div class="view-detail-img">
    <?php include("nav_bar.php");  ?>
</div>
                                                <!--view details  -->
                  
    <!-- job post company Start -->
    <div class="job_post_company">
            <section class="container single_job_details">
            <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
               
                        <div class="m-4" style="margin-bottom:5px;">
    <?php 
         require 'db.php';
         $q = mysqli_query($connect, "SELECT * FROM add_job ORDER BY jid DESC");
        ?>
        <div class="card mx-auto " style="background-color:#F0F0F0 ; max-width: 1000px; margin-bottom:15px;">
            <div class="row g-0">
                <div class="col-sm-2">
                    <img style="padding:15px;" src="<?php echo 'admin/uploaded_images/'.$data['cmp_logo_name']?>"
                    style="height:100px !important; width:160px !important;" class="card-img-top" alt="...">
                </div>
                <div class="col-sm-10">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['job_title']?></h5>
                        <div class="row mt-5">
                            <div class="col-md-6 py-2">
                            <?php echo $data['cmp_name']?>
                            </div>
                            <div class="col-md-6 py-2">
                            <?php echo $data['city']?>
                            </div>
                             
                        </div>          
                    </div>
                </div>
            </div>
        </div>

    </div>     
















                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4><b>Job Description</b></h4>
                                </div>
                                <p><?php echo $data['job_description'] ?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4><b>Qualification</b></h4>
                                </div>
                                <p><?php echo $data['qualification'] ?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4><b>Experience</b></h4>
                                </div>
                              <p><?php echo $data['experience'] ?></p>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?php echo $data['created_date'] ?></span></li>
                              <li>Location : <span><?php echo $data['city'] ?></span></li>
                              <li>Vacancy : <span><?php echo $data['vacancy'] ?></span></li>
                              <li>Job Status : <span><?php echo $data['job_status'] ?></span></li>
                              <li>Job nature : <span><?php echo $data['job_type'] ?></span></li>
                              <li>Salary :  <span><?php echo $data['salary'] ?></span></li>
                          </ul>
                         <div class="apply-btn2">
                            <a href="apply_now.php" class="btn btn-danger">Apply Now</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4><b>Company Information</b></h4>
                           </div>
                              <span><b><?php echo $data['cmp_name'] ?></b></span>
                             
                            <ul>
                                <li>Category: <span><?php echo $data['cmp_category'] ?> </span></li>
                                <li>Email: <span><?php echo $data['cmp_eid'] ?></span></li>
                                <li>Address : <span><?php echo $data['cmp_address'] ?></span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
            </section>
               
        </div>
        <!-- job post company End -->
    

                                                
     
                                                      <!-- footer -->
                                                      <?php include("footer.php");  ?>
    
    
   </body> 
</html>