<?php
session_start();
include("connection.php");

// get the user_id
$user_id = $_SESSION['user_id'];

// get the current time: Using time function
$time = time();

// run a query to create new task
$sql = "INSERT INTO tasks (`user_id`, `task`, `time`) VALUES ($user_id, '', '$time')";
$result = mysqli_query($link, $sql);
if(!$result) {
    echo "error";
} else {
    // mysqli_insert_id() function returns the auto generated id used in the last query ("above")
    echo mysqli_insert_id($link);
}

