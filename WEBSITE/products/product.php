<?php
require_once '../Data.php';
$d = new Data();
$id = intval($_GET['pid']);
$result = $d->getProduct_Detail($id);

while ($row = $result["tp"]->fetch_assoc()) {
    $prod = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
    <link rel="stylesheet" href="/stylesheets/product_detail.css">

</head>
<body>
<?php include('../menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="../home.php">Home</a></li>
        <li>Products</li>
        <?php
        //echo "<li><a href='../products.php>".$prod["category"]."</a></li>";
        echo "<li><a href=\"/products.php?category=" . $prod["root_Category"] . "\">" . $prod["root_Category"] . "</a></li>";
        echo "<li class=\"active\">" . $prod["name"] . "</li>"
        ?>

    </ol>
    <hr>
    <div width="100%" text-align="center">
        <div class="pic">

            <?php
            echo "<img src=/images/products/" . $prod["id"] . ".jpg width=400px;>";
            ?>
        </div>
        <div class="pic">
            <?php
            echo "<h3 style='color: darkblue'>" . $prod["name"] . "</h3><hr>";
            echo "<h3 style='color: red'>" . $prod["price"] . " €</h3><hr>"
                . "<a href='#' class='pill'>Price</a><hr>"
                . "<h5>" . $prod["description"] . "</h5><hr>"
                . "<br><h4 style='color: darkblue'>Technical specifications</h4>";

            echo "<table class=\"table\">";
            while ($row = $result["td"]->fetch_assoc()) {
                echo "<tr><td>" . $row["property"] . "</td><td>" . $row["value"] . "</td></tr>";

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
