<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hypermedia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** @noinspection SqlNoDataSourceInspection, SqlResolve */
$brands = $conn->query("SELECT DISTINCT brand FROM products ORDER BY brand;");

if (!$brands) throw new Exception("Database error");

/** @noinspection SqlNoDataSourceInspection, SqlResolve */
$categories = $conn->query("SELECT DISTINCT category FROM products ORDER BY category;");


$products = $conn->query("SELECT id,name,category,price  FROM products ORDER BY category;");

$conn->close();

require_once 'Data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
    <link rel="stylesheet" href="/stylesheets/products.min.css">
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
    <div class="row">
        <div class="col-md-4">
            <h3 class="blue">Filters</h3>
            <div class="side-bar">
                <h4>Brand</h4>
                <?php
                while ($row = $brands->fetch_assoc()) {
                    echo "<input type='checkbox' name='brand' value='". $row["brand"]."' '><label>" . $row["brand"] . "</label><br>";
                }
                ?>
                <hr>
                <h4>Category</h4>
                <?php
                while ($row = $categories->fetch_assoc()) {
                    echo "<input type='checkbox' name='category' value='". $row["category"]."' '><label>" . $row["category"] . "</label><br>";
                }
                ?>
                <hr>
                <h4>Price</h4>
                <input type="radio" name="price" value="over500"><label> > 500 € </label><br>
                <input type="radio" name="price" value="over500"><label> < 500 € </label><br>
                <input type="radio" name="price" value="over500"><label> < 300 € </label><br>
                <input type="radio" name="price" value="over500"><label> < 100 € </label><br>
                <input type="radio" name="price" value="over500"><label> < 50 € </label><br>
            </div>
        </div>
        <div class="col-md-8">
            <h3 class="blue">Results</h3>
            <div class="grid">
                <div class="cell">
                    <div class="product">
                        <img src="http://bit.ly/1sBBqrS">
                        <span class="name">-----test---</span>
                        <span class="price">---$</span>
                        <a class="btn btn-white" href="#">Details</a>
                    </div>
                </div>

                <?php
                while ($row = $products->fetch_assoc()) {
                    echo '<div class="cell">';
                    echo '<div class="product"> ';
                    echo '<img src="/images/products/'.$row["id"].'.jpg"> ';
                    echo '<span class="name">'. $row["name"].'</span>';
                    echo '<span class="price">'. $row["price"].'</span>';
                    echo '<a class="btn btn-white" href="/product.php?pid='.$row["id"].'">Details</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    function colorChecked(){

    }

</script>

</body>
</html>
