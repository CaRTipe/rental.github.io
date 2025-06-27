<?php include "filemanager.php"; ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include "./navbar/navbar.php"; ?>

    <div class="container py-5">
        <div class="row align-items-center justify-content-center g-5">
            <!-- Contact Form -->
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="card p-4 bg-grey">
                    <h1 class="text-center mb-4" style="font-size: 50px;">CONTACT US</h1>
                    <form id="contactform">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message..."></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-secondary" type="submit" name="send_message">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="./assets/images/gotocontact.jpg" alt="Contact" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
    <?php
    include "./navbar/footer.php";
    ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('#contactform').on('submit', function(e) {
                e.preventDefault();
                let name = $('#name').val();
                let email = $('#email').val();
                let message = $('#message').val();

                $.ajax({
                    type: 'POST',
                    url: './server/processing.php',
                    data: {
                        name: name,
                        email: email,
                        message: message,
                        send_message: true
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire("Message Sent", "Your message has been sent successfully!", "success");
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>