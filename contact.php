<?php
include "filemanager.php"
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include "./navbar/navbar.php"
    ?>

    <div class="container-fluid d-flex justify-content-center align-items-center flex-row" style="height: 100vh; gap: 50px;">
        <div class="card bg-grey" style="width: 30%;">
            <div>
                <h1 class="h1" style="margin-bottom: 200px; font-size: 70px;">CONTACT US</h1>
            </div>
            <form id="contactform">
                <div class="mx-3 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John">
                </div>
                <div class="mx-3 mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mx-3 mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>

                <div class="mx-3">
                    <button class="btn btn-secondary" type="submit" name="send_message">Submit</button>
                </div>
            </form>
        </div>
        <div>
            <img src="./assets/images/gotocontact.jpg" alt="" width="600px">
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){

        })
        $('#contactform').on('submit', function(e) {
            e.preventDefault();
            let name = $('#name').val();
            let email = $('#email').val();  
            let message = $('#message').val();

            const data = {
                name: name,
                email: email,
                message: message,
                send_message: true
            };
            $.ajax({
                type: 'POST',
                url: './server/processing.php',
                data: data,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire("Message Sent", "Your message has been sent successfully!", "success");
                        setTimeout(() => {
                            window.location.reload();
                        }, 1500);
                        
                    } 
                },
            });
        })
    </script>
</body>

</html>