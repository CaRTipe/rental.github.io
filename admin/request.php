<?php
include "../server/dbconfigs.php";
header("Content-Type: application/json");

$response = null;
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'get_house') {
        $houseid = $_POST['house_id'];
        $sql = "SELECT * from houses where house_id = $houseid";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $houses = $result->fetch_assoc();
            $response = [
                "success" => true,
                "message" => "Houses found",
                'data'=>$houses
            ];
        } else {
            $houses = [];
            $response = [
                "success" => false,
                "message" => "Houses not found"
            ];
        }
    }
} else {
    $response = [
        "success" => false,
        "message" => "Action Not Found"
    ];
}

echo json_encode($response);
