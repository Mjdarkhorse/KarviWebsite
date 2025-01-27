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
                        <h1>{{$cityName}}</h1>
                        <p class="mb-0 bread"><a href="{{route('index')}}" class="my-primary-color">Home</a> / {{$cityName}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->




    <!-- Places section -->
    <section class="place py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="sub-title mb-2 my-primary-color">{{$cityName}} Travel Packages</h3>
                    <h2 class="title">Ultimate Travel Experience</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center g-4">
                        @foreach($packages_tour as $packages_tours)
                        <div class="col-md-6">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="{{ asset('PackageImage/' . $packages_tours->image1) }}" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>{{$packages_tours->location}}
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>{{$packages_tours->days}}/Days
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">{{$packages_tours->title}}</h4>
                                        <a href="{{route('packages_tour_details',['slug_name' => $packages_tours->slug_name, 'id' => $packages_tours->package_details_id ]) }}" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn2 mt-5">View more</a>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-5 stick-form">
                    <div class="form-contain">
                        <h5>Need Career Counselling Service?</h5>
                        <form action="">
                            <div class="row g-2">
                                <div class="col-12">
                                    <input type="text" class="form-control shadow-none" placeholder="Full Name">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control shadow-none" placeholder="Phone Number">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control shadow-none" placeholder="Email Address">
                                </div>
                                <div class="col-6">
                                    <small>Arrival Date</small>
                                    <input type="date" name="" id="" class="form-control shadow-none">
                                </div>
                                <div class="col-6">
                                    <small>Depature Date</small>
                                    <input type="date" name="" id="" class="form-control shadow-none">
                                </div>
                                <div class="col-6">
                                    <small>No of Adult</small>
                                    <input type="text" name="" id="" class="form-control shadow-none">
                                </div>
                                <div class="col-6">
                                    <small>No of Child</small>
                                    <input type="text" name="" id="" class="form-control shadow-none">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control shadow-none" placeholder="Your State">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control shadow-none" placeholder="Your City">
                                </div>
                                <div class="col-12 d-none">
                                    <div id="otp" class="ms-5 d-none">
                                        <div class="opt-area d-none align-items-center otp-input-fields ">
                                            <input type="number" id="txt_otp1" class="otp__digit otp__field__1 mx-1">
                                            <input type="number" id="txt_otp2" class="otp__digit otp__field__2 mx-1">
                                            <input type="number" id="txt_otp3" class="otp__digit otp__field__3 mx-1">
                                            <input type="number" id="txt_otp4" class="otp__digit otp__field__4 mx-1">
                                        </div>
                                        <div>
                                            <a href="" class="btn2 ms-3">Verify OTP</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn1 mt-2">Submit Your Query</button>
                                </div>
                            </div>
                        </form>
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