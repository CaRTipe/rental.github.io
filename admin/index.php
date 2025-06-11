<?php
include "filemanager.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5" id="navbar">

        </nav>
    </nav>
    <div class="d-flex flex-row align-items-center justify-content-end">
        <button class="btn btn-secondary mb-5" style="width: 200px; height: 50px;" data-bs-toggle="modal" data-bs-target="#addHouseModal">
            Add houses
        </button>
    </div>
    <div class="container" id="houses_table">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Bedrooms</th>
                    <th>Bathrooms</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($houses)) {
                    foreach ($houses as $house) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($house['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($house['description']) . "</td>";
                        echo "<td>" . htmlspecialchars(($house['bedroom'])) . " Bedrooms </td>";
                        echo "<td>" . htmlspecialchars(($house['bathroom'])) . " Bathrooms </td>";
                        echo "<td>" . htmlspecialchars($house['price']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No properties available.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="addHouseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add houses</h1>
                </div>
                <div class="modal-body">
                    <form action="./processing.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Bedroom</span>
                            <input type="number" class="form-control" name="bedroom" id="bedroom" required>
                            <span class="input-group-text">Bathroom</span>
                            <input type="number" class="form-control" name="bathroom" id="bathroom" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="price" required>
                        </div>
                        <button type="submit" class="btn btn-secondary" name="add_house">Add House</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>