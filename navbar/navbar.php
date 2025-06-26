<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <img src="./assets/images/house.png" alt="" width="40" height="40">
            Sustainable Houses
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
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Nav links -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="propertydetails.php">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>

                <!-- Login/Sign Up Buttons -->
                <div class="mt-3 d-flex gap-2">
                    <a href="./signin.php">
                        <button class="btn btn-outline-light w-100">Login</button>
                    </a>
                    <a href="./signup.php">
                        <button class="btn btn-light w-100">Sign Up</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>