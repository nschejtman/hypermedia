<?php
$servername = "localhost";
$username = "polimihyper";
$password = "";
$dbname = "my_polimihyper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
#$conn->close();


 $servername = "localhost";
 $username = "polimihyper";
 $password = "";
 $dbname = "my_polimihyper";
$conn = new mysqli($servername, $username, $password, $dbname);
$ct = "select * from products ";
$result = $conn->query($ct);
$conn->close();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "name: " . $row[1];
    }
}else {
echo "0 results";}





?>
