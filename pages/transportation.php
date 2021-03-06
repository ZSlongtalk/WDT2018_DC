<!DOCTYPE html>
<html>
<head>
  <title>Transportation: Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../images/togetherwecreatesm.png">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    .infoGrid {
      display: grid;
      grid-template-columns: 50% 50%;
      grid-template-rows: auto;
      grid-template-areas: "city info";
      grid-gap: .25em;
    }
    @media screen and (max-width: 40em) {
      .infoGrid {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto;
        grid-template-areas: "city" "info";
        grid-gap: .25em;
      }
    }
    @media screen and (max-width: 80em) {
      .infoGrid {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto;
        grid-template-areas: "city" "info";
        grid-gap: .25em;
      }
    }
    #city {
      grid-area: city;
    }
    #info {
      grid-area: info;
    }
    .information {
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .5em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
    p {
      font-size: 1.2em;
    }
    .pricing {
      float: left;
      margin: .5em;
    }
    th {
      padding: .5em;
    }
    .CancelFloat {
      clear: left;
    }
    .InfoHead:hover {
      color: #BBBBBB;
    }
    
    #metroImg {
      width: 50%;
      height: 50%;
    }
  </style>
  <script>
    $(document).ready(function() {
      $(".airportInfo").hide();
      $(".UberInfo").hide();
      $(".MetroInfo").hide();

      $("#airportHead").click(function(){
        $(".airportInfo").slideToggle();
      });
      $("#UberHead").click(function() {
        $(".UberInfo").slideToggle();
      });
      $("#MetroHead").click(function() {
        $(".MetroInfo").slideToggle();
      });

    });
  </script>
</head>
<body>
  <div class="w3-bar ribbonBack">
    <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
    <div class="w3-bar LinkColor">
      <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
      <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">Transportation</a>
      <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
      <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">User Login &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="../php/login.php" class="w3-bar-item w3-button UserLink">Log In</a>
          <a href="../php/createUser.php" class="w3-bar-item w3-button UserLink">Create User</a>
          <a href="../php/logout.php" class="w3-bar-item w3-button UserLink">Log Out</a>
        </div>
