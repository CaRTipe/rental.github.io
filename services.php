<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<style>
</style>

<body>
    <?php include './navbar/navbar.php'; ?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Our Services</h1>
        <p class="lead text-center mb-5">
            At Sustainable Houses, we offer a range of services designed to help you find, buy, and settle into the perfect eco-friendly home.
        </p>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-info shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Eco-Friendly House Sales</h5>
                        <p class="card-text">
                            Browse our curated selection of sustainable homes designed with the environment in mind, without compromising on luxury or comfort.
                        </p>
                        <img src="" alt="">
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-info shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Agent Matching</h5>
                        <p class="card-text">
                            We connect you with trusted real estate agents who specialize in sustainable housing and understand your specific needs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-info shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Home-Buying Consultation</h5>
                        <p class="card-text">
                            Get expert advice on property investment, mortgages, and sustainable building materials tailored to your budget and vision.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Add more services as needed -->
        </div>
    </div>

    <div class="text-center my-5">
        <h2 class="mb-4">Watch Our Unique Spaces</h2>
        <p class="lead mb-4">
            Explore our featured video showcasing a stunning mansion built on the edge of an abandoned quarry, highlighting innovative architecture and sustainable design.
        </p>

        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 20px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1), 0 12px 58px rgba(0, 0, 0, 0.1), 0 24px 110px rgba(0, 0, 0, 0.1);">
            <iframe
                src="https://www.youtube.com/embed/HQQCiZNCg8o"
                title="Inside A Mansion Built On The Edge Of An Abandoned Quarry | Unique Spaces | Architectural Digest"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 20px;"></iframe>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="contact.php" class="btn btn-primary">Contact Us for More Information</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>