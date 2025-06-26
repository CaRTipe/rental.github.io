<?php
include "server/dbconfigs.php";

$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $houses = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $houses = [];
}
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $messages = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $messages = [];
}




?>