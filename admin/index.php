<?php include "filemanager.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background-image: url(./assets/images/bg.png);
            background-size: cover;
        }

        @media (max-width: 576px) {

            td,
            th {
                font-size: 12px;
                padding: 6px !important;
            }
        }
    </style>
</head>

<body>
    <?php include './includes/navbar.php'; ?>

    <div class="container my-3">
        <div class="row justify-content-end">
            <div class="col-auto d-flex flex-column flex-sm-row gap-2">
                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addHouseModal">
                    Add Houses
                </button>
                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#assignModal">
                    Assign
                </button>
            </div>
        </div>
    </div>

    <div class="container" id="houses_table">
        <div class="table-responsive">
            <table class="table table-info table-bordered table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Price</th>
                        <th>Agent Name</th>
                        <th>Client Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($houses)) {
                        foreach ($houses as $house) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($house['house_name']) . "</td>";
                            echo "<td>" . htmlspecialchars($house['description']) . "</td>";
                            echo "<td>" . htmlspecialchars($house['bedroom']) . " Bedrooms</td>";
                            echo "<td>" . htmlspecialchars($house['bathroom']) . " Bathrooms</td>";
                            echo "<td>" . htmlspecialchars($house['price']) . "</td>";
                            echo "<td>" . ($house['agent_name'] ? htmlspecialchars($house['agent_name']) : '-') . "</td>";
                            echo "<td>" . ($house['client_name'] ? htmlspecialchars($house['client_name']) : '-') . "</td>";
                            echo "<td>
                                <div class='d-flex justify-content-center gap-1'>
                                    <button class='btn editbutton' data-id='{$house['house_id']}' data-bs-toggle='modal' data-bs-target='#edit'>
                                        <img src='./assets/images/edit.png' alt='Edit' width='20px' height='20px'>
                                    </button>
                                    <button class='btn'>
                                        <img src='./assets/images/delete.png' alt='Delete' width='20px' height='20px'>
                                    </button>
                                </div>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No properties available.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add House Modal -->
    <div class="modal fade" id="addHouseModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add House</h1>
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
                        <div class="row mb-3">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Bedroom</label>
                                <input type="number" class="form-control" name="bedroom" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bathroom</label>
                                <input type="number" class="form-control" name="bathroom" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="image" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-secondary" name="add_house">Add House</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Assign Modal -->
    <div class="modal fade" id="assignModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Assign House to Agent</h1>
                </div>
                <div class="modal-body">
                    <form action="./processing.php" method="post">
                        <div class="mb-3">
                            <select class="form-select" name="houses" required>
                                <option value="" selected disabled>Select House</option>
                                <?php
                                if (!empty($houses)) {
                                    foreach ($houses as $house) {
                                        echo "<option value='" . htmlspecialchars($house['house_id']) . "'>" . htmlspecialchars($house['house_name']) . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="client" required>
                                <option value="" selected disabled>Select Client</option>
                                <?php
                                if (!empty($clients)) {
                                    foreach ($clients as $client) {
                                        echo "<option value='" . htmlspecialchars($client['id']) . "'>" . htmlspecialchars($client['client_name']) . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <select class="form-select" name="agent" required>
                                <option value="" selected disabled>Select Agent</option>
                                <?php
                                if (!empty($agents)) {
                                    foreach ($agents as $agent) {
                                        echo "<option value='" . htmlspecialchars($agent['agent_id']) . "'>" . htmlspecialchars($agent['agent_name']) . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-secondary" name="assign">Assign</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Edit House</h1>
                </div>
                <div class="modal-body">
                    <form action="./processing.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="house_id">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Bedroom</label>
                                <input type="number" class="form-control" name="bedroom" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bathroom</label>
                                <input type="number" class="form-control" name="bathroom" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-secondary" name="update">Update</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.editbutton', function(e) {
                e.preventDefault();

                const houseId = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: 'request.php',
                    data: {
                        action: 'get_house',
                        house_id: houseId
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            const house = response.data;
                            $('#edit input[name=house_id]').val(house.house_id);
                            $('#edit input[name=name]').val(house.house_name);
                            $('#edit textarea[name=description]').val(house.description);
                            $('#edit input[name=bedroom]').val(house.bedroom);
                            $('#edit input[name=bathroom]').val(house.bathroom);
                            $('#edit input[name=price]').val(house.price);
                            $('#edit input[name=image]').removeAttr('required');
                        } else {
                            alert("Failed to fetch house data.");
                        }
                    },
                    error: function() {
                        alert("Error fetching data.");
                    }
                });
            });
        });
    </script>
</body>

</html>