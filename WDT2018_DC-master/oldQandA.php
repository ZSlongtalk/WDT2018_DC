<!DOCTYPE html>
<html>
<head>
  <title>Washington DC Nationals Guide: Transportation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Informatation Page</h1>
    <div class="w3-bar w3-indigo">
      <a href="home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <?php echo "php works";?>

      </div>
      <div id="main" class="gridStyle">
        <?php
        include '../php/Maintable.php';
        ?>
      </div>
      <div id="base" class="gridStyle">

      </div>
    </div>
</div>
</body>
</html>
