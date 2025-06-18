<nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5" id="navbar">
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
                        <a class="nav-link" aria-current="page" href="index.php">Houses</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="agents.php">Agents</a>
                    </li>

                    <li class="nav-item mx-4">
                        <a class="nav-link" href="clients.php">Clients</a>
                    </li>
                </ul>
            </div>
            <div>
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                    <a href="../logout.php"><button class="btn btn-secondary" style="width: 200px; height: 50px;">Log out</button></a>
                <?php
                endif; ?>
            </div>
    </nav>
</nav>