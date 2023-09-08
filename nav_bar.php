<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="background: #2B3A55 !important;">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><img src="img/niyuktilogo.png" alt="" style="width:158px; "></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mx-auto" style="font-size:17px;">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    REGISTER
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="user_signup.php">As Employee</a>
                    <a class="dropdown-item" href="recruiter_signup.php">As Employer</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <?php 
               
               if(!empty($_SESSION['srid'])){
                  ?>

                <li><a class="nav-link " href="recruiter_add_job.php" id="navbardrop" >
                    +JOB
                </a></li>
                <?php
                }
                  ?>

                <div class="dropdown">
                    <?php 
                     if(!empty($_SESSION["sid"]) || !empty($_SESSION['srid'])){
                        ?>
                    <a class="nav-link" href="user_logout.php" id="navbardrop" >
                        LOGOUT
                    </a>
                    <?php } else {
                        ?>

                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        LOGIN
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="user_login.php">As Employee</a>
                        <a class="dropdown-item" href="recruiter_login.php">As Employer</a>
                    </div>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </div>
</nav>
