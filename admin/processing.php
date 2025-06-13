<?php
include "filemanager.php";
if (isset($_POST['add_house'])) {
    if (isset($_POST['name']) && $_POST['description'] && $_POST['price'] && $_POST['bedroom'] && $_POST['bathroom'] && $_FILES['image']) {
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $price = htmlspecialchars($_POST['price']);
        $bedroom = htmlspecialchars($_POST['bedroom']);
        $bathroom = htmlspecialchars($_POST['bathroom']);
        $image = $_FILES['image'];
        // try to upload file

        $target_dir = "../uploads/";

        // Get original file name and extension
        $originalName = basename($_FILES["image"]["name"]);
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);

        // Generate timestamp-prefixed name
        $timestamp = time(); // or use date("Ymd_His") for readable format
        $newFileName = $timestamp . "_" . $originalName;

        $target_file = $target_dir . $newFileName;

        $uploadOk = 1;
        $imageUploaded = false;

        if ($uploadOk == 0) {
            $imageUploaded = false;
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $imageUploaded = true;
            } else {
                $imageUploaded = false;
            }
        }

        if ($imageUploaded) {
            $image = htmlspecialchars($newFileName); // updated to reflect new name
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }

        if (addHouse($name, $description, $price, $bedroom, $bathroom, $image)) {
            header("Location: ../admin/index.php?success=House added successfully");
            exit();
        } else {
            echo "Error adding house.";
        }
    } else {
        echo "All fields are required.";
    }
}
if (isset($_POST['update'])) {
    if (isset($_POST['name']) && $_POST['description'] && $_POST['price'] && $_POST['bedroom'] && $_POST['bathroom'] && $_POST['house_id']) {
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $price = htmlspecialchars($_POST['price']);
        $bedroom = htmlspecialchars($_POST['bedroom']);
        $bathroom = htmlspecialchars($_POST['bathroom']);
        $id = $_POST['house_id'];
        $image = null;
        
        // try to upload file

        $target_dir = "../uploads/";

        // Get original file name and extension
        $originalName = basename($_FILES["image"]["name"]);
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);

        // Generate timestamp-prefixed name
        $timestamp = time(); // or use date("Ymd_His") for readable format
        $newFileName = $timestamp . "_" . $originalName;

        $target_file = $target_dir . $newFileName;

        $uploadOk = 1;
        $imageUploaded = false;

        if ($uploadOk == 0) {
            $imageUploaded = false;
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $imageUploaded = true;
            } else {
                $imageUploaded = false;
            }
        }

        if ($imageUploaded) {
            $image = htmlspecialchars($newFileName); // updated to reflect new name
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }

        if (updateHouse($id, $name, $description, $price, $bedroom, $bathroom, $image)) {
            header("Location: ../admin/index.php?success=House updated successfully");
            exit();
        } else {
            echo "Error updating house.";
        }
    } else {
        echo "All fields are required.";
    }
} else if(isset($_POST['assign'])) {
    if(isset($_POST['houses']) && $_POST['client'] && $_POST['agent']) {
        $clientid = $_POST['client'];
        $houseid = $_POST['houses'];
        $agentid = $_POST['agent'];

        echo $clientid;
        echo $houseid;
        echo $agentid;


        if (assignHouses($clientid, $houseid, $agentid)) {
            header("Location: ../admin/index.php?success=House assigned successfully");
            exit();
        } else {
            echo "Error assigning house.";
        }
    } else {
        echo "All fields are required.";
    }

    }

