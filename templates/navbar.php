<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="home.php">
            <img src="../images/ereprosAssets/EreprosLogo.png" alt="" class="img-fluid" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= ($currentPage == 'home') ? 'active' : ''; ?>"><a href=" home.php" class="nav-link">Home</a></li>
                <li class="nav-item <?= ($currentPage == 'about') ? 'active' : ''; ?>"><a href=" about.php" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu mega-menu dropdown-menu-dark p-2" style="margin-top: -5%;" aria-labelledby="navbarDropdownMenuLink">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="dropdown-header mb-2">Real Estate</h6>
                                    <a class="dropdown-item" href="real_estate.php">Houses</a>
                                    <a class="dropdown-item" href="real_estate.php">Apartments</a>
                                    <a class="dropdown-item" href="real_estate.php">Condos</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header mb-2">Property Management</h6>
                                    <a class="dropdown-item" href="property_management.php">HOA</a>
                                    <a class="dropdown-item" href="property_management.php">Commercial Management</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header mb-2">Storage Units</h6>
                                    <a class="dropdown-item" href="storage_units.php">Rental & Management</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item <?= ($currentPage == 'blog') ? 'active' : ''; ?>"><a href=" blog.php" class="nav-link">Stories</a></li>
                <li class="nav-item <?= ($currentPage == 'contact') ? 'active' : ''; ?>"><a href=" contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item cta <?= ($currentPage == 'reservation') ? 'active' : ''; ?>""><a href=" reservation.php" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>