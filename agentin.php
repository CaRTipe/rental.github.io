<?php
include "./server/dbconfigs.php";
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: ./admin/index.php");
} else if (isset($_GET['error'])) {
    $error_message = htmlspecialchars($_GET['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        #loginbody {
            min-height: 100vh;
            padding: 2rem;
            background: linear-gradient(to right, #ddd6f3, #faaca8);
        }
        .card {
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .btn {
            background-color: purple;
            color: white;
            width: 100%;
        }
        .btn:hover {
            background-color: #5e005e;
        }
        .create a {
            color: purple;
            text-decoration: none;
        }
        .create a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between" id="loginbody">
        <div class="card p-4 mb-5 mb-lg-0" style="max-width: 450px;">
            <div class="text-center mb-3">
                <img src="./assets/images/logo.png" alt="Logo" class="img-fluid" width="100">
            </div>

            <div class="mb-4 text-center">
                <h2 class="fw-bold">Login to your Account</h2>
                <p class="text-muted">Welcome back, Agent</p>
            </div>

            <form id="agentin">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="mail" placeholder="mail@abc.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="code" placeholder=".............." required>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberme">
                        <label class="form-check-label" for="rememberme">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none text-muted">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="log_agents">Login</button>
            </form>

            <div class="text-center mt-4">
                <p class="h6">Don't have an agent account? <a href="./agentup.php">Create an Agent Account</a></p>
            </div>
        </div>

        <div class="d-none d-lg-block">
            <img src="./assets/images/house.png" alt="House" class="img-fluid" style="max-width: 700px;">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#agentin').on('submit', function (e) {
                e.preventDefault();
                let mail = $('#email').val();
                let code = $('#password').val();
                let log_agents = true;

                $.ajax({
                    type: 'POST',
                    url: './server/processing.php',
                    data: {
                        mail: mail,
                        code: code,
                        log_agents: log_agents
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Welcome!",
                                text: "Signed in",
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            setTimeout(() => {
                                window.location.href = "./admin/index.php";
                            }, 2000);
                        } else {
                            window.location.href = "./agentin.php?error=Invalid email or password";
                        }
                    },
                    error: function () {
                        Swal.fire({
                            title: "Error",
                            text: "Unable to process your request.",
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
