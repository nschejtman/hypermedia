<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV & Entertainment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/tim_smart_fiber.css">
    <link rel="stylesheet" href="../stylesheets/TV_Entertainment.css">
    <link rel="stylesheet" href="../stylesheets/Tabs.css">
    <script type="text/javascript"></script>
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
    <a href="../home.php">home | </a> TV & Entertainment
    <hr>
    <div class="imageContainer">
        <b>sddsf</b><br>Cartoons , movies , TV series, documentaries and concerts always on demand
            <br>to create your own schedule without advertising . More than 8,000 titles on a subscription ,
            <br> with no time constraints , even in HD on TV with dedicated decoder ,<br>
            Smart TV , PC , Smartphone and Tablet.</p>
    </div>
    <div class="tabs">
        <ul>
            <li><a href="#item1">Movie</a></li>
            <li class="active"><a href="#item2">Music</a></li>
            <li><a href="#item3">Offer</a></li>
        </ul>
        <div class="tabInner">
            <div id="item1">
                <div class="imgMovie">
                    <h2>Watch movies at home</h2>
                    <p>A varied selection of films with the most anticipated premieres ,
                    <p>the great classics , unreleased , action films , thrillers , comedies and animation
                    <p> for the whole family . In addition to HD ,
                    <p>to make every spectacular image and not miss a single detail
                </div>
            </div>
            <div id="item2">
                <div class="imgMusic">
                    <h2>Concerts of best artists</h2>
                    <p>More than 50 concerts and live events of the best
                    <p>Italian and international artists
                    <p>to be accompanied by the best music , anywhere, anytime
                </div>
            </div>
            <div id="item3">
                <div class="imgTV">
                    <h2>Offers</h2>
                    <p>Learn the benefits of TIMvision and take advantage of
                    <p>promotions
                </div>
            </div>
        </div>
    </div>


</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>