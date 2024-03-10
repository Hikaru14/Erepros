<?php include '../templates/header.php' ?>

<body>
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <span class="text">+ 1235 2355 98</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <span class="text">youremail@email.com</span>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
              <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <img src="images/ereprosAssets/EreprosLogo.png" alt="" class="img-fluid" style="max-height: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Stories</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="reservation.php" class="nav-link">Book a table</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url(../images/ereprosAssets/header.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">About</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12 pt-5">
        <div class="ftco-animate">
          <div class="heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Founder</h2>
          </div>
          <p class="text-center">After living in Japan, founder Danny Taing fell in love with the delicious local snacks he had discovered.</p>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section ftco-wrap-about" style="">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-5 d-flex">
          <!-- <div class="img img-1 mr-md-2" style="background-image: url(../images/ereprosAssets/4.jpg);"></div> -->
          <div class="img img-1 mr-md-2">

            <!-- CHANGE IMAGE SIZE HERE (PLACEHOLDER) -->
            <img src="../images/person_2.jpg" width="100%" height="100%" alt="">

          </div>
        </div>
        <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
          <div class="heading-section mb-4 my-5 my-md-0">
            <span class="subheading">About</span>
            <h2 class="mb-4">Feliciano Restaurant</h2>
          </div>
          <p>We are committed to helping you buy or sell your home, have the highest level of local market expertise, and always make sure you get the best possible deal. Whether you're buying your first home or have been investing in the market for years, we make it easy and set you up for success.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-wrap-about" style="">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
          <div class="heading-section mb-4 my-5 my-md-0">
            <span class="subheading">About</span>
            <h2 class="mb-4">Feliciano Restaurant</h2>
          </div>
          <p>Since 2016 Bokksu has grown from Danny packing boxes himself in his living room to a fast-growing company offering much more than a monthly subscription box.</p>
        </div>
        <div class="col-md-5 d-flex">
          <div class="img img-1 mr-md-2">

            <!-- CHANGE IMAGE SIZE HERE (PLACEHOLDER) -->
            <img src="../images/person_1.jpg" width="100%" height="100%" alt="">

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../templates/footer.php' ?>