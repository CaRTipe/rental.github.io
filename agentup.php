<?php
include "./server/dbconfigs.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include "./navbar/navbar.php";
    ?>
    <div class="d-flex flex-row-reverse align-items-center" id="signupbody">
        <div class="card" style="width: 811px; height: 900px;">
            <div class="card" style="width: 420px; height: 450px;">
                <div class="image my-3">
                    <img src="./assets/images/logo.png" alt="">
                </div>
                <div class="mb-4">
                    <h1>Create an Agent Account</h1>
                    <p>Help us achieve our main goal!</p>
                </div>

                <form action="" method="post" id="agentup">
                    <div class="d-flex flex-row align-items-center gap-3">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="mail@abc.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center gap-3">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="............." required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="............" required>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="years" class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" id="years" name="years" required>
                    </div>


                    <div class="button mb-5">
                        <button class="btn" name="add_agents">Sign up</button>
                    </div>
                </form>

            </div>
            <div class="login mx-1" id="login">
                <h1 class="h6">Already have an account? <a href="./agentin.php">Login</a></h1>
            </div>
        </div>
        <div>
            <img src="./assets/images/house.png" alt="" width="1000px" height="900px">
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            
        })
        $("#agentup").on('submit', function(e) {
            e.preventDefault();
            let email = $("#email").val()
            let name = $("#name").val()
            let password = $("#password").val()
            let password2 = $("#password2").val()
            let year = $("#years").val()
            let add_agents = true


            const data = {
                'email': email,
                'name': name,
                'password': password,
                'password2': password2,
                'years': year,
                'add_agents': add_agents, 

            }
            $.ajax({
                type: 'POST',
                url:  './server/processing.php',
                data: data,
                dataType: 'json',
                success: function(response) {
                    if(response.success) {
                       Swal.fire({
                            title: "Welcome!",
                            text: "Signed up",
                            icon: "success"
                        }); 
                        setTimeout(()=>{
                            window.location.href = "agentin.php"
                        }, 2000)
                    }
                }
            })
        })
    </script>
</body>

</html>