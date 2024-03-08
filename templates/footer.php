<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Erepros</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Open Hours</h2>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Instagram</h2>
                    <div class="thumb d-sm-flex">
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig1.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig2.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig3.jpg);">
                        </a>
                    </div>
                    <div class="thumb d-flex">
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig4.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig5.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(../images/ereprosAssets/ig6.jpg);">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is made by <a href="https://TsuseTech.com" target="_blank">TsuseTech</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>

<!-- pagination -->
<script>
    var currentPage = 1;
    var totalPages = 5; // Update this value based on the total number of pages

    function goToPage(page) {
        // Validate page number
        if (page < 1 || page > totalPages) {
            return;
        }
        currentPage = page;
        updatePagination();
        // Add code to load content for the new page
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
            // Add code to load content for the previous page
        }
    }

    function nextPage() {
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
            // Add code to load content for the next page
        }
    }

    function updatePagination() {
        var paginationList = document.getElementById("pagination").getElementsByTagName("li");
        for (var i = 1; i < paginationList.length - 1; i++) {
            paginationList[i].classList.remove("active");
        }
        paginationList[currentPage].classList.add("active");
        // Enable or disable previous page link
        paginationList[0].getElementsByTagName("a")[0].disabled = (currentPage === 1);
    }
</script>

</body>

</html>