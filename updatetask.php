<?php
session_start();
include("connection.php");


// get the id of the task sent to Ajax
$id = $_POST['id'];

// get the content of the task
$task =  $_POST['task'];
$task = addslashes($task);

// get the time as well
$time = time();

// run a query to update the task
$sql = "UPDATE tasks SET task='$task', time='$time' WHERE id='$id'";
$result = mysqli_query($link, $sql);
if(!$result) {
    echo "error";
}

