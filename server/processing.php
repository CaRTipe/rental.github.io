<?php
include "dbconfigs.php";
header("Content-Type: application/json");

if (isset($_POST['add_clients'])) {
    if (isset($_POST['name']) && $_POST['email'] && $_POST['phone'] && $_POST['password'] && $_POST['password2'] && $_POST['date']) {
        if ($_POST['password'] !== $_POST['password2']) {
            echo "Passwords do not match!";
            exit;
        }
        addClients($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['date']);
    }
} else if (isset($_POST['log_clients'])) {
    if (isset($_POST['mail']) && $_POST['code']) {
        $email = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['code']);
        logClient($email, $password);
        if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            header("Location: ../admin/index.php");
            exit();
        } else {
            header("Location: ../signin.php?error=Invalid email or password");
            exit();
            echo "Invalid email or password!";
        }
    } else {
        echo "Email and password are required!";
    }
} else if (isset($_POST['add_agents'])) {
    if (isset($_POST['name']) && $_POST['email'] && $_POST['password'] && $_POST['password2'] && $_POST['years']) {
        if ($_POST['password'] !== $_POST['password2']) {
            echo "Passwords do not match!";
            exit;
        }
        if ($_POST['years'] > 15) {
            echo "Years of experience cannot exceed 15!";
            exit;
        }
        addAgents($_POST['name'], $_POST['email'], $_POST['password'], $_POST['years']);
        if (isset($_SESSION['signup'])) {
            $response = [
                "success" => true,
                "message" => "sign up success"
            ];
        } else {
            $response = [
                "sucesss" => false,
                "message" => "sign up unsuccessful",
            ];
        }
        echo json_encode($response);
    }
} else if (isset($_POST['log_agents'])) {
    if (isset($_POST['mail']) && $_POST['code']) {
        $emailaddress = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['code']);
        logAgent($emailaddress, $password);
        if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            $response = [
                "success" => true,
                "message" => "login success",
                "data" => [
                    "email" => $emailaddress,
                    "password" => $password
                ]
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "login unsuccessful",
            ];
        }

        echo json_encode($response);
    }
} else if (isset($_POST['send_message'])) {
    if (isset($_POST['name']) && $_POST['email'] && $_POST['message']) {

        if (collectMessage($_POST['name'], $_POST['email'], $_POST['message'])) {
            $response = [
                "success" => true,
                "message" => "success",
                "data" => [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "message" => $_POST['message']
                ]
            ];
        } else {
            $response = [
                "success" => false,
                "message" => "unsuccessful",
            ];
        }
        echo json_encode($response);
    }
} else {
    echo "No action specified!";
}
