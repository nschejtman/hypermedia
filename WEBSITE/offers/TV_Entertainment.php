<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>TV & Entertainment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/tim_smart_fiber.css">
    <link rel="stylesheet" href="../stylesheets/TV_Entertainment.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
</head>
<body>
<?php include('../menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home.php">Home</a></li>
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
                                        <a class="pill" href="/offers/TIMvision.php">Read more</a>

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
