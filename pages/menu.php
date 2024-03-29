<?php include '../templates/header.php' ?>

<body>
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center">
                <span class="icon-phone2"></span>
              </div>
              <span class="text">+ 1235 2355 98</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center">
                <span class="icon-paper-plane"></span>
              </div>
              <span class="text">youremail@email.com</span>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
              <p class="mb-0 register-link">
                <span>Open hours:</span> <span>Monday - Sunday</span>
                <span>8:00AM - 9:00PM</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
          <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu mega-menu dropdown-menu-dark p-2" style="margin-top: -5%; margin-left: -40%;" aria-labelledby="navbarDropdownMenuLink">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h6 class="dropdown-header mb-2">Real Estate</h6>
                    <a class="dropdown-item" href="real_estate.php">Houses</a>
                    <a class="dropdown-item" href="real_estate.php">Apartments</a>
                    <a class="dropdown-item" href="real_estate.php">Condos</a>
                  </div>
                  <div class="col-md-4" style="margin-left: -5%; margin-right:5%;">
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
          <li class="nav-item"><a href="blog.php" class="nav-link">Stories</a></li>
          <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/ereprosAssets/header.jpg')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Specialties</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Menu <i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="ftco-search">
        <div class="row">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">All</a>

              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">House</a>

              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Apartment</a>

              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Storage</a>

              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>

              <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Wine</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="
                            background-image: url(../images/ereprosAssets/apart1.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="
                            background-image: url(../images/ereprosAssets/apart2.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="
                            background-image: url(../images/ereprosAssets/apart3.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="
                            background-image: url(../images/ereprosAssets/apart4.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="
                            background-image: url(../images/ereprosAssets/apart5.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="
                            background-image: url(../images/ereprosAssets/apart6.jpg);
                          "></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/breakfast-7.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/breakfast-8.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/lunch-1.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/lunch-2.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/lunch-3.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/lunch-4.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/lunch-5.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/lunch-6.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/lunch-7.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/lunch-8.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dinner-1.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dinner-2.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/dinner-3.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/dinner-4.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dinner-5.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dinner-6.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/drink-1.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/drink-2.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/drink-3.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/drink-4.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/drink-5.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/drink-6.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dessert-1.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dessert-2.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/dessert-3.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/dessert-4.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/dessert-5.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/drink-6.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                <div class="row no-gutters d-flex align-items-stretch">
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/wine-1.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/wine-2.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/wine-3.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/wine-4.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/wine-5.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img" style="background-image: url(../images/wine-6.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/wine-7.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                      <div class="menu-img img order-md-last" style="background-image: url(../images/wine-8.jpg)"></div>
                      <div class="text d-flex align-items-center">
                        <div>
                          <div class="d-flex">
                            <div class="one-half">
                              <h3>Grilled Beef with potatoes</h3>
                            </div>
                            <div class="one-forth">
                              <span class="price">$29</span>
                            </div>
                          </div>
                          <p>
                            <span>Meat</span>, <span>Potatoes</span>,
                            <span>Rice</span>, <span>Tomatoe</span>
                          </p>
                          <p>
                            <a href="#" class="btn btn-primary">Order now</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../templates/footer.php' ?>