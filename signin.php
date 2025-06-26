<?php
include "./server/dbconfigs.php";
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: ./admin/index.php");
    exit();
} else if (isset($_GET['error'])) {
    $error_message = htmlspecialchars($_GET['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="./assets/images/house.png" alt="House" class="img-fluid" style="max-height: 600px;" />
            </div>

            <!-- Login Column -->
            <div class="col-lg-6">
                <div class="card shadow p-4">
                    <div class="text-center mb-4">
                        <img src="./assets/images/logo.png" alt="Logo" style="max-width: 150px;" />
                        <h2 class="mt-3">Login to Your Account</h2>
                        <p class="text-muted">Track your house payments</p>
                        <?php
                        if (!empty($error_message)) {
                            echo "<div class='alert alert-danger mt-2'>$error_message</div>";
                        }
                        ?>
                    </div>

                    <form action="./server/processing.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="mail" placeholder="mail@abc.com" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="code" placeholder="********" required />
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberme" />
                                <label class="form-check-label" for="rememberme">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" name="log_clients" style="background-color: purple;">
                            Login
                        </button>
                    </form>

                    <div class="mt-4 text-center">
                        <p class="mb-2">Not Registered Yet? <a href="./signup.php">Create an Account</a></p>
                        <p>Want to be an agent? <a href="./agentup.php">Create an Agent Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>