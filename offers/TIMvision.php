<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV & Entertainment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/tim_smart_fiber.css">
    <link rel="stylesheet" href="../stylesheets/TV_Entertainment.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
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
                        <li><a href="/offers/TV_Entertainment.php">TV & Entertainment</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products.php?category=smartphone">Smartphone</a></li>
                        <li><a href="/products.php?category=tablet">Tablet</a></li>
                        <li><a href="/products.php?category=modem">Modem</a></li>
                        <li><a href="/products.php?category=smart-living">Smart Living</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Smart Life <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/smart-life/TV_Entertainment.php">TV & Entretainment</a></li>
                        <li><a href="/smart-life/Health_Wellness.php">Health and Wellness</a></li>
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

    <ol class="breadcrumb">
        <li><a href="../home.php">home</a></li>
        <li>Offers</li>
        <li><a href="TV_Entertainment.php">TV & Entertainment</a></li>
        <li class="active">TIMvision</li>
    </ol>
    <hr>

    <div class="imageContainer">
        <h2>TIMvision</h2>
        <br>Cartoons , movies , TV series, documentaries and concerts always on demand
        <br>to create your own schedule without advertising . More than 8,000 titles on a subscription ,
        <br> with no time constraints , even in HD on TV with dedicated decoder ,<br>
        Smart TV , PC , Smartphone and Tablet.</p>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-4" style="width: 200px">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" id="movie-pill"><a href="#movie-tab">Movie</a></li>
                <li role="presentation" id="music-pill"><a href="#music-tab">Music</a></li>
                <li role="presentation" id="offer-pill"><a href="#offer-tab">Offer</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content" style="width: 120%; ">
                <div role="tabpanel" class="tab-pane active grid-tv " id="movie-tab">
                    <h2>Movie</h2>
                    <hr>
                    <div class="imgMovie" style="left:5%;width: 90%;">
                        <h3>Watch movies at home</h3>
                        <h5>A varied selection of films with the most anticipated premieres ,
                            <br>the great classics , unreleased , action films , thrillers , comedies and animation
                            <br> for the whole family . In addition to HD ,
                            <br>to make every spectacular image and not miss a single detail
                        </h5>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane grid-tv " id="music-tab">
                    <h2>Music</h2>
                    <hr>
                    <div class="imgMusic" style="left:5%;width: 90%;">
                        <h3>Concerts of best artists</h3>
                        <h5>More than 50 concerts and live events of the best
                            <br>Italian and international artists
                            <br>to be accompanied by the best music , anywhere, anytime
                        </h5>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="offer-tab">
                    <h2>Offer</h2>
                    <hr>
                    <div class="imgTV" style="left:5%;width: 90%;">
                        <h3>Offers</h3>
                        <h5>Learn the benefits of TIMvision and take advantage of
                            <br>promotions
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#movie-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#music-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#offer-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>

</body>
</html>
