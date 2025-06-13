<?php
include "../server/dbconfigs.php";

if (!isset($_SESSION['login']) && $_SESSION['login']) {
  header("Location: ../signin.php");
}

// get all houses
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $houses = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $houses = [];
}
$sql = "SELECT * FROM agents";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $agents = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $agents = [];
}
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $clients = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $clients = [];
}
$sql = "SELECT * FROM house_allocation";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $allocation = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $allocation = [];
}

// add new house
function addHouse($name, $description, $price, $bedroom, $bathroom, $image) {
    global $conn;
    $query = "INSERT INTO houses (name, description, price, bedroom, bathroom, image) VALUES ('$name', '$description', '$price', '$bedroom', '$bathroom', '$image')";
    if ($conn->query($query) === TRUE) {
        return true;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
        return false;
    }
}
function getHouse($houseid) {
    global $conn;
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM houses WHERE house_id = ?");
    $stmt->bind_param("i", $houseid); // assuming $houseid is an integer

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Fetch the row and return house_id
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false; // No such house found
        }
    } else {
        return false; // Query execution failed
    }
}

function updateHouse($id, $name, $description, $price, $bedroom, $bathroom, $image = null) {
    global $conn;

    if (isset($image) && !empty($image)) {
        // Update including image
        $sql = "UPDATE houses SET name = ?, description = ?, price = ?, bedroom = ?, bathroom = ?, image = ? WHERE house_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssiisi", $name, $description, $price, $bedroom, $bathroom, $image, $id);
    } else {
        // Update without image
        $sql = "UPDATE houses SET name = ?, description = ?, price = ?, bedroom = ?, bathroom = ? WHERE house_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssiii", $name, $description, $price, $bedroom, $bathroom, $id);
    }

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
function assignHouses($clientid, $houseid, $agentid) {
    global $conn;


    $assign = "INSERT into house_allocation (client_id, house_id, agent_id) values ('$clientid', '$houseid', '$agentid')";
    if ($conn->query($assign) === TRUE) {
        return true;
    } else {
        echo "Error: " . $assign . "<br>" . $conn->error;
        return false;
    }

}


?>