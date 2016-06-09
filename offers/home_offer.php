<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Offers-home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/home_offer.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home.php"><img src="/images/tim-logo-1024x768.png" alt="TIM"
                                                          height="25px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Offers <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/offers/home_offer.php">Home</a></li>
                        <li><a href="#">Mobile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Smartphone</a></li>
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Modem</a></li>
                        <li><a href="#">Smart Living</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Smart Life <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">TV & Entretainment</a></li>
                        <li><a href="#">Health and Wellness</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Assitantce <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/general_assistance.php">General assistance</a></li>
                        <li><a href="/tech_support.php">Tech support</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <a href="../home.php">home | </a> Offers-home
    <hr>
    <h2>Mobile</h2>
    <div class="items"> <img src="../images/h1.jpg" class="image">
        <h4 align="center">Tim Smart Fiber</h4>
        <h5>Ultra fast internet and TIM vision included</h5>
        <h3 class="price">From 29 €/month</h3>
        <div align="center">
            <input type="button" value="Read more" onclick="location.href='../offers/tim_smart_fiber.php';" >
        </div>
    </div>
    <div class="items"> <img src="../images/h2.jpg" class="image">
        <h4 align="center">Tim Smart Home</h4>
        <h5>20MB internet and unlimited calls</h5>
        <h3 class="price">From 19 €/month</h3>
        <!--<input type="button" value="Read more" onclick="location.href='../offers/tim_smart_fiber.php';" class="button">
        -->
    </div>
    <div class="items"> <img src="../images/h3.jpg" class="image">
        <h4 align="center">Tim Smart Mobile</h4>
        <h5>Home, mobile, internet and TIM Vision</h5>
        <h3 class="price">From 29 €/month</h3>
    </div>
</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
