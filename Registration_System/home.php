<!DOCTYPE html>
<?php include("server.php")?>
<html lang="en">
<head>
  <title>Smart Soccer Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center><h2>Welcome to Smart Soccer Quiz</h2></center>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Instructions</a></li>
    <li><a data-toggle="tab" href="#menu1">Quiz</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li style="float:right";><a data-toggle="tab" href="#menu3">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <center><h3>How to Play</h3></center>
      <center><ol>
          <li>
              Please make sure your internet connection is strong.
          </li>
      </ol></center><br>
        <center><button type="button" class="btn btn-primary">Make Payment</button></center>
    </div>
    <div id="menu1" class="tab-pane fade">
      <center><h3>Select a category to start Quiz</h3></center><br>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>
   
        
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><br>
    <div id="select" class="tab-pane fade">
      <select class="form-control" id="">
        <option>Select Category</option>
        <option>Africa Cup Of Nations</option>
        <option>English Premier League</option>
        <option>Fifa World Cup</option>
        <option>Spanish La Liga</option>
        <option>UEFA Campions League</option>
      </select>
    </div>
    </div>
    <div class="col-sm-4"></div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div style="float:right;" id="menu3" class="tab-pane fade">
      <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    </div>
  </div>
</div>

</body>
</html>