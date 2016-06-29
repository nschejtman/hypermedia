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
<?php include('../menu.html'); ?>
<div class="container">

    <ol class="breadcrumb">
        <li><a href="/home.php">home</a></li>
        <li>Offers</li>
        <li><a href="/offers/TV_Entertainment.php">TV & Entertainment</a></li>
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
