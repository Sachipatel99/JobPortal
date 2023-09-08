<?php
//SELECT * FROM add_job WHERE job_title  LIKE '%$type%' AND location = '$location';
    require('db.php');
    if(!empty($_POST['find_job_btn']))
    {
      echo "testing";
    echo $title      = $_POST["job_title"];
    echo $location   = $_POST["location"];

     $q = mysqli_query($connect, " SELECT * FROM add_job WHERE job_title  LIKE '%$title%' AND city = '$location'") or die(mysqli_error($connect));
     if(mysqli_num_rows($q) > 0){
        while($data = mysqli_fetch_assoc($q)){
          echo $data['job_title'];
        }

     }
    }
?> 