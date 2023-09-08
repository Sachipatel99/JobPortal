<?php include 'config.php';
require 'db.php';
session_start();
//echo $_SESSION[ 'snm' ];
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>website</title>
    <link rel='stylesheet' type='text/css' href="css/style.css?v=$version">
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<?php include( 'nav_bar.php' ); ?>
<section class="main">
<div class="container py-5">
<div class="row ">
<div class="col-lg-12">
<h1 class="py-5" style="text-align:center;">LOOKING FOR A JOB??</h1>
<h3 class="py-4" style="text-align:center;">THERE'S NO BETTER PLACE TO START</h3>
<form action="find_job.php" method="post" class="">
                        <div class="input-group mt-3 mb-3 py-4">
                            <input type="text" class="job_title" name="job_title"
                                placeholder="  Enter your Job Title" />
                            <div class="input-group-prepend" style="padding-left:10px; padding-right:10px;">

                                <div class="wrapper">
                                    <select id="" class="loc_sel" name="location">

                                        <option>Select Location</option>
                                        <option>Ahemdabad</option>
                                        <option>Bangalore</option>
                                        <option>Bhopal</option>
                                        <option>Chennai</option>
                                        <option>Delhi</option>
                                        <option>Gurgaon</option>
                                        <option>Hyderabad</option>
                                        <option value="indore">Indore</option>
                                        <option>Mumbai</option>
                                        <option>Noida</option>
                                        <option>Pune</option>

                                    </select>
                                </div>
                            </div>
                            <input type="submit" name="find_job_btn" value="Find Job" class="find_job">
                        </div>
                    </form>
</section>
    <!-- Featured Job Start -->
    <center>
        <h1>JOBS</h1>
    </center><br>
    <div class="m-4" style="margin-bottom:5px;">
    <?php 
         require 'db.php';
         $q = mysqli_query($connect, "SELECT * FROM add_job ORDER BY jid DESC LIMIT 5");
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
        <div class="py-5">
        <center><a href="view_more.php" class="btn btn-primary btn-lg btn3 ">View More</a></center>
        </div>

    </div>

    <!-- how it works -->
    <div class="sec1">
        <section class="container how_it_works text-center">
            <h1>HOW IT WORKS</h1>
            <div class="row rowsetting">
                <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
                    <div class="imgsetting d-block m-auto ">
                        <i class="fa fa-search-plus fa-5x text-white"></i>
                    </div>
                    <h2>1. Search a job</h2>
                    <p>You can search for job openings all over India using the portal's database.</p>
                </div>

                <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                    <div class='imgsetting d-block m-auto '>
                        <i class='fa fa-user-circle fa-5x text-white'></i>
                    </div>
                    <h2>2. Apply for job</h2>
                    <p> Search for jobs in your field. Research companies with openings. Prepare your resume. </p>
                </div>

                <div class='col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto'>
                    <div class='imgsetting d-block m-auto '>
                        <i class='fa fa-address-book-o fa-5x text-white'></i>
                    </div>
                    <h2>3. Get your job</h2>
                    <p>Get your Dream Job.</p>
                </div>
            </div>
        </section>
    </div>
     
    <?php include( 'testimonial.php' );
?>
    
    <!-- footer -->
    <?php include( 'footer.php' );
?>

</body>

</html>