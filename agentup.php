<?php
include "./server/dbconfigs.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background-color: #f0f2f5;
        }

        #signupbody {
            min-height: 100vh;
            padding: 2rem;
            background: linear-gradient(to right, #ddd6f3, #faaca8);
        }

        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn {
            background-color: purple;
            color: white;
            width: 100%;
        }

        .btn:hover {
            background-color: #5e005e;
        }

        .login a {
            color: purple;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container-fluid d-flex flex-column flex-lg-row-reverse align-items-center justify-content-center gap-0" id="signupbody">
        <div class="card p-4 mb-5 mb-lg-0" style="max-width: 500px;">
            <div class="text-center mb-3">
                <img src="./assets/images/logo.png" alt="Logo" class="img-fluid" width="100">
            </div>

            <div class="mb-4 text-center">
                <h2 class="fw-bold">Create an Agent Account</h2>
                <p class="text-muted">Help us achieve our main goal!</p>
            </div>

            <form id="agentup">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="mail@abc.com" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="............." required>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="............" required>
                </div>
                <div class="mb-4">
                    <label for="years" class="form-label">Years of Experience</label>
                    <input type="number" class="form-control" id="years" name="years" required>
                </div>
                <button type="submit" class="btn" name="add_agents">Sign up</button>
            </form>

            <div class="text-center mt-4 login">
                <p class="h6">Already have an account? <a href="./agentin.php">Login</a></p>
            </div>
        </div>

        <div class="d-none d-lg-block">
            <img src="./assets/images/house.png" alt="House" class="img-fluid" width="800px" style="max-width: none;">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#agentup').on('submit', function(e) {
                e.preventDefault();
                let email = $('#email').val();
                let name = $('#name').val();
                let password = $('#password').val();
                let password2 = $('#password2').val();
                let years = $('#years').val();
                let add_agents = true;

                $.ajax({
                    type: 'POST',
                    url: './server/processing.php',
                    data: {
                        email: email,
                        name: name,
                        password: password,
                        password2: password2,
                        years: years,
                        add_agents: add_agents
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Welcome!",
                                text: "Account created successfully.",
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            setTimeout(() => {
                                window.location.href = "agentin.php";
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Error",
                                text: response.message || "Signup failed.",
                                icon: "error"
                            });
                        }
                    },
                    error: function() {
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