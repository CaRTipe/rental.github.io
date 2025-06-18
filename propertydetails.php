<?php
include 'filemanager.php'
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container mt-5">
        <?php
        if (isset($houses)) {
            echo "<div class='row mb-5' style='margin-left: 70px;'>";

            foreach ($houses as $house) {
                echo "
                <div class='card col-md-4 mb-4'>
                    <div class='w-100'>
                        <img style='width:100%' src='./uploads/{$house['image']}' alt=''>
                    </div>
                    <div>
                        <h1 class='h4 my-3'>{$house['house_name']}</h1>
                        <p class='my-3'>
                            {$house['description']} <a href='#'>Read more</a>
                        </p>
                        <div class='d-flex flex-row align-items-center mb-3'>
                            <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                <div>
                                    <img src='./assets/images/bedroom.png' alt='' width='24px' height='24px'>
                                </div>
                                <div>
                                    <p>{$house['bedroom']}-bedroom</p>
                                </div>
                            </div>
                            <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                <div>
                                    <img src='./assets/images/bathroom.png' alt='' width='24px' height='24px'>
                                </div>
                                <div>
                                    <p>{$house['bathroom']}-bathroom</p>
                                </div>
                            </div>
                            <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                <div>
                                    <img src='./assets/images/villa.png' alt='' width='24px' height='24px'>
                                </div>
                                <div>
                                    <p>Villa</p>
                                </div>
                            </div>
                        </div>
                        <div class='d-flex flex-row justify-content-between align-items-center mb-3'>
                            <div>
                                <h1 class='h4' style='color: grey;'>
                                    Price
                                </h1>
                                <h1 class='h3' style='color: #dddddd;'>
                                    {$house['price']}
                                </h1>
                            </div>
                            <div>
                                <a href='singleproperty.php?house_id={$house['house_id']}'><button class='btn' style='background-color: purple; width: 190px; height: 40px; color: white; name='property'>
                                        View Property Details
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
        }
        ?>









        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>