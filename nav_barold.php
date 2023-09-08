<!-- Nav bar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="background: #2B3A55 !important;">

    <div class="container menubar">
        <a href="index.php" class="navbar-brand text-warning font-weight-bold"><img src="img/niyuktilogo.png"
                alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse-navbar-collapse text-center " id="collapsenavbar">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="index.php" class="nav-link ">HOME</a>
                </li>
                <li class="nav-item">

                    <a href="view_more.php" class="nav-link">JOBS</a>
                </li>
                <li class="nav-item">
                    <a href="about_us.php" class="nav-link">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a href="contact_us.php" class="nav-link">CONTACT US</a>
                </li>

                <li class="nav-item dropdown">

                    <button type="button"
                        class="nav-link dropdown-toggle btn btn-outline-success text-white dropdown-toggle"
                        data-toggle="dropdown" id="navbardrop">
                        REGISTER
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="user_signup.php">As Employee</a>
                        <a class="dropdown-item" href="recruiter_signup.php">As Employer</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <?php 
               
                 if(!empty($_SESSION['srid'])){
                    ?>
                    <a href="recruiter_add_job.php" class="btn btn-outline-info text-white  ml-2">
                        +JOB
                    </a>
                    <?php
                  }
                    ?>

                    <?php ?>
                    <div class="dropdown">
                        <?php 
                     if(!empty($_SESSION["sid"]) || !empty($_SESSION['srid'])){
                        ?>
                        <a href="user_logout.php" class="btn btn-outline-info text-white  ml-2">
                            LOGOUT
                        </a>
                        <?php } else {
                        ?>
                        <button type="button" class="btn btn-outline-info text-white  ml-2 dropdown-toggle"
                            data-toggle="dropdown">
                            LOGIN
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="user_login.php">As Employee</a>
                            <a class="dropdown-item" href="recruiter_login.php">As Employer</a>
                        </div>
                        <?php } ?>
                    </div>

                </li>



            </ul>
        </div>

    </div>






    <!-- <button class="btn btn-outline-success text-white btn-lg "><a href="user_signup.php">REGISTER</a></button>
      <button class="btn btn-outline-info text-white btn-lg ml-2"><a href="user_login.php">LOGIN</a></button> -->

</nav>