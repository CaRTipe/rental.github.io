<?php
include "./server/dbconfigs.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="./assets/images/house.png" alt="House" class="img-fluid" style="max-height: 700px;" />
            </div>

            <!-- Signup Form Column -->
            <div class="col-lg-6">
                <div class="card shadow p-4">
                    <div class="text-center mb-4">
                        <img src="./assets/images/logo.png" alt="Logo" style="max-width: 150px;" />
                        <h2 class="mt-3">Create an Account</h2>
                        <p class="text-muted">Track your house payments</p>
                    </div>

                    <form action="./server/processing.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="mail@abc.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="*********" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password2" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="*********" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+254 700 000 000" required>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <button type="submit" name="add_clients" class="btn btn-primary w-100" style="background-color: purple;">
                            Sign Up
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="h6">Already have an account? <a href="./signin.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>