<?php
include "./server/dbconfigs.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
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
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">About us</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Properties</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-row align-items-center gap-3">
                <a href="./signin.php">
                    <button class="btn btn-outline-secondary" style="width: 120px; height: 40px;">Login</button>
                </a>
                <a href="./signup.php">
                    <button class="btn btn-secondary" style="width: 120px; height: 40px;">Sign Up</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-row-reverse align-items-center" id="loginbody">
        <div class="card" style="width: 811px; height: 900px;">
            <div class="image my-3">
                <img src="./assets/images/logo.png" alt="">
            </div>

            <div class="card" style="width: 420px; height: 450px;">
                <div class="mb-4">
                    <h1>Login to your Account</h1>
                    <p>Track your house payments</p>
                </div>

                <form action="./server/processing.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="mail" placeholder="mail@abc.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="code" placeholder="..............">
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-5" id="checkbox">
                        <div>
                            <input type="checkbox" class="form-check-input" value="" id="rememberme">
                            <label for="rememberme" class="form-check-label">
                                Remember me
                            </label>
                        </div>
                        <div>
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="button">
                        <button class="btn" type="submit" name="log_clients">Login</button>
                    </div>
                </form>
            </div>
            <div class="create mx-5 mt-5" id="create">
                <h1 class="h6">Not Registered Yet? <a href="./signup.php">Create an Account</a></h1>
            </div>
        </div>
        <div>
            <img src="./assets/images/house.png" alt="" width="1000px" height="900px">
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>