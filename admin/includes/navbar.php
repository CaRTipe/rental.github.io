<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5" id="navbar">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Brand -->
        <div class="d-flex align-items-center">
            <img src="./assets/images/house.png" alt="" width="40" height="40">
            <a class="navbar-brand ms-2 mb-0 h1" href="#">Sustainable Houses</a>
        </div>

        <!-- Offcanvas Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav d-flex align-items-center flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="index.php">Houses</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="agents.php">Agents</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="clients.php">Clients</a>
                    </li>
                </ul>

                <!-- Log out Button -->
                <div class="d-lg-none mt-3">
                    <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                        <a href="../logout.php">
                            <button class="btn btn-secondary w-100">Log out</button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Log out Button for large screens -->
        <div class="d-none d-lg-block ms-3">
            <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                <a href="../logout.php">
                    <button class="btn btn-secondary" style="width: 150px; height: 45px;">Log out</button>
                </a>
            <?php endif; ?>
        </div>

    </div>
</nav>