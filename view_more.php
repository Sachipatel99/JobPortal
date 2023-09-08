<?php
  require 'db.php';

  /* Delete Code */
  if(isset($_GET['xid']))
{
   $id = $_GET['xid']; 
   //echo($id);
    $result = mysqli_query($connect, "DELETE FROM add_job WHERE jid = '$id'");

 }
 $q = mysqli_query($connect, "SELECT * from add_job");
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
    
                                                <?php include("nav_bar.php");  ?>

 <center>
        <h1>JOBS</h1>
</center><br>
<div class="m-4" style="margin-bottom:5px;">
    <?php 
         require 'db.php';
         $q = mysqli_query($connect, "SELECT * FROM add_job ORDER BY jid DESC");
         while($data = mysqli_fetch_assoc($q)) {
        ?>
        <div class="card mx-auto " style="background-color:#F0F0F0 ; max-width: 1000px; margin-bottom:15px;">
            <div class="row g-0">
                <div class="col-sm-2">
                    <img style="padding:15px;" src="<?php echo 'admin/uploaded_images/'.$data['cmp_logo_name']?>"
                        style="height:100px !important; width:168px !important;" class="card-img-top" alt="...">
                </div>
                <div class="col-sm-10">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['job_title']?></h5>
                        <div class="row mt-5">
                            <div class="col-sm-4 py-2">
                            <?php echo $data['cmp_name']?>
                            </div>
                            <div class="col-sm-4 py-2">
                            <?php echo $data['city']?>
                            </div>
                            <div class="col-sm-4 py-2">
                                <a href="view_details.php?xid=<?php echo $data['jid'] ?>"
                                    class="btn btn-primary stretched-link">View Details</a>
                            </div>
                             
                        </div>          
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        

    </div>
   
    

                                                
     
                                                      <!-- footer -->
                                                      <?php include("footer.php");  ?>
    
    
   </body> 
</html>