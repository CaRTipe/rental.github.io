<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5" id="navbar">
    <div class="container">

        <!-- Brand + Toggle aligned in one flex row -->
        <div class="d-flex align-items-center justify-content-between w-100">
            <!-- Brand -->
            <div class="d-flex align-items-center">
                <img src="./assets/images/house.png" alt="Logo" width="40" height="40">
                <a class="navbar-brand ms-2 mb-0 h1" href="#">Sustainable Houses</a>
            </div>

            <!-- Offcanvas Toggle Button -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between">

                <!-- Navigation Links -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="index.php">Houses</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="agents.php">Agents</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="clients.php">Clients</a>
                    </li>

                    <!-- Log out Button (Mobile View) -->
                    <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                        <li class="nav-item mt-3 d-lg-none">
                            <a href="../logout.php">
                                <button class="btn btn-secondary w-100">Log out</button>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <!-- Log out Button (Desktop View) -->
        <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
            <div class="d-none d-lg-flex align-items-center ms-3">
                <a href="../logout.php">
                    <button class="btn btn-secondary" style="height: 45px;">Log out</button>
                </a>
            </div>
        <?php endif; ?>
    </div>
</nav>