</div>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <h2 class="sidebarHead"><b>Relevent Sites</b></h2>
        <hr>
        <ul class="sidebarSite">
          <li class="link"><a href="http://www.bpa.org/" target="_blank">BPA.org</a></li>
          <li class="link"><a href="https://www.southwest.com/" target="_blank">Southwest</a></li>
          <li class="link"><a href="https://www.delta.com/" target="_blank">Delta</a></li>
          <li class="link"><a href="https://www.aa.com/homePage.do" target="_blank">American</a></li>
          <li class="link"><a href="https://www.united.com/en/us/" target="_blank">United</a></li>
          <li class="link"><a href="https://www.uber.com/airports/dca/" target="_blank">Uber</a></li>
          <li class="link"><a href="https://www.lyft.com/airports/dca" target="_blank">Lyft</a></li>
          <li class="link"><a href="http://www.flyreagan.com/dca/taxi-service" target="_blank">Taxi</a></li>
          <li class="link"><a href="https://www.supershuttle.com/locations/washington-dca-iad/" target="_blank">Super Shuttle</a></li>
          <li class="link"><a href="https://ride.guru/" target="_blank">RideGuru</a></li>
          <li class="link"><a href="https://www.wmata.com/schedules/trip-planner/" target="_blank">WMATA</a></li>
        </ul>

      </div>
      <div id="main" class="gridStyle">
        <div class="infoGrid">
        <div id="city">
          <iframe width="100%" height="100%" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Washington,DC" allowfullscreen>
          </iframe>
        </div>
        <div class="transportationimages" id="info">
          <img src="../images/Metro.jpg" alt="metro image" class="responsive">
        </div>
      </div>
        <div>
          <br>
          <div class="information">
          <h2 id="airportHead" class="InfoHead">Airport Services: &#9660;</h2>
          <h4 class="airportInfo">&#8226; The best airport to fly into is the Ronald Regan Washington National Airport (DCA)</h4>
          <h4 id="airlines" class="airportInfo">&#8227; Some posible airlines are:<br>
              &#8226; <a class="airlineLink infoLink" href="https://www.southwest.com/" target="_blank">Southwest</a><br>
              &#8226; <a class="airlineLink infoLink" href="https://www.delta.com/" target="_blank">Delta</a><br>
              &#8226; <a class="airlineLink infoLink" href="https://www.aa.com/homePage.do" target="_blank">American</a><br>
              &#8226; <a class="airlineLink infoLink" href="https://www.united.com/en/us/" target="_blank">United</a></h4>
          <h4 class="airportInfo">&#8226; Uber, Lyft, and taxi services are all provided at the Ronald Regan National Airport. See these websites for more information<br>
          &#8226; <a class="infoLink" href="https://www.uber.com/airports/dca/" target="_blank">Uber</a><br>
          &#8226; <a class="infoLink" href="https://www.lyft.com/airports/dca" target="_blank">Lyft</a><br>
          &#8226; <a class="infoLink" href="http://www.flyreagan.com/dca/taxi-service" target="_blank">Taxi</a></h4>
          <h4 class="airportInfo">&#8226; Super Shuttles are available for pick up at the Ronald Regan National Airport.
             See Super Shuttle's website for more information: <a class="infoLink" href="https://www.supershuttle.com/locations/washington-dca-iad/" target="_blank">Super Shuttle</a></h4>
          <hr class="airportInfo">
          <h2 id="UberHead" class="InfoHead">Uber, Lyft, and Taxi Services: &#9660;</h2>
          <h4 class="UberInfo">&#8226; Uber, Lyft, and Taxi Services are provided. See RideGuru for more information on approximate prices:
           <a class="infoLink" href="https://ride.guru/" target="_blank">RideGuru</a></h4>
          <h4 class="UberInfo">&#8226; Here are some example pricing for a ride from Washington D.C. to Fort Washington, Maryland (17.6 mi, 30 min) provided by RideGuru.</h4>
          <table class="pricing UberInfo">
            <tr><th>Uber Services</th><th>Pricing</th></tr>
            <tr><td>Uber Pool</td><td>$13-$20</td></tr>
            <tr><td>Uber X</td><td>$29</td></tr>
            <tr><td>Uber XL</td><td>$45</td></tr>
            <tr><td>Uber Taxi</td><td>$48</td></tr>
          </table>
          <table class="pricing UberInfo">
            <tr><th>Lyft Services</th><th>Pricing</th></tr>
            <tr><td>Lyft</td><td>$28</td></tr>
            <tr><td>Lyft Line</td><td>$28</td></tr>
            <tr><td>Lyft Plus</td><td>$48</td></tr>
          </table>
          <table class="pricing UberInfo">
            <tr><th>Taxi Services</th><th>Pricing</th></tr>
            <tr><td>MyTaxi</td><td>$50</td></tr>
            <tr><td>Taxi</td><td>$50</td></tr>
          </table>
          <br class="CancelFloat UberInfo">
          <hr class="UberInfo">
          <h2 id="MetroHead" class="InfoHead">Metro Services: &#9660;</h2>
          <h4 class="MetroInfo">&#8226; The metro services the area in and around Washington DC.</h4>
          <h4 class="MetroInfo">&#8226; The metro does require the use of SmarTrip card to pay for trips. These cards can be purchased or recharged at any metro station.</h4>
          <h4 class="MetroInfo">&#8226; Pricing depends on the length of the trip and the time of day, but it is typically no more than $6.
             For more information, please go to the Washington Metropolitan Area Transit Authority calulator site:
           <a class="infoLink" href="https://www.wmata.com/schedules/trip-planner/" target="_blank">WMATA</a></h4>
           <h4 class="MetroInfo">&#8226; The closest stop to the Gaylord National Resort & Convention Center is the Huntington stop (40 min. walk, 10 min drive).</h4>
           <h4 class="MetroInfo">&#8226; Click on the Metro Map to open it in a new tab.</h4>
           <a href="../images/metroMap.jpg" target="_blank"><img id="metroImg" src="../images/metroMap400.jpg" class="MetroInfo" class="responsive"></img></a>
        </div>
        <br><br><br>
        </div>
      </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:<br>
              <a class="socialLink" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank"><img src="../images/logos/flogo_RGB_HEX-144.png" alt="Facebook"></a>
              <a class="socialLink" href="https://www.instagram.com/bpanational/" target="_blank"><img src="../images/logos/glyph-logo_May2016.png" alt="Instagram"></a>
              <a class="socialLink" href="https://twitter.com/National_BPA" target="_blank"><img src="../images/logos/Twitter_Social_Icon_Rounded_Square_Color.png" alt="Twitter"></a>
            </p>
        </div>
      </div>
    </div>
    </div>
</div>
<footer id="footer" style="background-color: #9cc4e4; color: #FFFFFF">
        <div align="left">
        <br>
          <p>Copyright &copy; Business Professionals of America. All rights reserved.</p>
        </div>
	</footer>
</body>
</html>
