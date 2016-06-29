<?php
/**
 * Created by PhpStorm.
 * User: aminfathi
 * Date: 6/12/16
 * Time: 5:41 PM
 */


class Data
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "hypermedia";
    // Create connection
    var $conn ;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function getProduct($categories, $root_category, $brands, $price){

        $ct = "select * from products where root_Category = '".$root_category."'";
        if (strlen($categories) > 1)
            $ct .=" and category in (".$categories.")";
        if (strlen($brands) > 1)
            $ct .=" and brand in (".$brands.")";
        if (strlen($price) > 1)
            $ct .=" and price ".$price;


        $result = $this->conn->query($ct);
        $this->conn->close();
        return $result;

    }

    function getProduct_Detail($id)
    {
        //$q = $this->conn->prepare("select * from product_feature where product_id = ?");

        $ctp = "select * from products where id = ".$id.";";
        $ctd = " select * from product_feature where product_id = ".$id;

        $res["tp"] = $this->conn->query($ctp);
        $res["td"] = $this->conn->query($ctd);

        $this->conn->close();
        return $res;
    }

    function getFilters($category)
    {
        $res["brands"] = $this->conn->query("SELECT DISTINCT brand FROM products WHERE root_Category='" . $category . "' ORDER BY brand;");

        if (!$res["brands"]) throw new Exception("Database error");

        /** @noinspection SqlNoDataSourceInspection, SqlResolve */
        $res["categories"] = $this->conn->query("SELECT DISTINCT category FROM products WHERE root_Category='" . $category . "' ORDER BY category;");
        $res["crc"] = mysqli_num_rows($res["categories"]);


        $res["products"] = $this->conn->query("SELECT id,name,category,price  FROM products WHERE root_Category='" . $category . "' ORDER BY category;");

        $this->conn->close();

        return $res;
    }
}

?>