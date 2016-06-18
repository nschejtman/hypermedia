<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully".  "<br>".  "<br>";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SHOW DATABASES;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "database: " . $row["Database"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();




echo "<br><br>";
require_once 'Data.php';

$d = new Data();
$result = $d->getProduct_Detail(20);//$d->getProduct();

if ($result[0]->num_rows > 0) {
    // output data of each row
    while($row = $result[0]->fetch_assoc()) {
        echo $row["name"]. "     " . $row["category"]. "<br> <br>";
    }
} else {
    echo "0 results";
}


if ($result[1]->num_rows > 0) {
    // output data of each row
    while($row = $result[1]->fetch_assoc()) {
        echo $row["property"]. ": " . $row["value"]. "<br>";
    }
} else {
    echo "0 results";
}





?>
