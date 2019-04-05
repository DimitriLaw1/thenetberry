<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/register.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/stylee.css">
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">


  <title>TheNetBerry</title>
</head>
<body>

  <header class="navbar navbar-dark navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <a href="#">
        <span class="navbar-logo">TheNetBerry</span>
      </a>
      </div>

      <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">
        <ul class="nav navbar-nav navbar-right nav-main">
          <li class="hidden">
            <a href="#" id="nav-link-Explore">
            Explore
          </a>
          </li>
          <li>
            <a href="home.php" id="nav-link-premium">
            Home
          </a>
          </li>
       
          <li role="separator" class="divider"></li>
          <li class="alternate">
            <a href="register.php" id="header-login-link">
            Sign In
          </a>
          </li>

        </ul>
      </nav>
    </div>
  </header>

  

  <div class="jumbotron">
    <div class="container">
      <div id="carousel-tour" class="carousel slide" data-ride="carousel" data-interval="false">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-tour" data-slide-to="0" class="active js-button-hero-carousel-dots"></li>
          <li data-target="#carousel-tour" data-slide-to="1" class="js-button-hero-carousel-dots"></li>
          <li data-target="#carousel-tour" data-slide-to="2" class="js-button-hero-carousel-dots"></li>
          <li data-target="#carousel-tour" data-slide-to="3" class="js-button-hero-carousel-dots"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height: 307px;">
          <div class="item active">
            <h1>
              <span class="text-white">
                A Network For Creatives.
              </span>
              <p class="text-center text-white text-signup">
              Connect with and discover creatives near you. </p>
            </h1>
            <a href="#" class="btn btn-lg btn-solid js-button-hero-get-premium">
              Sign Up
            </a>
            <p class="text-center text-white text-signup">
              Sign up and be apart of our <a href="#" class="js-goto-signup">community</a>.
            </p>
          </div>

          <div class="item">
            <h1>
              <span class="text-white">
                Premium for your whole family.<br>Just $14.99.
              </span>
            </h1>
            <a href="#" class="btn btn-solid js-button-hero-family">
              LEARN MORE
            </a>
          </div>

          <div class="item">
            <h1>
              <span class="text-white">
                Students get 50% off Premium.
              </span>
            </h1>
            <a href="#" class="btn btn-solid js-button-hero-student">
              LEARN MORE
            </a>
          </div>

          <div class="item">
            <h1>
              <span class="text-white">
                Play Spotify on PlayStation®.
              </span>
            </h1>
            <a href="#" class="btn btn-solid js-button-hero-playstation">
              LEARN MORE
            </a>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control js-button-hero-carousel-left-arrow" href="#carousel-tour" data-slide="prev">
          <span class="icon-prev"></span>
          <span class="sr-only">
            Previous
          </span>
        </a>
        <a class="right carousel-control js-button-hero-carousel-right-arrow" href="#carousel-tour" data-slide="next">
          <span class="icon-next"></span>
          <span class="sr-only">
            Next
          </span>
        </a>
      </div>
    </div>
  </div>

  <footer role="contentinfo" class="footer footer-highlight-aquamarine">
    <div class="container">
      <nav class="row">

        <div class="col-xs-12 col-md-2">
          <div class="footer-logo">
            <a href="#">TheNetBerry</a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Company</h3>
          <ul class="nav">

            <li>
              <a href="#" id="nav-link-about">
                About
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-jobs">
                Jobs
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-press">
                Press
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-news">
                News
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Communities</h3>
          <ul class="nav">

            <li>
              <a href="#" id="nav-link-artists">
                For Artists
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-developers">
                Developers
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-brands">
                Brands
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Useful links</h3>
          <ul class="nav">
            <li>
              <a href="#" id="nav-link-help">
                Help
              </a>
            </li>

            <li>
              <a href="#" id="nav-link-gift">
                Gift
              </a>
            </li>

            <li class="hidden-xs ">
              <a href="#" id="nav-link-play">
                Web Player
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-12 col-md-4 col-social">
          <ul class="nav">
            <li>
              <a href="#">
                <img alt="instagram" src="img/Instagram.svg"/>
              </a>
            </li>
            <li>
              <a href="#">
                <img alt="twitter" src="img/Twitter.svg"/>
              </a>
            </li>
            <li>
              <a href="#">
                <img alt="facebook" src="img/Facebook.svg"/>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="row row-small">
        <div class="col-xs-8 col-md-6">

          <ul class="nav nav-small">
            <li>
              <a href="#">Legal</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li>
              <a href="#">Cookies</a>
            </li>
            <li>
              <a href="#">About Ads</a>
            </li>
          </ul>
        </div>

        <div class="col-xs-4 col-md-6 text-right">
          <a class="market" href="#" title="Click to change">
            <div class="media">
              <div class="media-body media-middle">
                USA
              </div>
              <div class="media-right media-middle">
                <span class="media-object flag-icon flag-icon-us"></span>
              </div>
            </div>
          </a>

          <small class="copyright">&copy; 2018 TheNetBerry</small>
        </div>
      </nav>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>