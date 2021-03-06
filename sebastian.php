<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Sebastian Realty</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
  <!-- Navbar  -->
<?
include "navbar.php"
?>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <br>
      <h1 class="header center orange-text">Sebastian Information</h1>
      <br>
    </div>
  </div>
  <div class="container">
  </div>
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="card-content">
          <div class="valign-wrapper">
            <iframe class="valign" width="850" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDcEQWezEq3lJwMn03OLBJOYT9_f6oq_6k
        &q=Sebastian, Fl" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <span class="card-title">Sebastian Inlet State Park</span>
        </div>
        <div class="card-content">
      <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=27.816617&lon=-80.469511&name=Sebastian, Fl"> </iframe>
        </div>
        <div class="card-action">
          <a href="http://www.weather.com/weather/today/l/USFL0450:1:US">Sebastian Weather</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img style="max-height: 345px;" src="images/SebastianInlet.jpg">
          <span class="card-title">Sebastian Inlet State Park</span>
        </div>
        <div class="card-content">
          <p>Sebastian Inlet State Park is a Florida State Park located 10 miles south of Melbourne Beach and 6 miles north of Vero Beach, Florida. The park lies on both sides of the Sebastian Inlet.</p>
        </div>
        <div class="card-action">
          <a href="https://www.floridastateparks.org/park/Sebastian-Inlet">Sebastian Inlet State Park Website</a>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="section">



  </div>
  <br>
  <br>
  <div class="section">
  </div>
  </div>

<!--  Footer-->
  <?
  include "footer.php"
  ?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
</body>

</html>
