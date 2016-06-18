<?php
    require_once '../Data.php';
    $d = new Data();
    $id = intval($_GET['id']);
    $result = $d->getProduct_Detail($id);

    while($row = $result[0]->fetch_assoc())
    {
        $prod = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
    <link rel="stylesheet" href="/stylesheets/product_detail.css">

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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Mobile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Smartphone</a></li>
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Modem</a></li>
                        <li><a href="#">Smart Living</a></li>
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
        <li>Products</li>
        <?php
            //echo "<li><a href='../products.php>".$prod["category"]."</a></li>";
            echo "<li><a href=\"../products.php?category=".$prod["category"]."\">".$prod["category"]."</a></li>";
        ?>
        <li class="active">iPhone</li>
    </ol>
    <hr>
    <div width="100%" text-align="center">
        <div class="pic">

            <?php
                    echo "<img src=../images/".$prod["id"].".jpg width=400px;>";
            ?>
        </div>
        <div class="pic">
            <?php
            echo "<h3 style='color: darkblue'>".$prod["name"]."</h3><hr>";
            echo "<h3 style='color: red'>".$prod["price"]." €</h3><hr>"
            ."<a href='#' class='pill'>Price</a><hr>"
            ."<br><h4 style='color: darkblue'>Technical specifications</h4>";

            echo "<table class=\"table\">";
            while($row = $result[1]->fetch_assoc())
            {
                echo "<tr><td>".$row["property"]."</td><td>".$row["value"]."</td></tr>";

            }
            echo "</table >";
            ?>

        </div>
    </div>



</div>
<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
