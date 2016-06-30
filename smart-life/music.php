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
        <li><a href="/home.php">home</a></li>
        <li>Smart Life</li>
        <li><a href="/smart-life/TV_Entertainment.php">TV & Entertainment</a></li>
        <li class="active">Music</li>
    </ol>
    <div class="row">

        <div>
            <section class="grid-tv" style="background-image:url(/images/music.jpg); ">
                <div class="cont">
                    <h1>TIMmusic</h1>
                    <p>Step into a world of music with the app TIMmusic. Millions of songs streaming, all the latest
                        releases and many playlists to listen anywhere, anytime, without consuming GB!</p>

                </div>
            </section>
        </div>
        <div width="100%" text-align="center">
            <h2> products</h2>
            <section class="grid-tv">
                <div>
                    <ul class="grid-one">
                        <li>
                            <div class="cont">
                                <img src="/images/beats.jpg">
                                <h1>Beats headphones</h1>
                                <p>Audio enhanced with the new Beats sound quality, the sound of Solo2 headphones is
                                    sharper and cleaner and emits a broader range of emotions</p>
                                <a href="/products/product.php?pid=25" class="pill">See Detailes</a>
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
