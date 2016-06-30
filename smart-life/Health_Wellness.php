<!DOCTYPE html>
<html lang="en">
<head>
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
        <li><a href="/home.php">Home</a></li>
        <li>Smart Life</li>
        <li class="active">Health & Wellness</li>
    </ol>
    <div class="row">

        <div>
            <section class="grid-tv">
                <div class="cont">

                    <h1>Health and Wellness</h1>
                    <p>Try the latest wearables. Find out how health and wellness can positively change your life. Free
                        your desire to move. Share your results with friends. The future is smart.</p>

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
                                <img src="/images/gear.jpg">
                                <h3>Samsung Galaxy Gear S </h3>
                                <p>An elegant curved Super AMOLED display for optimal fit, customizable screens and
                                    interchangeable straps to better express their own style</p>
                                <a href="/products/product.php?pid=26" class="pill">See Detailes</a>
                            </div>
                        </li>
                        <li>
                            <div class="cont">
                                <img src="/images/hr.jpg">
                                <h3>Polar HR</h3>
                                <p> Used with a mobile application for sports or with a compatible Polar training
                                    computer, the sensor displays in an extremely precise real-time heart rate during
                                    training </p>
                                <a href="/products/product.php?pid=28" class="pill">See Details</a>
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
