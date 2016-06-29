
<?php

require_once 'Data.php';
$d = new Data();

$category = $_POST['category']; //intval($_GET['pid'])
$root_Category = $_POST['root_Category'];
$brands = $_POST['brands'];
$price = $_POST['price'];

$products = $d->getProduct($category, $root_Category, $brands, $price);

while ($row = $products->fetch_assoc()) {
    echo '<div class="cell">';
    echo '<div class="product">';
    echo '<div class="product-image">';
    echo '<img src="/images/products/'.$row["id"].'.jpg"> ';
    echo '</div>';
    echo '<span class="name">'. $row["name"].'</span>';
    echo '<span class="price">'. $row["price"].' €</span>';
    echo '<a class="btn btn-white" href="/products/product.php?pid='.$row["id"].'">Details</a>';
    echo '</div>';
    echo '</div>';
}

?>

