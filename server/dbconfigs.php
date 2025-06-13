<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "sustainablehouses";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database);
// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM clients";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['clients'][] = $row;
    }
}
$sql = "SELECT * FROM agents";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['agents'][] = $row;
    }
}
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        $_SESSION['houses'][] = $row;
    }
}


function addClients($name, $email, $phone, $password, $date_of_birth) {
    global $conn;
    $query = "INSERT INTO clients (name, email, phone, password, date_of_birth) VALUES ('$name', '$email', '$phone', '$password', '$date_of_birth')";
    if ($conn->query($query) == TRUE) {
        $_SESSION['signup'] = TRUE;
        header("Location: ../signin.php");
    } else {
        $_SESSION['signup'] = FALSE;
        echo "Error: " . $query . "<br>" . $conn->error;
        header("Location: ../signup.php");
    }
}
function logClient($email, $password) {
    global $conn;
    $logQuery = "SELECT * FROM clients WHERE email='$email' AND password='$password'";
    $result = $conn->query($logQuery);
    if ($result->num_rows > 0) {
        $_SESSION['login'] = TRUE;
    }
    else {
        $_SESSION['login'] = FALSE;
        echo "Invalid email or password!";
    }
}
function addAgents($agentname, $emailaddress, $password, $yearsofexp) {
    global $conn;
    $query = "INSERT INTO agents (agent_name, email_address, password, years_of_exp) VALUES ('$agentname', '$emailaddress', '$password', '$yearsofexp')";
    if ($conn->query($query) == TRUE) {
        $_SESSION['signup1'] = TRUE;
        header("Location: ../agentin.php");
    } else {
        $_SESSION['signup1'] = FALSE;
        echo "Error: " . $query . "<br>" . $conn->error;
        header("Location: ../agentup.php");
    }
}
function logAgent($emailaddress, $password) {
    global $conn;
    $logQuery = "SELECT * FROM agents where email_address = '$emailaddress' and password = '$password'";
    $result = $conn->query($logQuery);
    if ($result->num_rows > 0) {
        $_SESSION['login1'] = TRUE;
    } else {
        $_SESSION['login'] = FALSE;
        echo "Invalid email and password!";
    }
}


?>