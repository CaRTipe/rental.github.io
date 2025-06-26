<?php include "filemanager.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background-image: url(./assets/images/bg.png);
            background-size: cover;
        }

        @media (max-width: 576px) {

            td,
            th {
                font-size: 13px;
                padding: 6px !important;
            }
        }
    </style>
</head>

<body>
    <?php include './includes/navbar.php'; ?>

    <div class="container my-5" id="client_table">
        <div class="table-responsive">
            <table class="table table-success table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($clients) && count($clients) > 0) {
                        foreach ($clients as $client) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($client['client_name']) . "</td>";
                            echo "<td>" . htmlspecialchars($client['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($client['phone']) . "</td>";
                            echo "<td>" . htmlspecialchars($client['date_of_birth']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No Clients Available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>