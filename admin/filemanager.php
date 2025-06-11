<?php
include "../server/dbconfigs.php";

// get all houses
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $houses = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $houses = [];
}

// add new house
function addHouse($name, $description, $price, $bedroom, $bathroom) {
    global $conn;
    $query = "INSERT INTO houses (name, description, price) VALUES ('$name', '$description', '$bedroom', '$bathroom' '$price')";
    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
        return false;
    }
}
?>