<?php
include "filemanager.php";
if (isset($_POST['add_house'])) {
    if (isset($_POST['name']) && $_POST['description'] && $_POST['price'] && $_POST['bedroom'] && $_POST['bathroom']) {
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $price = htmlspecialchars($_POST['price']);
        $bedroom = htmlspecialchars($_POST['bedroom']);
        $bathroom = htmlspecialchars($_POST['bathroom']);

        if (addHouse($name, $description, $price,$bedroom, $bathroom)) {
            header("Location: ../admin/index.php?success=House added successfully");
            exit();
        } else {
            echo "Error adding house.";
        }
    } else {
        echo "All fields are required.";
    }
} 
?>