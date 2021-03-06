<!DOCTYPE html>
<html>
<head>
  <title>NLC: Washington DC Nationals Guide</title>
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
  <script src="../js/pages.js" charset="utf-8"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    #locationText {
      text-align: center;
    }
    #conMap {
      float: left;
      margin: .5em;
      margin-bottom: .75em;
      width: 100%;
      height: auto;
    }
    #floatClear {
      clear: left;
    }
    .infoText {
      margin: .75em;
      /*border: .5em solid #9CC4E4;*/
      border: .5em solid #ff0000;
      border: collapse;
      padding: .5em;
      background-color: #1867A7;
      color: #DDDDDD;
    }
    h3 {
      font-weight: bold;
    }
    .information {
      border: .5em solid #9CC4E4;
      border: collapse;
      padding: .5em;
      background-color: #2978B8;
      color: #DDDDDD;
    }
    .NLCHead:hover {
      color: #BBBBBB;
    }
    #video {
      width: 600px;
      height: 400px;
      border: .3em solid #222;
    }
    @media screen and (max-width: 40em) {
      #video {
        width: 150px;
        height: 50px;
      }
    }
    @media screen and (max-width: 80em) {
      #video {
        width: 100%;
        height: 300px;
      }
    }
  </style>
</head>
<body>
  <div class="w3-bar ribbonBack">
    <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
    <div class="w3-bar LinkColor">
      <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="event.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">NLC</a>
      <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
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
            <li class="link"><a href="https://www.marriott.com/hotels/travel/wasgn-gaylord-national-resort-and-convention-center/" target="_blank">Gaylord National Resort</a></li>
            <li class="link"><a href="http://www.bpa.org/nlc/generalinfo" target="_blank">NLC General Info (bpa.org)</a></li>
          </ul>
      </div>

      <div id="main" class="gridStyle">
        <div id="location">
          <iframe id="conMap" width="100%" height="450" frameborder="1" style="border: .25em solid #000000"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBmYRVD-e2FKiTxX_zGuKwhLALhT4xfthU&q=Gaylord+National+Resort,Fort+Washington,MD+20745" allowfullscreen>
          </iframe>
          <br>
          <h2 id="locationText">The 2020 National Leadership Conference is held at the <b>Gaylord National Resort & Convention Center</b></h2>
          <br id="floatClear">
        </div>


        <div class="information">
        <h2 id="dressCodeHead" class="NLCHead">Dress code: &#9660;</h2>
        <div class="infoText" id="dressCode">
          <h3>Professional Dress Code:</h3>
          <p>Women Options:</p>
          <ul>
            <li>Pant or Suit Skirt</li>
            <li>Dress Skirt or Dress Slacks</li>
            <li>Dress</li>
            <li>BPA Blazer, dress skirt/slacks, blouse/sweater</li>
            <li>Required - Dress shoes with heel</li>
          </ul>
          <p>Men Options:</p>
          <ul>
            <li>Dress slacks, dress shirt, and tie</li>
            <li>Suit, dress shirt, and tie</li>
            <li>Sports coat, dress slacks, dress shirt, tie</li>
            <li>BPA Blazer, dress slacks, dress shirt, tie</li>
          </ul>
          <h3>Casual Dress Code:</h3>
          <p>Women and Men Options:</p>
          <ul>
            <li>Jeans, pants, shorts</li>
            <li>Shirt, t-shirt</li>
            <li>Footwear required</li>
          </ul>
          <h3>Unaccetable Clothing</h3>
          <ul>
            <li>Strapless, spaghetti straps, tube tops, halter tops, midriff tops</li>
            <li>Spandex, lycra, transparent clothing</li>
            <li>Cut-offs or ragged cltohing</li>
            <li>Innapropriate words and/or pictures</li>
            <li>During professional events, denim skirts</li>
          </ul><br>
          <a class="infoLink" href="http://www.bpa.org/nlc/dresscode" target="_blank">Official Dress Code (bpa.org)</a>
        </div>

        <h2 id="eventHead" class="NLCHead">NLC Schedule:&#9660;</h2>
        <div class="infoText" id="event">
          <p>The 2020 NLC schedule has not been released yet.</p>
          <p>Please reference the <a class="infoLink" href="https://bpa.org/nlc/guide/" target="_blank">2019 NLC Preview Guide</a> for an idea of the format.</p>
          </div>
        
        <h2 id="promotionalHead" class="NLCHead">NLC Promotional Video: &#9660;</h2>
        <div class="infoText" id="promotional">
          <p>This is the NLC promotional video.</p>
          <iframe id="video" src="https://www.youtube.com/embed/9UjpiR7Y6LQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

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
<br>
<footer id="footer" style="background-color: #9cc4e4; color: #FFFFFF">
        <div align="left">
        <br>
          <p>Copyright &copy; Business Professionals of America. All rights reserved.</p>
        </div>
	</footer>
</body>
</html>
