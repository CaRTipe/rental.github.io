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

                <form action="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="mail@abc.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="..............">
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
                        <button class="btn" type="submit">Login</button>
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