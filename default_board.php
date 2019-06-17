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
        <a class="navbar-brand mb-0 h1" href="index.php">
          <span class="back-btn">&larr;</span>
          Back to Homepage</a>
        <ul class="nav navbar-nav navbar-right">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
         alt="Avatar" class="md-avatar rounded-circle size-1">
        <a class="btn btn-light" href="#">Logout</a>
        </ul>
    </nav>

    <!-- Board info -->
    <div class="board-info-container">
      <ul class="board-info">
        <li>Default Board</li>
        <li>People in this project
          <ul class="board-users">
            <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
         alt="Avatar" class="md-avatar rounded-circle size-1"></li>
            <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
         alt="Avatar" class="md-avatar rounded-circle size-1"></li>
          </ul>
        </li>
        <li>New Task +</li>
      </ul>
    </div>
    
    <!-- Dynamic 3 Lists  -->
    <table class="lists-table">
    <thead>
      <th>TO DO</th>
      <th>IN PROGRESS</th>
      <th>DONE</th>
    </thead>  
    <tbody>
        <tr>
          <td>
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </td>
          <td>
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </td>
          <td>
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Footer -->
    <div class="footer">
        <p>Muhammad Reda Abdelaal Copyright &copy; 2017 -<?php $current_year = date("Y"); echo $current_year; ?> All Rights Reserved</p>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>