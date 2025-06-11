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
}
?>