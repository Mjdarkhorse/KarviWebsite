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
    <nav class="navbar navbar-expand-lg py-2">

    </nav>
    <!-- Navbar section end  -->

    <!-- About section -->
    <section class="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>Contact</h1>
                        <p class="mb-0 bread"><a href="index.html" class="my-primary-color">Home</a> / Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->


    <!-- Contact section -->
    <section class="contact-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title">
                        <span>Contact Us</span>
                    </h2>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="inner-contain">
                        <h3 class="mb-4 fw-semibold">Get In Touch With Us</h3>
                        <form action="">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <input type="text" id="committeeName" class="form-control shadow-none"
                                            placeholder="" autocomplete="off">
                                        <label for="committeeName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <input type="text" id="committeeName" class="form-control shadow-none"
                                            placeholder="" autocomplete="off">
                                        <label for="committeeName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <input type="text" id="committeeName" class="form-control shadow-none"
                                            placeholder="" autocomplete="off">
                                        <label for="committeeName">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-container">
                                        <input type="text" id="committeeName" class="form-control shadow-none"
                                            placeholder="" autocomplete="off">
                                        <label for="committeeName">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-container my-text">
                                        <textarea name="" id="" class="form-control  shadow-none"
                                            placeholder=""></textarea>
                                        <label for="committeeTheme">Committee's Theme</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn1">Submit Your Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="info-contain border rounded">
                        <div class="row">
                            <div class="col-auto">
                                <div class="icon-con">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                            </div>
                            <div class="col">
                                <small class="d-block text-primary fs-6 mb-2">Address</small>
                                <h6 class="mb-0">Shastri Nagar, Near Radha Krishna Complex, Opp. Holy Angels School, Ward No.: 41, P.S. Bhakti Nagar, Sevok Road, Dist. Jalpaiguri, Siliguri 734001.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="info-contain border rounded my-4">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-con">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="col">
                                <small class="d-block text-primary fs-6 mb-2">Phone Number</small>
                                <h6 class="mb-0"><a href="tel:9635969984">+91 96359 69984</a></h6>
                                <h6 class="mb-0"><a href="tel:9635240625">+91 96352 40625</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="info-contain border rounded">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="icon-con">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col">
                                <small class="d-block text-primary fs-6 mb-2">Email Address</small>
                                <h6 class="mb-0">
                                    <a href="mailto:wanderlustkarvi@gmail.com">wanderlustkarvi@gmail.com</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COntact section end -->

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7373.340384625958!2d88.35603494490998!3d22.47902478191498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0270fb5636f039%3A0xa4c7782afb8b88c9!2sNetaji%20Nagar%2C%20Kolkata%2C%20West%20Bengal%2C%20India!5e0!3m2!1sen!2snp!4v1724995173241!5m2!1sen!2snp" width="100%" height="400" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

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