<?php
include "dbconfigs.php";


if(isset($_POST['add_clients'])) {
    if(isset($_POST['name']) && $_POST['email'] && $_POST['phone'] && $_POST['password'] && $_POST['password2'] && $_POST['date']) {
        if($_POST['password'] !== $_POST['password2']) {
            echo "Passwords do not match!";
            exit;
        }
        addClients($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['date']);
    }
} else if (isset($_POST['log_clients'])) {
    if(isset($_POST['mail']) && $_POST['code']) {
        $email = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['code']);
        logClient($email, $password);
        if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
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
} else if (isset($_POST['add_agents']))  {
    if(isset($_POST['name']) && $_POST['email'] && $_POST['password'] && $_POST['password2'] && $_POST['years']) {
        if($_POST['password'] !== $_POST['password2']) {
            echo "Passwords do not match!";
            exit;
        }
        addAgents($_POST['name'], $_POST['email'], $_POST['password'], $_POST['years']);
    }
} else if (isset($_POST['log_agents'])) {
    if (isset($_POST['mail']) && $_POST['code']) {
        $emailaddress = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['code']);
        logAgent($emailaddress, $password);
        if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
            header("Location: ../admin/index.php");
            exit();
        } else {
            header("Location: ../signin.php?error=Invalid email or password");
            exit();
            echo "Invalid email or password!";
        }

    }
}
else {
    echo "No action specified!";
}
?>