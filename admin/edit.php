<?php 
include "filemanager.php";
 $edit = $_GET['house_id'];
 echo $edit;
 print_r(getHouse($edit));
 $house = getHouse($edit)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit House</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container " style="margin-top: 250px;">
        <form action="./processing.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="house_id" value="<?php 
             echo $house['house_id'];
            ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php 
                echo $house['name'];
                ?>" id="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description"  id="description" rows="3" required><?php
        echo $house['description'];
?>
                </textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Bedroom</span>
                <input type="number" class="form-control" name="bedroom" value="<?php 
                echo $house['bedroom'];
                ?>" id="bedroom" required>
                <span class="input-group-text">Bathroom</span>
                <input type="number" class="form-control" name="bathroom" value="<?php
                echo $house['bathroom']; 
                ?>" id="bathroom" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="<?php 
                echo $house['price'];
                ?>" id="price" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload image</label>
                <input class="form-control" type="file" id="formFile" value="
                <?php 
                echo $house['image'];
                ?>" name="image" required>
            </div>
            <button type="submit" class="btn btn-secondary" name="update">Update</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>