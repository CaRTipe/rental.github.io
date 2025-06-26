<?php
include "filemanager.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainable Homes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    include "./navbar/navbar.php"
    ?>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card p-4">
                    <div class="mb-4">
                        <h1 class="mb-3">
                            Discover your Dream Property <br class="d-none d-md-block">
                            with Sustainable Houses
                        </h1>
                        <p>
                            Your journey to finding the perfect property begins here. Explore our listings to find the home
                            that matches your dreams.
                        </p>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <button class="btn btn-outline-secondary">Learn more</button>
                        <button class="btn btn-secondary" style="height: 40px;">Browse Properties</button>
                    </div>
                    <div class="d-flex flex-wrap gap-3" id="exp">
                        <div class="card p-3 text-center flex-fill">
                            <h1 class="h5">200+ <br> Happy Customers</h1>
                        </div>
                        <div class="card p-3 text-center flex-fill">
                            <h1 class="h5">10k+ <br> Properties for Clients</h1>
                        </div>
                        <div class="card p-3 text-center flex-fill">
                            <h1 class="h5">16+ <br> Years of Experience</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 col-md-12 text-center">
                <img src="./assets/images/container.png" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 text-center p-4">
                    <img src="./assets/images/dream.png" alt="" width="62" height="62" class="mx-auto">
                    <h1 class="h5 mt-3">Find your dream house</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 text-center p-4">
                    <img src="./assets/images/unlock.png" alt="" width="62" height="62" class="mx-auto">
                    <h1 class="h5 mt-3">Unlock Property Value</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 text-center p-4">
                    <img src="./assets/images/effort.png" alt="" width="62" height="62" class="mx-auto">
                    <h1 class="h5 mt-3">Effortless Property Management</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 text-center p-4">
                    <img src="./assets/images/smart.png" alt="" width="62" height="62" class="mx-auto">
                    <h1 class="h5 mt-3">Smart Investments, Informed Decisions</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Properties Section -->
    <div class="container py-5" id="properties">
        <div class="mb-3">
            <img src="./assets/images/abstract.png" alt="" width="68" height="30">
        </div>
        <h1 class="h2 mb-4">Featured Properties</h1>
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <p>
                    Explore our handpicked selection of properties. Each listing offers a glimpse into the exceptional houses and investments available through Sustainable Houses.
                    Click "View Details" for more information.
                </p>
            </div>
            <div class="col-md-4 text-md-end text-center">
                <a href="propertydetails.php" class="btn btn-secondary w-100 w-md-auto">View All Properties</a>
            </div>
        </div>

        <div class="row g-4">
            <?php
            if (isset($houses)) {
                foreach ($houses as $key => $house) {
                    if ($key > 2) break;
                    echo "
                <div class='col-md-4'>
                    <div class='card h-100'>
                        <img src='./uploads/{$house['image']}' class='img-fluid' alt=''>
                        <div class='p-3'>
                            <h4>{$house['house_name']}</h4>
                            <p>{$house['description']} <a href='#'>Read more</a></p>
                            <div class='d-flex flex-wrap gap-2 mb-3'>
                                <div class='card flex-fill text-center p-2'>
                                    <img src='./assets/images/bedroom.png' alt='' width='24' height='24'>
                                    <p class='mb-0'>{$house['bedroom']}-bedroom</p>
                                </div>
                                <div class='card flex-fill text-center p-2'>
                                    <img src='./assets/images/bathroom.png' alt='' width='24' height='24'>
                                    <p class='mb-0'>{$house['bathroom']}-bathroom</p>
                                </div>
                                <div class='card flex-fill text-center p-2'>
                                    <img src='./assets/images/villa.png' alt='' width='24' height='24'>
                                    <p class='mb-0'>Villa</p>
                                </div>
                            </div>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div>
                                    <h6 class='text-muted mb-1'>Price</h6>
                                    <h5 class='text-secondary'>{$house['price']}</h5>
                                </div>
                                <a href='singleproperty.php?house_id={$house['house_id']}' class='btn btn-primary' style='background-color: purple;'>View Property Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                }
            }
            ?>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="container py-5" id="reviews">
        <div class="mb-3">
            <img src="./assets/images/abstract.png" alt="" width="68" height="30">
        </div>
        <h1 class="h2 mb-4">What Our Clients Say</h1>
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <p>Read the success stories and heartlight testimonials from our valued clients. Discover why they trust Sustainable Houses for their real estate needs.</p>
            </div>
            <div class="col-md-4 text-md-end text-center">
                <button class="btn btn-secondary w-100 w-md-auto">View All Testimonials</button>
            </div>
        </div>
        <div class="row g-4">
            <!-- Review Cards -->
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="d-flex gap-2 mb-3">
                        <?php for ($i = 0; $i < 5; $i++) echo "<img src='./assets/images/star.png' width='24' height='24'>"; ?>
                    </div>
                    <h3>Exceptional Service!</h3>
                    <p>Our experience with sustainable houses was outstanding. Their team's dedication and professionalism made finding our dream home a breeze.</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <img src="./assets/images/wade.png" width="60" height="60" alt="">
                        <div>
                            <h5>Wade Wilson</h5>
                            <p class="text-muted">USA, California</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="d-flex gap-2 mb-3">
                        <?php for ($i = 0; $i < 5; $i++) echo "<img src='./assets/images/star.png' width='24' height='24'>"; ?>
                    </div>
                    <h3>Efficient and Reliable</h3>
                    <p>Sustainable houses helped us sell quickly and at a great price. We couldn't be happier with the results.</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <img src="./assets/images/emelie.png" width="60" height="60" alt="">
                        <div>
                            <h5>Emelie Thomson</h5>
                            <p class="text-muted">USA, Florida</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="d-flex gap-2 mb-3">
                        <?php for ($i = 0; $i < 5; $i++) echo "<img src='./assets/images/star.png' width='24' height='24'>"; ?>
                    </div>
                    <h3>Trusted Advisors</h3>
                    <p>The team guided us through the buying process. Their knowledge and commitment to our needs were impressive.</p>
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <img src="./assets/images/john.png" width="60" height="60" alt="">
                        <div>
                            <h5>John Mans</h5>
                            <p class="text-muted">USA, Nevada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container py-5" id="faq">
        <div class="mb-3">
            <img src="./assets/images/abstract.png" alt="" width="68" height="30">
        </div>
        <h1 class="h2 mb-4">Frequently Asked Questions</h1>
        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <p>Have questions? We've got answers! Explore our FAQ section to find the information you need about our services, properties, and more.</p>
            </div>
            <div class="col-md-4 text-md-end text-center">
                <button class="btn btn-secondary w-100 w-md-auto">View All FAQs</button>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <h4>How do I search for properties?</h4>
                    <p class="text-muted">Learn how to use our user-friendly search tools to find properties that match your criteria.</p>
                    <button class="btn btn-secondary mt-3">Read More</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <h4>What documents are needed to sell?</h4>
                    <p class="text-muted">Find out the necessary documents and paperwork required to sell your property with us.</p>
                    <button class="btn btn-secondary mt-3">Read More</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <h4>How can I contact an agent?</h4>
                    <p class="text-muted">Discover ways to get in touch with our experienced agents for personalized assistance.</p>
                    <button class="btn btn-secondary mt-3">Read More</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Explore Section -->
    <div class="container py-5" id="explore">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 col-12">
                <h1 class="h2 mb-3">Start Your Real Estate Journey Today</h1>
                <p>
                    Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Sustainable Houses
                    is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with
                    our team for personalized assistance.
                </p>
            </div>
            <div class="col-lg-4 col-12 text-lg-end text-center">
                <button class="btn btn-primary" style="background-color: purple;">Explore Properties</button>
            </div>
        </div>
    </div>

    <!-- Footer Top Section -->
    <div class="container py-5 text-white" style="background-color: rgb(32, 32, 32);" id="bfooter">
        <div class="row g-5">
            <!-- Logo and Newsletter -->
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <img src="./assets/images/house.png" alt="" width="48" height="48">
                    <h1 class="h4">Sustainable Houses</h1>
                </div>
                <form class="d-flex flex-column flex-sm-row gap-2">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button class="btn btn-secondary" type="submit">Submit</button>
                </form>
            </div>

            <!-- Footer Links -->
            <div class="col-md-8">
                <div class="row g-4">
                    <!-- Home -->
                    <div class="col-6 col-lg-2">
                        <h5 class="text-secondary mb-3">Home</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Hero Section</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Features</a></li>
                            <li><a href="#properties" class="text-white text-decoration-none">Properties</a></li>
                            <li><a href="#reviews" class="text-white text-decoration-none">Testimonials</a></li>
                            <li><a href="#faq" class="text-white text-decoration-none">FAQs</a></li>
                        </ul>
                    </div>
                    <!-- About Us -->
                    <div class="col-6 col-lg-2">
                        <h5 class="text-secondary mb-3">About Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Our Story</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Our Works</a></li>
                            <li><a href="#" class="text-white text-decoration-none">How it Works</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Our Team</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Our Clients</a></li>
                        </ul>
                    </div>
                    <!-- Properties -->
                    <div class="col-6 col-lg-2">
                        <h5 class="text-secondary mb-3">Properties</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Portfolio</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Categories</a></li>
                        </ul>
                    </div>
                    <!-- Services -->
                    <div class="col-6 col-lg-3">
                        <h5 class="text-secondary mb-3">Services</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Valuation Mastery</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Strategic Marketing</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Negotiation Wizardry</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Closing Success</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Property Management</a></li>
                        </ul>
                    </div>
                    <!-- Contact Us -->
                    <div class="col-6 col-lg-3">
                        <h5 class="text-secondary mb-3">Contact Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="contact.php" class="text-white text-decoration-none">Contact Form</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Our Offices</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="container-fluid py-3" style="background-color: #1a1a1a;" id="footer">
        <div class="row align-items-center text-white">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="me-4">@2025 Sustainable Houses. All Rights Reserved.</span>
                <a href="#" class="text-white text-decoration-none">Terms and Conditions</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <img src="./assets/images/facebook.png" alt="facebook" width="32" height="32" class="mx-1">
                <img src="./assets/images/linkedin.png" alt="linkedin" width="32" height="32" class="mx-1">
                <img src="./assets/images/twitter.png" alt="twitter" width="32" height="32" class="mx-1">
                <img src="./assets/images/youtube.png" alt="youtube" width="32" height="32" class="mx-1">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>