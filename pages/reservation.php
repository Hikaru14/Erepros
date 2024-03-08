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

  <?php
  $currentPage = 'reservation';
  include '../templates/navbar.php';
  ?>

  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/ereprosAssets/header.jpg')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Book a Table</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Reservation <i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
      <div class="row d-flex no-gutters">
        <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          <div class="py-md-5">
            <div class="heading-section ftco-animate mb-5">
              <span class="subheading">Book a table</span>
              <h2 class="mb-4">Make Reservation</h2>
            </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon">
                        <span class="ion-ios-arrow-down"></span>
                      </div>
                      <select name="" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../templates/footer.php' ?>