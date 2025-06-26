<?php
// Detect current page
$currentPage = basename($_SERVER['PHP_SELF']);

// Check if it's signin or signup page
$isAuthPage = in_array($currentPage, ['signin.php', 'signup.php', 'agentin.php', 'agentup.php']);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <img src="./assets/images/house.png" alt="" width="40" height="40">
            <span class="fw-bold">Sustainable Houses</span>
        </a>

        <!-- Toggler for Offcanvas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Sidebar -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column flex-lg-row align-items-lg-center justify-content-between w-100">
                <!-- Nav links -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 flex-lg-row">
                    <li class="nav-item px-lg-2">
                        <a class="nav-link <?= $isAuthPage ? 'text-dark' : 'text-white' ?>" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link <?= $isAuthPage ? 'text-dark' : 'text-white' ?>" href="#">About Us</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link <?= $isAuthPage ? 'text-dark' : 'text-white' ?>" href="propertydetails.php">Properties</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a class="nav-link <?= $isAuthPage ? 'text-dark' : 'text-white' ?>" href="#">Services</a>
                    </li>
                </ul>

                <!-- Login/Sign Up Buttons -->
                <div class="mt-3 mt-lg-0 d-flex gap-2">
                    <a href="./signin.php">
                        <button class="btn btn-outline-light btn-sm btn-lg-outline-dark">Login</button>
                    </a>
                    <a href="./signup.php">
                        <button class="btn btn-light btn-sm btn-lg-dark">Sign Up</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>