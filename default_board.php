<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location: index.php");
  session_destroy();    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/main.css">

    <title>Default Board - Task Tracker</title>
  </head>
  <body>

    <!-- Navigation Bar with Logout Button-->
    <nav class="navbar navbar-custom bg-light">
        <h2 class="h2-welcomuser">
          Welcome to Task Tracker <em><strong><?php echo $_SESSION['username']?></strong></em></h2>
        <ul class="nav navbar-nav navbar-right">
        <img src="avatar.png"
         alt="Avatar" class="md-avatar rounded-circle size-1">
         <p class="p-welcomuser"><em><strong><?php echo $_SESSION['username']?></strong></em></p>
        <a class="btn btn-light" href="index.php?logout=1">Logout</a>
        </ul>
    </nav>

    <!-- Board info -->
    <div class="board-info-container">
      <ul class="board-info">
        <li>Default Board</li>
        <li>People in this project
          <ul class="board-users">
            <li><img src="avatar.png"
         alt="Avatar" class="md-avatar rounded-circle size-1"></li>
            <li><img src="avatar.png"
         alt="Avatar" class="md-avatar rounded-circle size-1"></li>
          </ul>
        </li>
        <li><button id="addTask" type="button" class="btn btn-primary">New Task +</button></li>
      </ul>
    </div>
    

    <!-- Dynamic 3 Lists  -->
    <div class="grid-table">
    <!-- Alert message -->
    <div id='alert' class='alert alert-danger collapse'>
          <a href="" class='close' data-dismiss='alert'>
            &times;
          </a>
          <p id='alertContent'></p>
        </div>  
    <div class="table-head">
        <div class="table-head-item">TO DO</div>
        <div class="table-head-item">IN PROGRESS</div>
        <div class="table-head-item">DONE</div>
      </div>
      <div class="table-body">
          <!-- add task textarea -->
          <div id='textarea-container'>
            <textarea name="addtask-textarea" id="addtask-textarea" cols="80" rows="10">

            </textarea>
            <button id="save" type="button" class="btn btn-success btn-block">SAVE</button>
          </div>
        <div id="todoBody">
        <!-- to be added dynamically -->
        <!-- 
        <div class='list-group-item' id='$task_id'>
                    <div>
                        <p class='text'>$task</p>
                        <p class='item-date'>$time</p>
                    </div>
                    <p class='delete-task' >&times;</p>
                </div> -->
        <div id="inprogressBody">
        <!-- to be added dynamically -->

        </div>
        <div id="doneBody">
        <!-- to be added dynamically -->

        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Muhammad Reda Abdelaal Copyright &copy; 2017 -<?php $current_year = date("Y"); echo $current_year; ?> All Rights Reserved</p>
    </div>


   <!-- JavaScript files -->
   <script src="js/jquery-3.4.1.min.js"></script>
    <script scr="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tasks.js"></script>
  </body>
</html>