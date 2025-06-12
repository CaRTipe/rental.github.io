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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
        <div class="container d-flex flex-row align-items-center justify-content-around">
            <div id="brand">
                <img src="./assets/images/house.png" alt="" width="40px" height="40px">
                <a class="navbar-brand" href="#">Sustainable Houses</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">About us</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Properties</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-row align-items-center gap-3">
                <a href="./signin.php">
                    <button class="btn btn-outline-secondary" style="width: 120px; height: 40px;">Login</button>
                </a>
                <a href="./signup.php">
                    <button class="btn btn-secondary" style="width: 120px; height: 40px;">Sign Up</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex flex-row align-items-center">
        <div class="card mx-5 mt-2" style="width: 920px; height: 814px;">
            <div class="mb-4">
                <h1 class="mb-5">
                    Discover your Dream Property <br> with Sustainable Houses
                </h1>
                <p>
                    Your journey to finding the perfect property begins here. Explore our listings to find the home
                    that matches your dreams.
                </p>
            </div>
            <div class="d-flex flex-row align-items-center gap-3 mb-5">
                <button class="btn btn-outline-secondary">Learn more</button>
                <button class="btn btn-secondary" style="height: 40px;">Browse Properties</button>

            </div>
            <div class="d-flex flex-row align-items-center gap-3" id="exp">
                <div class="card">
                    <h1 class="h5">200+ <br>
                        Happy Customers
                    </h1>
                </div>
                <div class="card">
                    <h1 class="h5"> 10k+ <br>
                        Properties for Clients
                    </h1>
                </div>
                <div class="card">
                    <h1 class="h5"> 16+ <br>
                        Years of Experience
                    </h1>
                </div>
            </div>
        </div>
        <div>
            <img src="./assets/images/container.png" alt="" width="600px" height="600px">
        </div>
    </div>
    <div class=" container-fluid d-flex flex-row align-items-center gap-2 mb-5" id="select">
        <div class="card" style="width: 380px; height:250px; margin-left: 58px;">
            <div class="d-flex flex-column justify-content-center" id="first">
                <img src="./assets/images/dream.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Find your dream house
                </h1>
            </div>
        </div>
        <div class="card" style="width:380px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="second">
                <img src="./assets/images/unlock.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Unlock Property Value
                </h1>
            </div>
        </div>
        <div class="card" style="width:380px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="third">
                <img src="./assets/images/effort.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Effortless Property Management
                </h1>
            </div>
        </div>
        <div class="card" style="width:380px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="fourth">
                <img src="./assets/images/smart.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Smart Investments, Informed Decisions
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="properties">
        <div class="mb-5">
            <img src="./assets/images/abstract.png" alt="" width="68.4px" height="30px">
        </div>
        <div>
            <h1 class="h2 mb-4">
                Featured Properties
            </h1>
        </div>
        <div class="d-flex flex-row align-items-center mb-5 " style="gap: 350px;">
            <p>
                Explore our handpicked selection of properties. Each listing offers a glimpse into the exceptional houses and investments available through <br> Sustainable Houses.
                Click "View Details" for more information
            </p>
            <button class="btn btn-secondary mb-3" style="width: 200px;">
                View All Properties
            </button>
        </div>

        <?php
        if (isset($houses)) {
            echo "<div class='row mb-5' style='margin-left: 130px;'>";

            foreach ($houses as $house) {
                echo "
                    <div class='card col-md-4 mb-4'>
                        <div class='w-100'>
                            <img style='width:100%' src='./uploads/{$house['image']}' alt=''>
                        </div>
                        <div>
                            <h1 class='h4 my-3'>{$house['name']}</h1>
                            <p class='my-3'>
                                {$house['description']} <a href='#'>Read more</a>
                            </p>
                            <div class='d-flex flex-row align-items-center mb-3'>
                                <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                    <div>
                                        <img src='./assets/images/bedroom.png' alt='' width='24px' height='24px'>
                                    </div>
                                    <div>
                                        <p>{$house['bedroom']}-bedroom</p>
                                    </div>
                                </div>
                                <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                    <div>
                                        <img src='./assets/images/bathroom.png' alt='' width='24px' height='24px'>
                                    </div>
                                    <div>
                                        <p>{$house['bathroom']}-bathroom</p>
                                    </div>
                                </div>
                                <div class='card d-flex flex-row align-items-center gap-2' style='width: 155px; height: 43px;'>
                                    <div>
                                        <img src='./assets/images/villa.png' alt='' width='24px' height='24px'>
                                    </div>
                                    <div>
                                        <p>Villa</p>
                                    </div>
                                </div>

                            </div>
                            <div class='d-flex flex-row justify-content-between align-items-center mb-3'>
                                <div>
                                    <h1 class='h4' style='color: grey;'>
                                        Price
                                    </h1>
                                    <h1 class='h3' style='color: #dddddd;'>
                                        {$house['price']}
                                    </h1>
                                </div>
                                <div>
                                    <button class='btn' style='background-color: purple; width: 190px; height: 40px; color: white;'>
                                        View Property Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            echo "</div>";
        }
        ?>
    </div>
    <!-- <div class="d-flex flex-row align-items-center gap-5 mb-5">
            <div class="card" style="width: 600px; height:692px;">
                <div>
                    <img src="./assets/images/seaside.png" alt="" width="440px" height="318px">
                </div>
                <div>
                    <h1 class="h4 my-3">Seaside Serenity Villa</h1>
                    <p class="my-3">A stunning 4-bedroom, 3-bathroom villa in a peaceful surbuban neighborhood.... <a href="#">Read more</a></p>
                    <div class="d-flex flex-row align-items-center mb-3">
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bedroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>4-bedroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bathroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>3-bathroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/villa.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>Villa</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                        <div>
                            <h1 class="h4" style="color: grey;">
                                Price
                            </h1>
                            <h1 class="h3" style="color: #dddddd;">
                                $550,000
                            </h1>
                        </div>
                        <div>
                            <button class="btn" style="background-color: purple; width: 190px; height: 40px; color: white;">
                                View Property Details
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card" style="width: 600px; height:692px;">
                <div>
                    <img src="./assets/images/metropolitan.png" alt="" width="440px" height="318px">
                </div>
                <div>
                    <h1 class="h4 my-3">Metropolitan Haven</h1>
                    <p class="my-3">
                        A chic and fully furnished 2-bedroom apartment with panoramic city views... <a href="#">Read more</a>
                    </p>
                    <div class="d-flex flex-row align-items-center mb-3">
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bedroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>2-bedroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bathroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>2-bathroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/villa.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>Villa</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                        <div>
                            <h1 class="h4" style="color: grey;">
                                Price
                            </h1>
                            <h1 class="h3" style="color: #dddddd;">
                                $550,000
                            </h1>
                        </div>
                        <div>
                            <button class="btn" style="background-color: purple; width: 190px; height: 40px; color: white;">
                                View Property Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 600px; height:692px;">
                <div>
                    <img src="./assets/images/rustic.png" alt="" width="440px" height="318px">
                </div>
                <div>
                    <h1 class="h4 my-3">Rustic Retreat Cottage</h1>
                    <p class="my-3">
                        An elegant 3-bedroom, 2.5-bathroom townhouse in gated community... <a href="#">Read More</a>
                    </p>
                    <div class="d-flex flex-row align-items-center mb-3">
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bedroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>3-bedroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/bathroom.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>3-bathroom</p>
                            </div>
                        </div>
                        <div class="card d-flex flex-row align-items-center gap-2" style="width: 155px; height: 43px;">
                            <div>
                                <img src="./assets/images/villa.png" alt="" width="24px" height="24px">
                            </div>
                            <div>
                                <p>Villa</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                        <div>
                            <h1 class="h4" style="color: grey;">
                                Price
                            </h1>
                            <h1 class="h3" style="color: #dddddd;">
                                $550,000
                            </h1>
                        </div>
                        <div>
                            <button class="btn" style="background-color: purple; width: 190px; height: 40px; color: white;">
                                View Property Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="container" id="reviews">
        <div class="mb-5">
            <img src="./assets/images/abstract.png" alt="" width="68.4px" height="30px">
        </div>
        <div>
            <div>
                <h1 class="h2 mb-4">What Our Clients Say</h1>
            </div>
            <div class="d-flex flex-row align-items-center mb-5 gap-5">
                <p>
                    Read the success stories and heartlight testimonials from our valued clients. Discover why they trust Sustainable Houses for their real estate needs.
                </p>
                <button class="btn btn-secondary mb-3" style="width: 200px;">
                    View All Testimonials
                </button>
            </div>
        </div>
        <div class="d-flex flex-row align-items-center gap-5 mb-5">
            <div class="card" style="width: 512px; height: 442px;">
                <div class="d-flex flex-row align-items-center gap-3 mb-3">
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                </div>
                <div class="mb-5">
                    <h1 class="h3 mb-3">Exceptional Service!</h1>
                    <p class="mb-3">
                        Our experience with sustainable houses was outstanding. Their team's dedication and professionalism made finding our dream home a breeze.
                        Highly recommended
                    </p>
                </div>
                <div class="d-flex flex-row  gap-3">
                    <div>
                        <img src="./assets/images/wade.png" alt="" width="60px" height="60px">
                    </div>
                    <div>
                        <h1 class="h5">Wade Wilson</h1>
                        <p class="mb-3" style="color: grey;">USA, Carlifonia</p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 512px; height: 442px;">
                <div class="d-flex flex-row align-items-center gap-3 mb-3">
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                </div>
                <div class="mb-5 mt-1">
                    <h1 class="h3 mb-3">Efficient And Reliable</h1>
                    <p class="mb-3">
                        Sustainable houses provided us with top-notch service. They helped us sell our property quickly and at a great price.
                        We couldn't be happier with the results.
                    </p>
                </div>
                <div class="d-flex flex-row  gap-3">
                    <div>
                        <img src="./assets/images/emelie.png" alt="" width="60px" height="60px">
                    </div>
                    <div>
                        <h1 class="h5">Emelie Thomson
                            <p class="mb-3" style="color: grey;">USA, Florida</p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 512px; height: 442px;">
                <div class="d-flex flex-row align-items-center gap-3 mb-3">
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                    <div>
                        <img src="./assets/images/star.png" alt="" width="44px" height="44px">
                    </div>
                </div>
                <div class="mb-5">
                    <h1 class="h3 mb-3">Trusted Advisors</h1>
                    <p class="mb-3">
                        The sustainable houses team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive.
                        Thank you for your support!
                    </p>
                </div>
                <div class="d-flex flex-row  gap-3">
                    <div>
                        <img src="./assets/images/john.png" alt="" width="60px" height="60px">
                    </div>
                    <div>
                        <h1 class="h5">John Mans</h1>
                        <p class="mb-3" style="color: grey;">USA, Nevada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="faq">
        <div class="mb-5">
            <img src="./assets/images/abstract.png" alt="" width="68.4px" height="30px">
        </div>
        <div>
            <h1 class="h2 mb-4">Frequently Asked Questions</h1>
        </div>
        <div class="d-flex flex-row align-items-center mb-5 gap-5">
            <p>
                Have questions? We've got answers! Explore our FAQ section to find the information you need about our services, properties, and more.
            </p>
            <button class="btn btn-secondary mb-3" style="width: 200px;">
                View All FAQs
            </button>
        </div>
        <div class="d-flex flex-row align-items-center gap-5 mb-5">
            <div class="card" style="width: 512px; height:326px;">
                <div>
                    <h1 class="h4 mb-3">How do I search for properties on Sustainable homes?</h1>
                    <p class="h6" style="color: grey;">
                        Learn how to use our user-friendly search tools to find properties that match your criteria.
                    </p>
                    <button class="btn btn-secondary mt-3" style="width: 200px; height: 40px;">
                        Read More
                    </button>
                </div>
            </div>
            <div class="card" style="width: 512px; height:326px;">
                <div>
                    <h1 class="h4 mb-3">What documents do i need to sell my property through Sustainable homes?</h1>
                    <p class="h6" style="color: grey;">
                        Find about the necessary documents and paperwork required to sell your property with us.
                    </p>
                    <button class="btn btn-secondary mt-3" style="width: 200px; height: 40px;">
                        Read More
                    </button>
                </div>
            </div>
            <div class="card" style="width: 512px; height:326px;">
                <div>
                    <h1 class="h4 mb-3">How can I contact a Sustainable Houses agent?</h1>
                    <p class="h6" style="color: grey;">
                        Discover the ways to get in touch with our experienced agents for personalized assistance and support.
                    </p>
                    <button class="btn btn-secondary mt-3" style="width: 200px; height: 40px;">
                        Read More
                    </button>
                </div>
            </div>
        </div>



    </div>
    <div class="conatiner d-flex flex-row align-items-center justify-content-around gap-5 mb-5" id="explore">
        <div>
            <h1 class="h2 my-3">Start Your Real Estate journey Today</h1>
            <p>
                Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice. Sustainable houses <br> is here
                to assist you every step of the way. Take the first step towards your real estate goals and explore our <br> available properties or get in touch with our team for personalized assistance.
            </p>
        </div>
        <button class="btn" style="background-color: purple;">
            Explore Properties
        </button>
    </div>
    <div class="container-fluid d-flex flex-row align-items-center justify-content-around gap-5" id="bfooter" style="background-color: rgb(32, 32, 32);">
        <div>
            <div class="d-flex flex-row align-items-center gap-2">
                <img src="./assets/images/house.png" alt="" width="48px" height="48px">
                <h1 class="h3">Sustainable Houses</h1>
            </div>
            <div class="d-flex flex-row align-items-center gap-3 mt-5">
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                <button class="btn btn-secondary" type="submit">Submit</button>
            </div>
        </div>
        <div class="d-flex flex-row align-items-start justify-content-between gap-5" id="quicklinks">
            <div>
                <h1 class="h4 mb-5" style="color: grey;">Home</h1>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-3"><a href="#">Hero Section</a></li>
                    <li class="mb-3"><a href="#">Features</a></li>
                    <li class="mb-3"><a href="#properties">Properties</a></li>
                    <li class="mb-3"><a href="#reviews">Testimonials</a></li>
                    <li class="mb-3"><a href="#faq">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h1 class="h4 mb-5" style="color: grey;">About us</h1>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-3"><a href="#">Our Story</a></li>
                    <li class="mb-3"><a href="#">Our Works</a></li>
                    <li class="mb-3"><a href="#">How it Works</a></li>
                    <li class="mb-3"><a href="#">Our Team</a></li>
                    <li class="mb-3"><a href="#">Our Clients</a></li>
                </ul>
            </div>
            <div>
                <h1 class="h4 mb-5" style="color: grey;">Properties</h1>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-3"><a href="#">Portfolio</a></li>
                    <li class="mb-3"><a href="#">Categories</a></li>
                </ul>
            </div>
            <div>
                <h1 class="h4 mb-5" style="color: grey;">Services</h1>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-3"><a href="#">Valuation Mastery</a></li>
                    <li class="mb-3"><a href="#">Strategic Marketing</a></li>
                    <li class="mb-3"><a href="#">Negotiation Wizardry</a></li>
                    <li class="mb-3"><a href="#">Closing Success</a></li>
                    <li class="mb-3"><a href="#">Property Management</a></li>
                </ul>
            </div>
            <div>
                <h1 class="h4 mb-5" style="color: grey;">Contact us</h1>
                <ul style="list-style-type: none; padding: 0;">
                    <li class="mb-3"><a href="#">Contact Form</a></li>
                    <li class="mb-3"><a href="#">Our Offices</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-row justify-content-around align-items-center" id="footer" style="height: 104px;">
        <div class="d-flex flex-row align-items-center gap-5">
            <h1 class="h6">@2025 Sustainable Houses.All Rights Reserved.</h1>
            <h1 class="h6">Terms And Conditions</h1>
        </div>
        <div class="d-flex flex-row align-items-center gap-4">
            <img src="./assets/images/facebook.png" alt="facebook" width="52px" height="52px">
            <img src="./assets/images/linkedin.png" alt="linked in" width="52px" height="52px">
            <img src="./assets/images/twitter.png" alt="X" width="52px" height="52px">
            <img src="./assets/images/youtube.png" alt="youtube" width="52px" height="52px">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>