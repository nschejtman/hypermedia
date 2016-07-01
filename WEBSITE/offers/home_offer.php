<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>Offers-home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/home_offer.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
</head>
<body>
<?php include('../menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home.php">Home</a></li>
        <li>Offers</li>
        <li class="active">Home + Mobile</li>
    </ol>
    <hr>
    <div>
        <h2> Mobile</h2>
        <section class="grid-tv" >
            <div style="left:15%;width: 70%;">
                <ul class="grid-three">
                    <li>
                        <div class="cont">
                            <img src="../images/h1.jpg">
                            <h3>Tim Smart Fiber</h3>
                            <p> Ultra fast internet and TIM vision included </p>
                            <h4 class="price">From 29 €/month</h4>
                            <a href="/offers/tim_smart_fiber.php" class="pill">See Detailes</a>
                        </div>
                    </li>
                    <li>
                        <div class="cont">
                            <img src="../images/h2.jpg">
                            <h3>Tim Smart Home</h3>
                            <p>20MB internet and unlimited calls</p>
                            <h4 class="price">From 19 €/month</h4>

                        </div>
                    </li>

                    <li>
                        <div class="cont">
                            <img src="../images/h3.jpg">
                            <h3>Tim Smart Mobile</h3>
                            <p> Home, mobile, internet and TIM Vision</p>
                            <h4 class="price">From 29 €/month</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
