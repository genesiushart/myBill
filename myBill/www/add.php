<?php

$name = $_POST["name"];
$taxcode = $_POST["taxcode"];
$price = $_POST["price"];

// Create connection
$conn = mysqli_connect('db', 'user', 'test', "myDb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO myBill (name, taxcode, price)
VALUES ('$name', $taxcode, $price)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<a href="index.php">
    <button>Return to Home</button>
</a> 