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
            <div class="container d-flex flex-row align-items-center justify-content-around">
                <div id="brand">
                    <img src="./assets/images/house.png" alt="" width="40px" height="40px">
                    <a class="navbar-brand" href="#">Sustainable Houses</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                            <a class="nav-link" aria-current="page" href="index.php">Houses</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="agents.php">Agents</a>
                        </li>

                        <li class="nav-item mx-4">
                            <a class="nav-link" href="clients.php">Clients</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                        <a href="../logout.php"><button class="btn btn-secondary" style="width: 200px; height: 50px;">Log out</button></a>
                    <?php
                    endif; ?>
                </div>
        </nav>
    </nav>
    <div class="d-flex flex-row-reverse align-items-center justify-content-end">
        <div>
            <button class="btn btn-secondary mb-5" style="width: 200px; height: 50px;" data-bs-toggle="modal" data-bs-target="#addHouseModal">
                Add houses
            </button>
            <button class="btn btn-secondary mb-5" style="width: 200px; height: 50px;" data-bs-toggle="modal" data-bs-target="#assignModal">
                Assign
            </button>
        </div>

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
                    <th>Actions</th>
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
                        echo "<td>" .
                            "<a href='edit.php?house_id={$house['house_id']}' class='btn'><img src='./assets/images/edit.png' alt='Edit' width='20px' height='20px'></a>" .
                            "<a href='#' class='btn'><img src='./assets/images/delete.png' alt='Delete' width='20px' height='20px'></a>" .
                            "</td>";
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
                    <form action="./processing.php" method="post" enctype="multipart/form-data">
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
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload image</label>
                            <input class="form-control" type="file" id="formFile" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-secondary" name="add_house">Add House</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="assignModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Assign House to Agent</h1>
                </div>
                <div class="modal-body">
                    <form action="./processing.php" method="post" enctype="multipart/form-data">
                        <select class="form-select mb-4" id="houses" name="houses">
                            <option value="" selected disabled>Select House</option>
                            <?php
                            if(!empty($houses)) {
                                foreach ($houses as $house) {
                                    echo "<option value = '" . htmlspecialchars($house['house_id']) ."'>" . htmlspecialchars($house['name']) . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <select class="form-select mb-4" id="client" name="client">
                            <option value="" selected disabled>Select Client</option>
                            <?php
                            if(!empty($clients)) {
                                foreach ($clients as $client) {
                                    echo "<option value = '" . htmlspecialchars($client['id']) . "'>" . htmlspecialchars($client['name']) . "</option>";
                                }
                            } 
                            ?>
                        </select>
                        <select class="form-select mb-4" name="agent" id="agent">
                            <option value="" selected disabled>Select Agent</option>
                            <?php
                            if (!empty($agents)) {
                                foreach ($agents as $agent) {
                                    echo "<option value='" . htmlspecialchars($agent['agent_id']) . "'>" . htmlspecialchars($agent['agent_name']) . "</option>";
                                }
                            } 
                            ?>
                        </select>
                        <button type="submit" class="btn btn-secondary" name="assign">Assign</button>
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