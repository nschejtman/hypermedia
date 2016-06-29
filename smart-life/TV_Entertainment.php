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
        <li class="active">TV & Entertainment</li>
    </ol>
    <h1>TV & Entertainment</h1>
    <div class="row">
        <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" id="TV-pill"><a
                        href="#TV-tab">TV</a></li>
                <li role="presentation" id="music-pill"><a href="#music-tab">Music</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active grid-tv" id="TV-tab">
                    <h2>TV</h2>
                    <h3>Unlimited fun</h3>
                    <hr>
                    <h4 class="gray">Discover the great cinema, the most exciting series, the most loved cartoon
                        characters, sports
                        and much more on TV, PC, tablet and smartphone</h4>
                    <a href="/smart-life/TV.php" class="pill">DISCOVER</a>
                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="music-tab">
                    <h2>Music</h2>
                    <h3>The soundtrack to your life</h3>
                    <hr>
                    <h4 class="gray">Listen to millions of songs streaming, all new releases,
                        exclusive previews and many playlist of all kinds. On smartphones
                        without consuming GB, PC and tablet. When you want and how much you want.</h4>
                    <a href="/smart-life/music.php" class="pill">DISCOVER</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#TV-pill a').click(function (e) {
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
