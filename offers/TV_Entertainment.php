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
        <li><a href="../home.php">Home</a></li>
        <li>Offers</li>
        <li class="active">TV & Entertainment</li>
    </ol>

    <hr>

    <div class="row">
        <div class="col-md-4" style="width: 200px">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" id="film-pill"><a href="#film-tab">Film and TV</a></li>
                <li role="presentation" id="sport-pill"><a href="#sport-tab">Sport</a></li>
                <li role="presentation" id="music-pill"><a href="#music-tab">Music</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content" style="width: 120%">
                <div role="tabpanel" class="tab-pane active grid-tv" id="film-tab">
                    <h2>Film and TV</h2>

                    <section class="grid-tv">
                        <div style="left:5%;width: 90%;">
                            <ul class="grid-two">
                                <li>
                                    <div class="cont">
                                        <img src="../images/TIMVision_banner_1.jpg" class="image">
                                        <h3>TIMvision</h3>
                                        <p> Movies, series and cartoons on-demand</p>
                                        <a class="pill" href="TIMvision.php">Read more</a>

                                    </div>
                                </li>
                                <li>
                                    <div class="cont">
                                        <img src="../images/TIMSky_banner_2.jpg" class="image">
                                        <h3>TIM Sky</h3>
                                        <p>20MB internet and unlimited calls</p>
                                        <p align="center">Calls, Internet & SKY</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="sport-tab">
                    <h2>Sport</h2>

                    <section class="grid-tv">
                        <div style="left:5%;width: 90%;">
                            <ul class="grid-three">
                                <li>
                                    <div class="cont">
                                        <img src="../images/FantaSerieA_v1.jpg">
                                        <h4>FantaSerieA</h4>
                                        <p> It got the app for your fantasy football! Download it and try it now!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cont">
                                        <img src="../images/81632_serie_A_230x150_V2_0.jpg">
                                        <h4>Serie A</h4>
                                        <p>Live Serie A TIM with the best
                                            moments of the Championship 2015/2016!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cont">
                                        <img src="../images/81498_9399_SerieA_TV_v2.jpg">
                                        <h4>Serie A TV</h4>
                                        <p>TV of the Serie A TIM is not just commentary, but a real show</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="music-tab">
                    <h2>Music</h2>
                    <hr>
                    <div class="imgMusic" style="left:5%;width: 90%; height: 300px; background-size: cover">
                        <h3 style="padding-left: 20px; color: darkblue">TIMmusic</h3>
                        <h4 style="padding-left: 20px;">All the music you want <br>
                            without consuming Giga!</h4>
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
    $('#film-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#sport-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#music-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>

</body>
</html>
