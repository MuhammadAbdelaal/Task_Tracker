<?php
$link = mysqli_connect("localhost", "muhammad", "123456", "task_tracker_approcks");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>