<!DOCTYPE html>
<html lang="en">

<head>
    @include('includeFrontend/head')
</head>

<body>

    <!-- Header section -->
    @include('includeFrontend/header')
    <!-- Header section end -->

    <!-- Navbar section -->

    <!-- Navbar section end  -->

    <!-- About section -->
    <section class="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>Destination Tour</h1>
                        <p class="mb-0 bread"><a href="index.html" class="my-primary-color">Home</a> / Destination Tour</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <section class="trending offbeat py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="sub-title mb-2 my-primary-color">Destination Tour</h3>
                    <h2 class="title">Trending Places</h2>
                </div>
            </div>
            <div class="row g-md-4 g-3">
                <div class="col-lg-6">
                    <a href="bhutan.html" class="inner-contain d-block">
                        <img src="assets/images/destination/bhutan.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Bhutan</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="sikkim.html" class="inner-contain d-block">
                        <img src="assets/images/destination/sikkim.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Sikkim</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="darjeeling.html" class="inner-contain d-block">
                        <img src="assets/images/destination/darjeeling.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Darjeeling</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="dooars.html" class="inner-contain d-block">
                        <img src="assets/images/destination/dooars.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Dooars</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Places section -->
    <section class="place py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="sub-title my-primary-color">Travel Packages</h3>
                    <h2 class="title pb-3">Ultimate Travel Experience</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="package-slider">
                        <div class="m-3 mb-4">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="assets/images/trending-places/darjeeling.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>Alipurduar
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>2 Nights / 3 Days
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">Dooars Jaldapara Gorumara</h4>
                                        <a href="javascript:void(0);" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 mb-4">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="assets/images/trending-places/jhargram.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>Bhutan
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>2 days / 3 nights
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">Amazing Bhutan with Chele La Excursion</h4>
                                        <a href="javascript:void(0);" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 mb-4">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="assets/images/trending-places/digha.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>Derjeeling
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>2 days / 3 nights
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">Darjeeling Pelling Tour Plan</h4>
                                        <a href="javascript:void(0);" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 mb-4">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="assets/images/trending-places/gangtok.jpg" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>Sikkim
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>2 days / 3 nights
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">East Sikkim Tour(Silk Route)</h4>
                                        <a href="javascript:void(0);" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Places section end -->

    <!-- Footer section -->
    @include('includeFrontend/footer')
    <!-- Footer section end -->

    <!-- Modal Enquire -->
    <div class="modal getquoteModal fade" id="enquire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row my-0 px-0">
                        <div class="col-md-6 d-none d-lg-block pe-0">
                            <img src="assets/images/modal-img.jpg" class="img-fluid modal-img" alt="">
                        </div>
                        <div class="col-md-6 ps-lg-0">
                            <div class="inner-contain p-4">
                                <h4 class="fw-semibold text-center mb-3">Get In Touch</h4>
                                <form action="" method="post" class="mt-3">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" name="" id="" placeholder="Full Name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" name="" id="" placeholder="Email Address"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <!--<select name="" id="" class="form-select me-3">-->
                                                <!--    <option value="India" selected>IND (+91)</option>-->
                                                <!--</select>-->
                                                <input type="text" name="" id="" placeholder="Phone Number"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea style="resize: none;" name="" id="" cols="5" rows="3"
                                                    class="form-control" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn1 ">Submit <i
                                                    class="fa-regular fa-paper-plane ps-1"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- <script src="assets/js/jquery.fancybox.min.js"></script> -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>