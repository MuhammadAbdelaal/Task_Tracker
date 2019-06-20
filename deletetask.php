<?php
session_start();
include("connection.php");


//get the id of the task through Ajax
$task_id = $_POST['id'];

// run a query to delete the note
$sql = "DELETE FROM `tasks` WHERE `id` = '$task_id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo 'error';   
}
