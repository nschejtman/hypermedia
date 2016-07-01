<?php
    $category = $_GET['category'];

    require_once 'Data.php';
    $d = new Data();

    $result = $d->getFilters($category);

    $brands = $result["brands"];
    $categories = $result["categories"];
    $crc = $result["crc"];
    $products = $result["products"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>Tim</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
    <link rel="stylesheet" href="/stylesheets/products.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php include('menu.html'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="blue">Filters</h3>
            <div class="side-bar">

                <h4>Brand</h4>
                <?php
                    $cgr = $_GET["category"];
                while ($row = $brands->fetch_assoc()) {
                    echo "<input type='checkbox' name='brand' value='" . $row["brand"] . "'  onchange='showProduct(\"".$cgr."\") '><label>" . $row["brand"] . "</label><br>";
                }
                ?>
                <hr>
                <h4>Category</h4>
                <?php
                $disable = "";
                if ($crc == 1)
                    $disable = " disabled='disabled' ";
                $cgr = $_GET["category"];
                while ($row = $categories->fetch_assoc()) {
                    echo "<input type='checkbox' name='category' value='" . $row["category"] . "'  checked='checked'  onchange='showProduct(\"".$cgr."\")'  " . $disable . "><label>" . $row["category"] . "</label><br>";
                }
                ?>
                <hr>
                <h4>Price</h4>
                <?php
                $cgr = $_GET["category"];
                echo "<input type='radio' name='price' value='> 500' onchange='showProduct(\"".$cgr."\")'><label> > 500 € </label><br>".
                "<input type='radio' name='price' value='< 500' onchange='showProduct(\"".$cgr."\")'><label> < 500 € </label><br>".
                "<input type='radio' name='price' value='< 300' onchange='showProduct(\"".$cgr."\")'><label> < 300 € </label><br>".
                "<input type='radio' name='price' value='< 100' onchange='showProduct(\"".$cgr."\")'><label> < 100 € </label><br>".
                "<input type='radio' name='price' value='< 50' onchange='showProduct(\"".$cgr."\")'><label> < 50 € </label><br>";
                ?>
            </div>
        </div>
        <div class="col-md-8">
            <h3 class="blue">Results</h3>
            <div class="grid" id="display_info">
                <?php
                while ($row = $products->fetch_assoc()) {
                    echo '<div class="cell">';
                    echo '<div class="product">';
                    echo '<div class="product-image">';
                    echo '<img src="/images/products/' . $row["id"] . '.jpg"> ';
                    echo '</div>';
                    echo '<span class="name">' . $row["name"] . '</span>';
                    echo '<span class="price">' . $row["price"] . ' €</span>';
                    echo '<a class="btn btn-white" href="/products/product.php?pid=' . $row["id"] . '">Details</a>';
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
    function colorChecked() {

    }

</script>

</body>
</html>
