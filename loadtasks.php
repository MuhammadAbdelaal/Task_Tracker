<?php
session_start();
include("connection.php");

// get the user_id
$user_id = $_SESSION['user_id'];

// run a query to delete all empty tasks that not completly created by user
$sql = "DELETE FROM tasks WHERE task = ''";
$result = mysqli_query($link, $sql);
if(!$result) {
    echo "<div class='alert alert-warning'>An error occured!</div>";
    exit;
};
// run a query to to look for all tasks corrosponding to that user_id
$sql = "SELECT * FROM tasks WHERE user_id = '$user_id' ORDER BY time DESC";

// show tasks or alert messages
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $task_id = $row['id'];
            $task = $row['task'];
            $time = $row['time'];
            
            //convert date and time
            $time = date("F, d, Y  h:i:s A", $time);

            echo "<div class='list-group-item' id='$task_id'>
                    <div>
                        <p class='text'>$task</p>
                        <p class='item-date'>$time</p>
                    </div>
                    <p class='delete-task' >&times;</p>
                </div>";
        }
    } else {
        echo "<div class='alert alert-warning'>You have not created any tasks yet!</div>";
    };
} else {
    echo "<div class='alert alert-warning'>An error occured!</div>";
    exit;
};


