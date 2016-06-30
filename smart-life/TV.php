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
<?php include('../menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home.php">home</a></li>
        <li>Smart Life</li>
        <li><a href="/smart-life/TV_Entertainment.php">TV & Entertainment</a></li>
        <li class="active">TV</li>
    </ol>
    <div class="row">

        <div>
            <section class="grid-tv">
                <div class="cont">
                    <img src="/images/timvision.png">
                    <h1>TIMvision</h1>
                    <p>Cartoons, movies, TV series, documentaries and concerts always on demand to create your own
                        schedule without advertising. More than 8,000 titles on a subscription, with no time
                        constraints, even in HD on TV with dedicated decoder, Smart TV, PC, Smartphone and Tablet</p>

                </div>
            </section>
        </div>
        <div width="100%" text-align="center">
            <h2> products</h2>
            <section class="grid-tv">
                <div>
                    <ul class="grid-two">
                        <li>
                            <div class="cont">
                                <img src="/images/tv.jpg">
                                <h3>Samsung Smart TV</h3>
                                <p>Select SMART TV best suited to your lifestyle. Enjoy the best entertainment with a
                                    next-generation TV.</p>
                                <a href="/products/product.php?pid=21" class="pill">See Detailes</a>
                            </div>
                        </li>
                        <li>
                            <div class="cont">
                                <img src="/images/decoder.jpg">
                                <h3>Decoder TIMvision</h3>
                                <p> Choose from movies, series, cartoons and documentaries, always on demand, to create
                                    your TV programming without commercial breaks. </p>
                                <a href="/products/product.php?pid=23" class="pill">See Details</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>


    </div>
</div>
<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
