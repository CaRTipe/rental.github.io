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
                        <a class="nav-link" aria-current="page" href="#">Home</a>
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
            <div>
                <ul class="d-flex flex-row align-items-center mt-3" id="sign">
                    <li><a href="./signup.php"><button class="btn btn-secondary">Sign up</button></a></li>
                    <li><a href="./signin.php"><button class="btn btn-primary">Sign in</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-row align-items-center">
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
            <img src="./assets/images/container.png" alt="" width="920px" height="814px">
        </div>
    </div>
    <div class="d-flex flex-row align-items-center gap-3 mb-5" id="select">
        <div class="card" style="width: 435px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="first">
                <img src="./assets/images/dream.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Find your dream house
                </h1>
            </div>
        </div>
        <div class="card" style="width:450px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="second">
                <img src="./assets/images/unlock.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Unlock Property Value
                </h1>
            </div>
        </div>
        <div class="card" style="width:450px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="third">
                <img src="./assets/images/effort.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Effortless Property Management
                </h1>
            </div>
        </div>
        <div class="card" style="width:450px; height:250px;">
            <div class="d-flex flex-column justify-content-center" id="fourth">
                <img src="./assets/images/smart.png" alt="" width="62px" height="62px">
                <h1 class="h5 mt-3">
                    Smart Investments, Informed Decisions
                </h1>
            </div>
        </div>
    </div>
    <div class="container" id="properties">
        <div class="mb-5">
            <img src="./assets/images/abstract.png" alt="" width="68.4px" height="30px">
        </div>
        <div>
            <h1 class="h2 mb-4">
                Featured Properties
            </h1>
        </div>
        <div class="d-flex flex-row align-items-center mb-5 gap-5">
            <p>
                Explore our handpicked selection of properties. Each listing offers a glimpse into the exceptional houses and investments available through <br> Sustainable Houses.
                Click "View Details" for more information
            </p>
            <button class="btn btn-secondary mb-3" style="width: 200px;">
                View All Properties
            </button>
        </div>
        <div class="d-flex flex-row align-items-center gap-5 mb-5">
            <div class="card" style="width: 512px; height:692px;">
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
            <div class="card" style="width: 512px; height:692px;">
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
            <div class="card" style="width: 512px; height:692px;">
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
        </div>
    </div>
    <div class="container" id="reviews">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>