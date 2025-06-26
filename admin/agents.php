<?php include "filemanager.php"; ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        /* General Body */
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        /* Navbar Style */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
            padding: 1rem 2rem;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #00796b !important;
        }

        /* Agent Table Section */
        #agent-table {
            background-color: #e8f5e9;
            /* Light green tint */
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            margin-top: 60px;
        }

        /* Table Styling */
        .table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 12px;
            overflow: hidden;
            font-size: 15px;
            color: #333;
        }

        .table thead {
            background-color: #00796b;
            color: #ffffff;
        }

        .table th,
        .table td {
            padding: 14px 20px;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        /* Responsive text for small screens */
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

    <div class="container mt-5" id="agent_table">
        <div class="table-responsive">
            <table class="table table-striped table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Agent Name</th>
                        <th>Email Address</th>
                        <th>Years of Experience</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($agents) && count($agents) > 0) {
                        foreach ($agents as $agent) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($agent['agent_name']) . "</td>";
                            echo "<td>" . htmlspecialchars($agent['email_address']) . "</td>";
                            echo "<td>" . htmlspecialchars($agent['years_of_exp']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No Agents Available</td></tr>";
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