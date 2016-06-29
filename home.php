<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>Tim</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
</head>
<body>
<?php include('menu.html'); ?>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/fiber.png" alt="fiber">
            <div class="carousel-caption">
                <h1>TIM Smart Fiber</h1>
                <p>TIM Smart Fiber is the complete offer for unlimited, ultrafast browsing. Now with TIM vision
                    included,
                    allowing you to watch your favorite TV shows and movies on demand.</p>
                <a class="pill" href="/offers/tim_smart_fiber.php">Details</a>
                <br>
                <br>
            </div>
        </div>
        <div class="item">
            <img src="/images/samsung-tv-banner.jpg" alt="...">
            <div class="carousel-caption">
                <h1>Tim Vision</h1>
                <p>Cartoons , movies , TV series, documentaries and concerts always on demand
                    to create your own schedule without advertising . More than 8,000 titles on a subscription ,
                    with no time constraints , even in HD on TV with dedicated decoder ,
                    Smart TV , PC , Smartphone and Tablet.
                </p>
                <a class="pill" href="/offers/TIMvision.php">Details</a>
                <br>
                <br>
            </div>
        </div>
        <div class="item">
            <img src="/images/cellphone.jpg" alt="...">
            <div class="carousel-caption">
                <h1>Flexible plans</h1>
                <p>
                    TIM offers various plans to fit your needs. Prepaid, contract, home internet, mobile internet, on
                    demand
                    series, movies, music and games, smart life products and services, the combinations are endless!
                </p>
                <a class="pill" href="/offers/home_offer.php">Find a plan</a>
                <br>
                <br>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="help-banner">
    <div class="container">
        <h1 class="blue text-center">Need assitance?</h1>

        <div class="row">
            <div class="col-md-4">
                <h5>Call line 187</h5>
                <a href="tel:+39155"><img src="/images/call.png" width="70px" class="center-block"></a>
            </div>
            <div class="col-md-4">
                <h5>General assistance</h5>
                <a href="/general_assistance.php"><img src="/images/gral_assitance.png" width="70px"
                                                       class="center-block"></a>
            </div>
            <div class="col-md-4">
                <h5>Tech support</h5>
                <a href="/tech_support.php"><img src="/images/tech_support.png" width="70px" class="center-block"></a>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
<div id="products-banner">
    <div class="container">
        <h1 class="blue text-center">Introducing Samsung S7-S7 Edge</h1>
        <br>
        <img src="images/s7_home.png">
    </div>
</div>
<footer>
    <div class="container">
        <p>
            <a href="https://www.tim.it/assistenza/i-consumatori/info-consumatori-mobile/web-privacy-policy">Privacy</a> |
            <a href="https://www.tim.it/note-legali">Legal note</a>
            <span class="pull-right">Telecom Italia 2012 - P.IVA 00488410010</span>
        </p>
    </div>
</footer>
<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/scripts/modernizr-custom.js"></script>
<script>
    var $carousel = $('#carousel');
    $carousel.carousel();
</script>
</body>
</html>
