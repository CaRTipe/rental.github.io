<?php
include "filemanager.php";
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background-image: url(./assets/images/bg.png);
        background-size: cover;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include './includes/navbar.php';
    ?>
    <div class="container mt-5">
        <table class="table table-striped">
            <tr>
                <th>Agent Name</th>
                <th>Email Address</th>
                <th>Years of Experience</th>
            </tr>
            <?php
            if (isset($agents)) {
                foreach ($agents as $agent) {
                    echo "<tr>";
                    echo "<td style='padding=2px;'>" . htmlspecialchars($agent['agent_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($agent['email_address']) . "</td>";
                    echo "<td>" . htmlspecialchars($agent['years_of_exp']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No Agent Available</td></td>";
            }

            ?>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>