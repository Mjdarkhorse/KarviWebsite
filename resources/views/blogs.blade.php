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
                        <h1>Blogs</h1>
                        <p class="mb-0 bread"><a href="{{route('index')}}" class="my-primary-color">Home</a> / Blogs</p>
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
                    <h3 class="sub-title mb-2 my-primary-color">Blogs</h3>
                    <h2 class="title">Our Latest Blogs</h2>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                @foreach($blog as $blogs)
                <div class="col-lg-4 col-md-6">
                    <div class="card p-3 border-0 my-shadow">
                        <img src="{{ asset('Blogdetails/' . $blogs->image) }}" class="card-img-top" alt="...">
                        <div class="card-body p-0 pt-3">
                            <div class="d-flex justify-content-between dets mb-2">
                                <p class="d-flex align-items-center mb-0">
                                    <i class="fa-solid fa-pencil pe-2"></i>Admin
                                </p>
                                <p class="d-flex align-items-center mb-0">
                                    <i class="fa-regular fa-calendar-check pe-2"></i>{{ date('F d, Y', strtotime($blogs->publish_date)) }}
                                </p>
                            </div>
                            <div class="pt-2 text-center">
                                <h4 class="card-title fw-medium">{{$blogs->blog_title}}</h4>
                                <p>{!!$blogs->description!!}</p>
                                <a href="{{route('blog-details',['slug_name' => $blogs->slug_name,'id'=> $blogs->package_details_id]) }}" class="btn1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="btn2 mt-5">Load More</a>
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