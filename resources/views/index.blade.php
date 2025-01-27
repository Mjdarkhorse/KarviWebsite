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

    <!-- Banner section -->
    <div class="banner-slider">
        <section class="banner"
            style="background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), transparent), url('assets/images/banner/banner-1.jpg') no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3 class="sub-title">Come With Us</h3>
                        <h1 class="mb-2">Discover boundless adventures with our <span>travel expertise.</span></h1>
                        <p class="fw-light text-light mb-4">Experience unforgettable journeys with our curated travel
                            packages, expert guides, and seamless booking. Your adventure
                            awaits with us!
                        </p>
                        <div class="d-flex">
                            <a href="javascript:void(0);" data-bs-target="#enquire" data-bs-toggle="modal" class="btn1">Book your trip</a>
                            <a href="package.html" class="btn2 ms-3">View packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner"
            style="background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6), transparent), url('assets/images/banner/banner-2.jpg') no-repeat;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3 class="sub-title">Come With Us</h3>
                        <h1 class="mb-2">Discover boundless adventures with our <span>travel expertise.</span></h1>
                        <p class="fw-light text-light mb-4">Experience unforgettable journeys with our curated travel
                            packages, expert guides, and seamless booking. Your adventure
                            awaits with us!
                        </p>
                        <div class="d-flex">
                            <a href="javascript:void(0);" data-bs-target="#enquire" data-bs-toggle="modal" class="btn1">Book your trip</a>
                            <a href="package.html" class="btn2 ms-3">View packages</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Banner section end -->

    <!-- Enquiry area -->
    <section class="enquiry-area">
        <div class="container ">
            <div class="booking-area rounded-3">
                <h4 class="d-lg-none mb-4 fw-semibold my-primary-color">Enquiry Form</h4>
                <form class="row g-sm-3 g-2">
                    <div class="col-lg col-md-6 mb-3 mb-lg-0">
                        <input type="text" class="form-control shadow-none" placeholder="Your name">
                    </div>
                    <div class="col-lg col-md-6 mb-3 mb-lg-0">
                        <input type="text" class="form-control shadow-none" placeholder="Phone number">
                    </div>
                    <div class="col-lg col-md-6 mb-3 mb-lg-0">
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg col-md-6 mb-3 mb-lg-0">
                        <select class="form-select shadow-none">
                            <option selected>Destination</option>
                            <option value="1">Bhutan</option>
                            <option value="2">Sikkim</option>
                            <option value="3">Darjeeling</option>
                            <option value="4">Dooars</option>
                        </select>
                    </div>
                    <div class="col-lg col-md-6 mb-3 mb-lg-0">
                        <select class="form-select shadow-none">
                            <option selected="">Guest</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-3 mb-lg-0 text-center">
                        <button type="submit" class="btn1 d-flex align-items-center justify-content-center shadow-none">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Enquiry area end-->

    <!-- Trending places -->
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
                    <a href="{{ route('city', ['id' => encrypt(1)]) }}" class="inner-contain d-block">
                        <img src="assets/images/destination/bhutan.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Bhutan</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('city', ['id' => encrypt(2)]) }}" class="inner-contain d-block">
                        <img src="assets/images/destination/sikkim.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Sikkim</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('city', ['id' => encrypt(3)]) }}" class="inner-contain d-block">
                        <img src="assets/images/destination/darjeeling.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Darjeeling</h5>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('city', ['id' => encrypt(4)]) }}" class="inner-contain d-block">
                        <img src="assets/images/destination/dooars.jpg" class="img-fluid" alt="">
                        <h5 class="mb-0">Dooars</h5>
                    </a>
                </div>
            </div>
    </section>
    <!-- Trending places end -->

    <!-- About us section -->
    <section class="about py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between reverse">
                <div class="col-lg-6">
                    <h3 class="sub-title mb-2 my-primary-color">About Us</h3>
                    <h2 class="fw-semibold">WELCOME TO <span class="my-primary-color">Karvi Wanderlust TRAVELS</span>
                    </h2>
                    <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu.
                        Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.
                    </p>
                    <p>Change the visual order of specific flex items with a handful of order utilities. We only provide
                        options for making an item first or last, as well as a reset to use the DOM order. As order
                        takes any integer value (e.g., 5), add custom CSS for any additional values needed.</p>
                    <p>Change the visual order of specific flex items with a handful of order utilities. We only provide
                        options for making an item first or last, as well as a reset to use the DOM order. As order
                        takes any integer value (e.g., 5), add custom CSS for any additional values needed.</p>
                    <p class="mb-0">Change the visual order of specific flex items with a handful of order utilities. We only provide
                        options for making an item first or last, as well as a reset to use the DOM order. As order
                        takes any integer value (e.g., 5), add custom CSS for any additional values needed.</p>

                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <img src="assets/images/about-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end -->

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
                        @foreach($packages_tour as $tour)
                        <div class="m-3 mb-4">
                            <div class="card p-3 border-0 my-shadow">
                                <img src="{{ asset('PackageImage/' . $tour->image1) }}" class="card-img-top" alt="...">
                                <div class="card-body p-0 pt-3">
                                    <div class="d-flex justify-content-between dets mb-2">
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-compass pe-2"></i>{{$tour->location}}
                                        </p>
                                        <p class="d-flex align-items-center mb-0">
                                            <i class="fa-regular fa-calendar-check pe-2"></i>{{$tour->days}}/Days
                                        </p>
                                    </div>
                                    <div class="pt-2 text-center">
                                        <h4 class="card-title fw-medium">{{$tour->title}}</h4>
                                        <a href="{{route('packages_tour_details',['slug_name' => $tour->slug_name, 'id' => $tour->package_details_id ]) }}" class="btn1">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Places section end -->

    <!-- Why us section -->
    <section class="py-5 why-us bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="sub-title my-primary-color">Why Us</h3>
                    <h2 class="title">Why Karvi Wanderlust Is Best</h2>
                </div>
            </div>
            <div class="row g-4 pt-2">
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 512 512"
                                        width="512" height="512">
                                        <path
                                            d="M495.958,88a8,8,0,0,0-3.806-6.812l-103.958-64a8.209,8.209,0,0,0-8.43,0L333.382,45.74A223.082,223.082,0,0,0,256,32C144.626,32,49.976,114.278,34.282,224H24a8,8,0,0,0-7.428,10.971l16,40a8,8,0,0,0,14.856,0l16-40A8,8,0,0,0,56,224H50.453C66,123.262,153.349,48,256,48a207.622,207.622,0,0,1,59.615,8.678L275.9,81.131A178.462,178.462,0,0,0,256,80C158.953,80,80,158.953,80,256s78.953,176,176,176,176-78.953,176-176a178.1,178.1,0,0,0-1.724-24.651c3.685-2.858,7.438-6,11.2-9.477C466.328,198.891,495.958,157.011,495.958,88ZM40,250.459,35.816,240h8.368Zm176-149.4A159.775,159.775,0,0,1,256,96c5.4,0,10.821.284,16.185.821,2.4,63.774,30.525,103.069,54.3,125.051a169.915,169.915,0,0,0,37.65,26.344l-2.209,2.578a8,8,0,0,0-1.081,8.784L366.556,271l-20.993,26.24-10.408-20.817a8,8,0,0,0-4.957-4.114L282.72,258.742l12.708-31.771a8,8,0,0,0-1.771-8.628L272,196.687V176a8,8,0,0,0-8-8H243.314l-10.161-10.161,6.436-19.309a8,8,0,0,0-5.059-10.12L216,122.234ZM256,416a159.167,159.167,0,0,1-95.718-31.865l15.41-53.938a8,8,0,0,0-2.035-7.854l-9.478-9.478L188.8,294.4a8,8,0,0,0,2.961-4.46l4.29-17.161,43.435,49.64-7.377,44.266a8,8,0,0,0,4.313,8.47l67.21,33.605A159.433,159.433,0,0,1,256,416Zm67.473-14.945.1-.21-74.716-37.358,7.029-42.172a8,8,0,0,0-1.87-6.583l-56-64a8,8,0,0,0-13.782,3.328L176.928,283.3,147.2,305.6a8,8,0,0,0-.857,12.057l12.672,12.671-12.158,42.551A159.582,159.582,0,0,1,96,256c0-68.532,43.314-127.129,104-149.878V128a8,8,0,0,0,5.47,7.59l16.411,5.47-5.47,16.41a8,8,0,0,0,1.932,8.187l16,16A8,8,0,0,0,240,184h16v16a8,8,0,0,0,2.343,5.657l20.27,20.27-14.041,35.1a8,8,0,0,0,5.23,10.663l52.616,15.034,14.427,28.852a8,8,0,0,0,13.4,1.419l32-40a8,8,0,0,0,.908-8.575l-5.624-11.249,1.9-2.222c1.162.415,1.878.642,2.042.692a7.993,7.993,0,0,0,2.359.357h.286a8,8,0,0,0,2.359-.357c.753-.231,12.9-4.065,28.881-13.941.42,4.749.638,9.527.638,14.3A160.2,160.2,0,0,1,323.473,401.055ZM431.131,209.641a149.3,149.3,0,0,1-47.163,29.932,147.983,147.983,0,0,1-46.62-29.449c-31.784-29.386-48.36-68.963-49.305-117.683l95.936-59.062,95.936,59.062C478.976,140.884,462.575,180.294,431.131,209.641Z" />
                                        <path
                                            d="M137.9,446.37A223.46,223.46,0,0,0,256,480c111.429,0,206.025-82.257,221.719-192H488a8,8,0,0,0,7.428-10.971l-16-40a8,8,0,0,0-14.856,0l-16,40A8,8,0,0,0,456,288h5.544C446,388.758,358.7,464,256,464A207.987,207.987,0,0,1,71.106,351.379a8,8,0,1,0-14.212,7.348A224.824,224.824,0,0,0,137.9,446.37ZM472,261.541,476.184,272h-8.368Z" />
                                        <path
                                            d="M459.42,98.525c-17.235-10.615-45.992-28.28-71.251-43.782a8,8,0,0,0-8.379.006L308.584,98.586a8,8,0,0,0-3.772,7.546c3.384,36.778,17.323,67.19,41.43,90.39a138.234,138.234,0,0,0,34.064,23.986,8.005,8.005,0,0,0,7.087.006,138.681,138.681,0,0,0,34.222-24.008c24.2-23.21,38.19-53.637,41.576-90.436A8,8,0,0,0,459.42,98.525Zm-48.879,86.433a122.764,122.764,0,0,1-26.678,19.378,122.249,122.249,0,0,1-26.526-19.343c-20.192-19.432-32.313-44.789-36.067-75.428l62.72-38.613c22.16,13.6,46.325,28.446,62.743,38.551C442.973,140.151,430.811,165.519,410.541,184.958Z" />
                                        <path
                                            d="M365.657,138.343a8,8,0,0,0-11.314,11.314l16,16a8,8,0,0,0,11.314,0l40-40a8,8,0,0,0-11.314-11.314L376,148.687Z" />
                                    </svg>

                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Worldwide Coverage</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain inner-diff">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">
                                    <svg height="512" viewBox="0 0 64 64" width="512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="success-hand-arrow_up-business-finance"
                                            data-name="success-hand-arrow up-business-finance">
                                            <path
                                                d="m59 34h-4a3.01 3.01 0 0 0 -2.82 2h-5.18a3.009 3.009 0 0 1 -3-3v-8a5 5 0 0 0 -10 0v11h-10a3.985 3.985 0 0 0 -2.62 7 3.951 3.951 0 0 0 0 6 3.985 3.985 0 0 0 2.62 7h.56a3.906 3.906 0 0 0 -.56 2 4 4 0 0 0 4 4h11a.66.66 0 0 0 .14-.01l13.08-1.87a3.006 3.006 0 0 0 2.78 1.88h4a3.009 3.009 0 0 0 3-3v-22a3.009 3.009 0 0 0 -3-3zm-7 24.13-13.07 1.87h-10.93a2 2 0 0 1 0-4h7v-2h-11a2 2 0 0 1 0-4h11v-2h-11a2 2 0 0 1 0-4h11v-2h-11a2 2 0 0 1 0-4h11a1 1 0 0 0 1-1v-12a3 3 0 0 1 6 0v8a5 5 0 0 0 5 5h5zm8 .87a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1z" />
                                            <path
                                                d="m61.8 10.4-6-8a1.041 1.041 0 0 0 -1.6 0l-6 8a1 1 0 0 0 .8 1.6h2v17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-17h2a1 1 0 0 0 .8-1.6zm-3.8-.4a1 1 0 0 0 -1 1v17h-4v-17a1 1 0 0 0 -1-1h-1l4-5.33 4 5.33z" />
                                            <path
                                                d="m17 2a15 15 0 1 0 15 15 15.018 15.018 0 0 0 -15-15zm0 28a13 13 0 1 1 13-13 13.012 13.012 0 0 1 -13 13z" />
                                            <path
                                                d="m22 21a5.017 5.017 0 0 1 -4 4.9v1.1a1 1 0 0 1 -2 0v-1.1a5.017 5.017 0 0 1 -4-4.9 1 1 0 0 1 2 0 3 3 0 1 0 3-3 5 5 0 0 1 -1-9.9v-1.1a1 1 0 0 1 2 0v1.1a5.017 5.017 0 0 1 4 4.9 1 1 0 0 1 -2 0 3 3 0 1 0 -3 3 5 5 0 0 1 5 5z" />
                                            <path d="m2 38h4v2h-4z" />
                                            <path d="m8 38h8v2h-8z" />
                                            <path d="m2 44h4v2h-4z" />
                                            <path d="m8 44h8v2h-8z" />
                                            <path d="m2 50h4v2h-4z" />
                                            <path d="m8 50h8v2h-8z" />
                                            <path d="m2 56h4v2h-4z" />
                                            <path d="m8 56h8v2h-8z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Competitive Pricing</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">
                                    <svg id="Line" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m22.15625 39.02441c-1.11469.28294-.88169 1.98369.25787 1.96629.11086.04678 1.79505-.46439 1.94721-.48677.01953-.00443.03906-.0098.05859-.01566l4.94434-1.32471c.28223-.0752.5166-.27051.64258-.53369l4.52344-9.43945 10.43066-2.79492c.5332-.14307.84961-.69092.70703-1.22461-.56055-2.09326-1.90234-3.84277-3.77832-4.92578s-4.06152-1.37109-6.15527-.80957l-18.37305 4.92236s-2.80762-2.46729-2.80762-2.46729c-.25098-.22119-.59766-.30127-.91895-.21484l-2.86133.76709c-.5332.14307-.84961.69092-.70703 1.22461l1.5332 5.72412c.81934 3.05713 3.96875 4.87598 7.03125 4.05908l6.05762-1.62305-1.41113 6.89648-1.12109.30029zm-4.04297-7.50537c-1.98926.53418-4.04785-.65137-4.58203-2.64502l-1.27441-4.7583 1.37891-.36963 2.80762 2.46729c.25.22021.59473.30029.91895.21484l18.88965-5.06104c2.80268-.80784 5.9957.71239 7.14744 3.37651.00002-.00005-9.83104 2.63423-9.83104 2.63423-.28223.07568-.5166.27051-.64258.53369l-4.52344 9.43945-2.96582.79443 1.53516-7.50195c.16629-.70192-.55049-1.37458-1.2383-1.16648.00002-.00002-7.6201 2.04197-7.6201 2.04197z" />
                                        <path
                                            d="m7 51s25.12988 0 25.12988 0c.55273 0 1-.44775 1-1s-.44727-1-1-1h-25.12988c-.55176 0-1-.44873-1-1v-41c0-.55127.44824-1 1-1h44c.55176 0 1 .44873 1 1v4.99951h-14.58594l-1.70703-1.70654c-.1875-.18701-.44238-.29248-.70703-.29248h-25c-1.3029.02378-1.32536 1.97346.00005 2-.00005 0 24.58589 0 24.58589 0l1.70703 1.70654c.1875.18701.44238.29248.70703.29248h15s0 18.80029 0 18.80029c.00791 1.30242 1.98431 1.32101 1.99999-.00005.00001.00005.00001-25.79975.00001-25.79975 0-1.6543-1.3457-3-3-3h-44c-1.6543 0-3 1.3457-3 3v41c0 1.6543 1.3457 3 3 3z" />
                                        <path
                                            d="m41.5 8.99969c-.02229-1.31443-1.9779-1.31424-2 .00004.02232 1.31438 1.97786 1.31419 2-.00004z" />
                                        <path
                                            d="m45.5 8.99969c-.02229-1.31443-1.9779-1.31424-2 .00004.02232 1.31438 1.97786 1.31419 2-.00004z" />
                                        <path
                                            d="m49.5 8.99969c-.02229-1.31443-1.9779-1.31424-2 .00004.02232 1.31438 1.97786 1.31419 2-.00004z" />
                                        <path
                                            d="m36 48c0 6.6167 5.38281 12 12 12 15.91966-.65896 15.91502-23.34347-.00009-24.00002-6.6171.00002-11.99991 5.38332-11.99991 12.00002zm22 0c0 5.51416-4.48633 10-10 10-13.26635-.54948-13.26248-19.45254.00008-20.00002 5.5136.00002 9.99992 4.48586 9.99992 10.00002z" />
                                        <path
                                            d="m47 42v5h-3c-.55273 0-1 .44775-1 1s.44727 1 1 1h4c.55273 0 1-.44775 1-1v-6c-.02194-1.31241-1.97756-1.31617-2 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Fast Booking</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain inner-diff">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">
                                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                        viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m485.151 196.355-80.874-36.103v-3.616c0-11.748-9.558-21.305-21.306-21.305-11.747 0-21.305 9.558-21.305 21.305v182.74c-12.911-16.48-32.973-27.101-55.481-27.101h-77.53v-33.452h1.788c35.314 0 64.044-28.73 64.044-64.044v-15.812h17.948c13.106 0 23.77-10.663 23.77-23.77v-16.096c0-10.486-6.828-19.402-16.27-22.551v-51.527c.001-46.882-38.141-85.023-85.023-85.023h-79.14c-46.882 0-85.023 38.141-85.023 85.023v51.528c-9.441 3.149-16.27 12.064-16.27 22.551v16.096c0 13.107 10.663 23.77 23.77 23.77h17.956v15.812c0 35.314 28.726 64.044 64.034 64.044h1.791v33.452h-42.423c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h19.101l6.045 49.705c.758 6.235 4.857 11.542 10.7 13.849 2.037.805 4.169 1.198 6.286 1.198 3.953 0 7.854-1.372 10.989-4l15.114-12.67v42.562c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-42.562l15.113 12.669c3.135 2.628 7.036 4 10.989 4 2.116 0 4.248-.394 6.286-1.198 5.842-2.307 9.942-7.613 10.701-13.849l6.044-49.705h54.209c30.588 0 55.474 24.89 55.474 55.484v44.637h-60.048v-24.272c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5l-.003 101.376c0 4.142 3.357 7.5 7.5 7.5h.001s.001 0 .001 0c4.143 0 7.5-3.358 7.5-7.5v-62.104h60.052v62.104c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-46.089c1.995.62 4.114.955 6.31.955 11.748 0 21.306-9.558 21.306-21.306v-135.665c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v135.665c0 3.477-2.829 6.306-6.306 6.306s-6.305-2.829-6.305-6.306v-281.424c0-3.477 2.828-6.305 6.305-6.305s6.306 2.829 6.306 6.305v110.231c-.071 4.383 4.879 9.42 10.537 6.857l85.279-37.771c7.94-3.517 12.881-11.097 12.894-19.782.012-8.683-4.906-16.276-12.836-19.816zm-358.238-85.823c-.006-.002-.012-.003-.018-.005-5.197-1.508-10.23-3.591-14.987-6.223l-10.672-7.793h188.212l-10.673 7.794c-10.79 5.97-22.996 9.124-35.332 9.124h-96.202c-6.891-.001-13.742-.987-20.328-2.897zm-26.712 24.799h-14.452v-31.557c6.952 4.811 18.003 14.231 26.354 17.323zm186.298-18.158c.635-.288 17.417-12.708 18.437-13.398v31.557h-14.444l-11.904-14.236c2.696-1.174 5.338-2.479 7.911-3.923zm34.706 58.024c0 4.836-3.934 8.77-8.77 8.77h-17.948v-33.636h17.948c4.836 0 8.77 3.934 8.77 8.77zm-165.433-160.197h79.14c37.433 0 68.1 29.526 69.937 66.511h-219.013c1.837-36.985 32.504-66.511 69.936-66.511zm-59.571 168.967h-17.952c-4.836 0-8.77-3.934-8.77-8.77v-16.096c0-4.836 3.934-8.77 8.77-8.77h17.952zm15.004 30.812v-69.224l16.22-19.398c6.48 1.499 13.132 2.271 19.816 2.271h96.202c6.686 0 13.34-.773 19.822-2.273l16.219 19.396.003 69.228c0 27.043-22.001 49.044-49.044 49.044h-9.211c-.026 0-.051-.004-.077-.004h-51.625c-.026 0-.051.004-.077.004h-9.214c-27.037 0-49.034-22.001-49.034-49.044zm102.45 64.044v38.719l-18.312 28.029-18.312-28.029v-38.719zm-50.563 97.709c-.797.667-1.598.556-2.13.345-.532-.21-1.193-.677-1.318-1.707l-5.824-47.895h11.652l19.951 30.537zm67.95-1.363c-.125 1.03-.787 1.497-1.319 1.708-.531.21-1.333.322-2.13-.345l-22.33-18.719 19.951-30.538h11.652zm247.978-152.929-74.742 33.104v-78.664l74.76 33.373c3.671 1.639 3.951 5.083 3.95 6.099-.003 1.016-.293 4.459-3.968 6.088z" />
                                            <path
                                                d="m203.916 43.058h-14.999c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h14.999c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                            <path
                                                d="m195.343 186.847c4.143 0 7.5-3.358 7.5-7.5v-16.428c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v16.428c0 4.142 3.357 7.5 7.5 7.5z" />
                                            <path
                                                d="m177.017 212.955c5.122 4.278 11.631 6.635 18.326 6.635 6.681 0 13.187-2.354 18.318-6.628 3.183-2.651 3.614-7.38.963-10.563s-7.379-3.614-10.562-.963c-2.478 2.063-5.492 3.154-8.719 3.154-3.188 0-6.281-1.118-8.711-3.147-3.176-2.654-7.906-2.231-10.563.948-2.656 3.179-2.232 7.908.948 10.564z" />
                                            <path
                                                d="m96.577 395.624c-4.143 0-7.5 3.358-7.5 7.5v24.272h-60.064v-44.637c0-30.594 24.89-55.484 55.483-55.484 4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5c-38.864 0-70.483 31.619-70.483 70.484l.003 121.741c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-62.104h60.059v62.104c0 4.142 3.357 7.5 7.5 7.5h.001s.001 0 .001 0c4.143 0 7.5-3.358 7.5-7.5v-69.604-31.772c0-4.142-3.357-7.5-7.5-7.5z" />
                                            <path
                                                d="m256.562 444.366h-25.96c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h25.96c4.143 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Guided Tours</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain ">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">

                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496"
                                        style="enable-background:new 0 0 496 496;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M402.524,432l-18.52-55.568c-6.472-19.4-22.984-33.72-43.112-37.384l-53.464-9.728v-4.144
                                                c9.304-5.4,17.4-12.624,23.848-21.176h16.152c13.232,0,24-10.768,24-24v-96c0-57.344-46.656-104-104-104s-104,46.656-104,104v56
                                                c0,15.424,10.968,28.328,25.512,31.336c4.488,22.992,18.856,42.448,38.488,53.84v4.144l-53.472,9.728
                                                c-20.12,3.664-36.64,17.984-43.104,37.384l-3.2,9.608l-27.248-27.248c-3.12-3.12-3.12-8.2,0-11.32l31.6-31.592l-59.312-59.312
                                                L16.98,292.28c-10.576,10.576-16.4,24.64-16.4,39.6s5.824,29.016,16.4,39.592l108.12,108.12C135.676,490.168,149.74,496,164.7,496
                                                c14.96,0,29.016-5.832,39.344-16.168l38.968-35.704L230.86,432H402.524z M335.428,280c0,4.416-3.592,8-8,8H320.7
                                                c2.32-5.288,4.08-10.864,5.216-16.664c3.424-0.712,6.576-2.072,9.512-3.784V280z M327.428,253.776v-27.552
                                                c4.76,2.776,8,7.88,8,13.776S332.188,251,327.428,253.776z M167.428,253.776c-4.76-2.776-8-7.88-8-13.776s3.24-11,8-13.776
                                                V253.776z M167.428,200v9.136c-2.848,0.744-5.52,1.864-8,3.312V184c0-48.52,39.48-88,88-88s88,39.48,88,88v28.448
                                                c-2.48-1.448-5.152-2.576-8-3.312V200h-8c-23.656,0-45.896-9.216-62.632-25.944l-9.368-9.368l-9.368,9.368
                                                C221.324,190.784,199.084,200,175.428,200H167.428z M183.428,256v-40.304c24.024-1.808,46.424-11.72,64-28.432
                                                c17.576,16.712,39.976,26.632,64,28.432V256c0,11.664-3.184,22.576-8.656,32h-55.344v16h42.192c-11.28,9.928-26.024,16-42.192,16
                                                C212.14,320,183.428,291.288,183.428,256z M271.428,332.312v0.376l-24,24l-24-24v-0.376c7.584,2.384,15.64,3.688,24,3.688
                                                S263.844,334.696,271.428,332.312z M126.02,381.488c4.616-13.856,16.416-24.088,30.792-26.712l55.92-10.16l34.696,34.696
                                                l34.688-34.688l55.912,10.16c14.376,2.624,26.176,12.848,30.792,26.712L380.332,416H214.86l-31.16-31.16l-34.624,31.32
                                                c-3.016,3.032-8.288,3.032-11.312,0l-17.472-17.472L126.02,381.488z M52.684,279.192l36.688,36.688l-8.688,8.688L43.996,287.88
                                                L52.684,279.192z M192.964,468.296c-7.552,7.536-17.6,11.704-28.28,11.704c-10.68,0-20.728-4.168-28.288-11.72L28.276,360.168
                                                c-7.552-7.552-11.712-17.6-11.712-28.28c0-10.688,4.16-20.736,11.712-28.288l4.4-4.4l36.688,36.688l-0.288,0.288
                                                c-9.352,9.36-9.352,24.584,0,33.944l57.368,57.368c4.536,4.528,10.56,7.032,16.976,7.032s12.44-2.496,16.68-6.752l0.6-0.536
                                                l36.856,36.856L192.964,468.296z M209.364,453.256l-36.776-36.776l10.568-9.552l36.712,36.712L209.364,453.256z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M471.428,0h-112c-13.232,0-24,10.768-24,24v64c0,13.232,10.768,24,24,24h21.368l-8.272,48.248l77.2-48.248h21.704
                                                c13.232,0,24-10.768,24-24V24C495.428,10.768,484.66,0,471.428,0z M479.428,88c0,4.408-3.592,8-8,8h-26.296l-50.808,31.752
                                                L399.772,96h-40.344c-4.408,0-8-3.592-8-8V24c0-4.408,3.592-8,8-8h112c4.408,0,8,3.592,8,8V88z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="367.428" y="32" width="96" height="16" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="367.428" y="64" width="64" height="16" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="447.428" y="64" width="16" height="16" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M247.428,24C142.9,24,52.86,96.304,29.452,197.16l-15.16-25.272l-13.72,8.232l28.12,46.856l46.856-28.12l-8.232-13.72
                                                l-21.68,13.008C68.308,105.88,151.276,40,247.428,40c21.016,0,41.752,3.12,61.632,9.28L313.796,34
                                                C292.38,27.36,270.052,24,247.428,24z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M491.54,177.136l-46.856-28.12l-28.112,46.864l13.72,8.232l14-23.336c7.368,21.56,11.136,44.112,11.136,67.224
                                                c0,47.576-16.48,94.088-46.392,130.96l12.424,10.08c32.224-39.712 49.968-89.808 49.968-141.04
                                                c0-24.472-3.944-48.368-11.632-71.248l23.512,14.104L491.54,177.136z" />
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Best Support 24/7</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-contain inner-diff">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-3">
                                <div class="img-contain">
                                    <svg id="Capa_1" enable-background="new 0 0 512.003 512.003" height="512"
                                        viewBox="0 0 512.003 512.003" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m10.753 256.001c0 117.364 82.854 216.329 194.195 239.911 4.052.858 8.033-1.731 8.891-5.783s-1.73-8.033-5.783-8.892c-105.633-22.373-182.303-117.098-182.303-225.236 0-82.655 44.121-158.588 115.56-199.675l7.568 15.771c6.36 13.255 25.022 13.982 32.358 1.184l22.323-38.937c6.373-11.114-.383-25.187-13.037-27.169l-44.343-6.945c-14.566-2.277-25.672 12.747-19.32 25.985l7.943 16.552c-76.659 43.629-124.052 124.821-124.052 213.234zm132.533-240.997c.44 0 44.484 6.923 44.919 6.991 2.283.357 3.496 2.88 2.345 4.888l-22.324 38.937c-1.31 2.286-4.66 2.208-5.821-.213l-22.019-45.881c-1.109-2.311.69-4.722 2.9-4.722z" />
                                            <path
                                                d="m307.056 16.091c-4.047-.855-8.033 1.73-8.891 5.783-.858 4.052 1.73 8.033 5.783 8.892 105.633 22.373 182.302 117.098 182.302 225.236 0 82.654-44.121 158.587-115.559 199.675l-7.568-15.771c-6.367-13.264-25.042-13.948-32.358-1.185h-.001l-22.324 38.938c-6.37 11.113.384 25.187 13.039 27.168l44.341 6.944c14.567 2.279 25.676-12.746 19.321-25.984l-7.943-16.552c76.659-43.629 124.052-124.822 124.052-213.235 0-117.335-82.824-216.321-194.194-239.909zm61.085 480.862-44.342-6.944c-2.282-.357-3.497-2.881-2.346-4.888l22.324-38.938h-.001c1.317-2.296 4.666-2.2 5.823.212l22.018 45.882c1.151 2.397-.839 5.089-3.476 4.676z" />
                                            <path
                                                d="m256.002 145.168c-61.114 0-110.834 49.72-110.834 110.834s49.72 110.833 110.834 110.833c61.113 0 110.833-49.719 110.833-110.833s-49.72-110.834-110.833-110.834zm72.235 69.128c1.389 2.406 3.91 3.752 6.502 3.752 1.272 0 2.562-.324 3.743-1.006l4.001-2.31c4.968 10.368 8.126 21.762 9.06 33.77h-4.631c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h4.631c-.934 12.008-4.092 23.402-9.06 33.77l-4-2.31c-3.59-2.072-8.176-.842-10.245 2.746-2.071 3.587-.842 8.174 2.745 10.245l3.976 2.295c-6.661 9.665-15.046 18.05-24.711 24.711l-2.295-3.976c-2.07-3.588-6.659-4.816-10.245-2.745-3.587 2.071-4.816 6.658-2.745 10.245l2.31 4c-10.368 4.968-21.761 8.126-33.77 9.06v-4.63c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v4.63c-12.008-.934-23.402-4.092-33.77-9.06l2.309-4c2.071-3.587.842-8.174-2.745-10.245-3.589-2.072-8.175-.842-10.245 2.745l-2.295 3.976c-9.665-6.661-18.05-15.046-24.711-24.711l3.976-2.296c3.587-2.071 4.816-6.658 2.745-10.245-2.072-3.587-6.66-4.817-10.245-2.745l-4 2.31c-4.968-10.368-8.126-21.762-9.06-33.77h4.631c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-4.631c.934-12.008 4.092-23.402 9.06-33.77l4 2.31c1.182.682 2.471 1.006 3.743 1.006 2.592 0 5.113-1.346 6.502-3.751 2.071-3.587.842-8.174-2.745-10.245l-3.976-2.296c6.661-9.665 15.046-18.05 24.711-24.711l2.295 3.976c1.389 2.406 3.91 3.752 6.502 3.752 1.272 0 2.562-.324 3.743-1.006 3.587-2.071 4.816-6.658 2.745-10.245l-2.31-4.001c10.368-4.968 21.762-8.126 33.771-9.06v4.63c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-4.63c12.008.934 23.402 4.092 33.77 9.06l-2.31 4.001c-2.071 3.587-.842 8.174 2.745 10.245 1.182.682 2.471 1.006 3.743 1.006 2.592 0 5.113-1.346 6.502-3.752l2.295-3.976c9.665 6.661 18.051 15.047 24.711 24.711l-3.977 2.296c-3.586 2.07-4.816 6.657-2.745 10.244z" />
                                            <path
                                                d="m263.502 232.256v-38.916c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v38.916c-7.709 2.44-13.806 8.537-16.246 16.246h-24.566c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h24.565c3.19 10.077 12.627 17.402 23.746 17.402 13.73 0 24.901-11.171 24.901-24.902.001-11.118-7.324-20.556-17.4-23.746zm-7.5 33.647c-5.46 0-9.902-4.442-9.902-9.902s4.442-9.902 9.902-9.902 9.901 4.442 9.901 9.902c0 5.461-4.441 9.902-9.901 9.902z" />
                                            <path
                                                d="m365.46 398.919c-.976.975-2.561.974-3.534 0l-18.015-18.014c-5.475-5.475-14.061-6.674-20.877-2.917-8.935 4.921-18.42 8.854-28.19 11.689-7.468 2.166-12.683 9.082-12.683 16.819v25.463c0 1.378-1.121 2.499-2.5 2.499h-6.159c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h6.159c9.649 0 17.5-7.85 17.5-17.499v-25.463c0-1.121.748-2.09 1.861-2.414 10.833-3.143 21.346-7.502 31.25-12.957 1.018-.563 2.238-.407 3.031.386l18.015 18.014c6.822 6.822 17.925 6.823 24.749 0l33.459-33.458c6.822-6.823 6.822-17.925 0-24.748l-18.015-18.015c-.794-.793-.948-2.013-.386-3.034 5.454-9.903 9.813-20.416 12.957-31.248.323-1.114 1.293-1.862 2.413-1.862h25.462c9.649 0 17.5-7.85 17.5-17.5v-6.159c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v6.159c0 1.378-1.121 2.5-2.5 2.5h-25.462c-7.736 0-14.652 5.215-16.819 12.682-2.835 9.771-6.768 19.255-11.689 28.19-3.756 6.819-2.557 15.404 2.917 20.878l18.015 18.015c.975.975.975 2.561 0 3.535z" />
                                            <path
                                                d="m279.661 62.546h-47.318c-9.649 0-17.499 7.85-17.499 17.499v25.463c0 1.121-.748 2.09-1.862 2.413-10.832 3.143-21.345 7.502-31.248 12.958-1.021.563-2.241.407-3.033-.386l-18.015-18.015c-6.823-6.822-17.924-6.823-24.749 0l-33.458 33.459c-3.306 3.305-5.126 7.7-5.126 12.375 0 4.674 1.82 9.069 5.125 12.374l18.015 18.015c.794.793.948 2.012.386 3.034-5.455 9.903-9.814 20.417-12.957 31.25-.323 1.113-1.293 1.86-2.413 1.86h-25.464c-9.649 0-17.499 7.85-17.499 17.499v47.318c0 9.649 7.85 17.5 17.499 17.5h25.463c1.121 0 2.09.748 2.413 1.862 3.144 10.831 7.503 21.344 12.957 31.248.562 1.021.408 2.241-.386 3.034l-18.015 18.015c-6.822 6.823-6.822 17.925 0 24.748l33.459 33.458c6.822 6.822 17.925 6.823 24.749 0l18.015-18.014c.791-.793 2.009-.948 3.033-.385 9.902 5.454 20.415 9.813 31.249 12.957 1.113.323 1.861 1.292 1.861 2.413v25.463c0 9.649 7.85 17.499 17.499 17.499h6.159c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-6.159c-1.378 0-2.499-1.121-2.499-2.499v-25.463c0-7.737-5.216-14.654-12.683-16.819-9.771-2.836-19.257-6.769-28.189-11.689-6.82-3.757-15.404-2.558-20.878 2.917l-18.016 18.014c-.976.975-2.561.974-3.534 0l-33.459-33.458c-.975-.975-.975-2.561 0-3.535l18.016-18.018c5.473-5.474 6.673-14.059 2.917-20.877-4.922-8.936-8.854-18.421-11.689-28.189-2.165-7.468-9.081-12.684-16.819-12.684h-25.464c-1.378 0-2.499-1.121-2.499-2.5v-47.318c0-1.378 1.121-2.499 2.499-2.499h25.463c7.738 0 14.654-5.216 16.819-12.682 2.835-9.77 6.768-19.255 11.689-28.191 3.756-6.818 2.557-15.404-2.917-20.877l-18.016-18.015c-.637-.637-.731-1.38-.731-1.767s.095-1.13.732-1.768l33.458-33.459c.974-.974 2.562-.976 3.535 0l18.015 18.015c5.473 5.474 14.058 6.673 20.879 2.917 8.935-4.922 18.419-8.855 28.188-11.689 7.468-2.166 12.684-9.082 12.684-16.819v-25.463c0-1.378 1.121-2.499 2.499-2.499h47.318c1.379 0 2.5 1.121 2.5 2.499v25.463c0 7.737 5.215 14.654 12.682 16.819 9.772 2.836 19.257 6.769 28.19 11.69 6.82 3.756 15.403 2.556 20.878-2.917l18.015-18.015c.974-.974 2.559-.976 3.534 0l33.46 33.46c.637.637.731 1.38.731 1.767 0 .386-.095 1.13-.732 1.767l-18.015 18.015c-5.474 5.474-6.673 14.059-2.917 20.877 4.922 8.937 8.854 18.421 11.689 28.191 2.167 7.467 9.083 12.682 16.819 12.682h25.462c1.379 0 2.5 1.121 2.5 2.499v6.159c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-6.159c0-9.649-7.851-17.499-17.5-17.499h-25.462c-1.12 0-2.09-.748-2.413-1.862-3.143-10.831-7.502-21.344-12.957-31.248-.562-1.022-.408-2.241.386-3.035l18.014-18.014c3.306-3.305 5.126-7.7 5.126-12.374 0-4.675-1.82-9.069-5.125-12.374l-33.459-33.459c-6.825-6.824-17.926-6.822-24.749 0l-18.015 18.015c-.791.792-2.012.948-3.033.385-9.901-5.454-20.414-9.813-31.249-12.957-1.112-.323-1.86-1.292-1.86-2.413v-25.463c.001-9.649-7.849-17.499-17.499-17.499z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-lg-8 col-9">
                                <h5>Ultimate Flexibility</h5>
                                <p class="mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why us section end -->

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="sub-title my-primary-color">Travel Stories</h3>
                    <h2 class="title">Travel tips, hacks, tricks and a whole lot more</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider">
                        <div>
                            <div class="blogListMain bg-white p-3 h-100 border border-secondary rounded-4">
                                <div class="upperBox text-center bg-gray rounded-3">
                                    <img src="assets/images/blog/blog-1.jpg" class="object-fit-contain w-100 h-100" alt="">
                                    <div class="timePt bg-primary p-2 px-3 fw-semibold text-white"><i class="bi bi-calendar2-event mr-1"></i> 30 Nov | 12:00 PM</div>
                                </div>
                                <div class="pt-3 text-center">
                                    <h3 class="fs-5 fw-bold mb-2">How Massage Therapy Will Benefit You?</h3>
                                    <p class="mb-3 fs-6">Join us for an enlightening event, "How Massage Therapy Will Benefit You…</p>
                                    <a href="blogs-details.html" class="btn btn-dark shadow-none rounded-3 d-inline-block" tabindex="0">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blogListMain bg-white p-3 h-100 border border-secondary rounded-4">
                                <div class="upperBox text-center bg-gray rounded-3">
                                    <img src="assets/images/blog/blog-2.jpg" class="object-fit-contain w-100 h-100" alt="">
                                    <div class="timePt bg-primary p-2 px-3 fw-semibold text-white"><i class="bi bi-calendar2-event mr-1"></i> 30 Nov | 12:00 PM</div>
                                </div>
                                <div class="pt-3 text-center">
                                    <h3 class="fs-5 fw-bold mb-2">How Massage Therapy Will Benefit You?</h3>
                                    <p class="mb-3 fs-6">Join us for an enlightening event, "How Massage Therapy Will Benefit You…</p>
                                    <a href="blogs-details.html" class="btn btn-dark shadow-none rounded-3 d-inline-block" tabindex="0">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blogListMain bg-white p-3 h-100 border border-secondary rounded-4">
                                <div class="upperBox text-center bg-gray rounded-3">
                                    <img src="assets/images/blog/blog-3.jpg" class="object-fit-contain w-100 h-100" alt="">
                                    <div class="timePt bg-primary p-2 px-3 fw-semibold text-white"><i class="bi bi-calendar2-event mr-1"></i> 30 Nov | 12:00 PM</div>
                                </div>
                                <div class="pt-3 text-center">
                                    <h3 class="fs-5 fw-bold mb-2">How Massage Therapy Will Benefit You?</h3>
                                    <p class="mb-3 fs-6">Join us for an enlightening event, "How Massage Therapy Will Benefit You…</p>
                                    <a href="blogs-details.html" class="btn btn-dark shadow-none rounded-3 d-inline-block" tabindex="0">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="blogListMain bg-white p-3 h-100 border border-secondary rounded-4">
                                <div class="upperBox text-center bg-gray rounded-3">
                                    <img src="assets/images/blog/blog-1.jpg" class="object-fit-contain w-100 h-100" alt="">
                                    <div class="timePt bg-primary p-2 px-3 fw-semibold text-white"><i class="bi bi-calendar2-event mr-1"></i> 30 Nov | 12:00 PM</div>
                                </div>
                                <div class="pt-3 text-center">
                                    <h3 class="fs-5 fw-bold mb-2">How Massage Therapy Will Benefit You?</h3>
                                    <p class="mb-3 fs-6">Join us for an enlightening event, "How Massage Therapy Will Benefit You…</p>
                                    <a href="blogs-details.html" class="btn btn-dark shadow-none rounded-3 d-inline-block" tabindex="0">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //End -->

    <!-- Footer section -->
    @include('includeFrontend/footer')
    <!-- Footer section end -->


    <!-- Modal Enquire -->
    <div class="modal getquoteModal fade" id="enquire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <div class="d-flex">
                                                <input type="text" name="" id="" placeholder="Phone Number"
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