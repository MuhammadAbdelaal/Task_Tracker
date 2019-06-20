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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="main.css">

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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- My Own JavaScript files -->
    <script src="jQuery/jQuery.js"></script>
    <script src="tasks.js"></script>
  </body>
</html>