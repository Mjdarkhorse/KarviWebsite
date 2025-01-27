 <header>
     <div class="container">
         <div class="row justify-content-between align-items-center">
             <div class="col-6 d-flex align-items-center">
                 <div class="d-flex align-items-center">
                     <span class="social-box me-2"><i class="fa-solid fa-phone-volume"></i></span>
                     <a href="tel:9635969984" class="fw-medium">+91 9635969984</a>
                 </div>
                 <div class="d-flex align-items-center ms-2">
                     <span class="social-box me-2"><i class="fa-solid fa-envelope"></i></span>
                     <a href="mailto:wanderlustkarvi@gmail.com"
                         class="fw-medium">wanderlustkarvi@gmail.com</a>
                 </div>
             </div>
             <div class="col-6  align-items-center">
                 <div class="d-flex justify-content-end align-items-center">
                     <div class="social">
                         <a href="javascript:void(0);"><span class="social-box mx-1"><i
                                     class="fa-brands fa-facebook-f"></i></span></a>
                         <a href="javascript:void(0);"><span class="social-box mx-1"><i
                                     class="fa-brands fa-x-twitter"></i></span></a>
                         <a href="javascript:void(0);"><span class="social-box ms-1"><i
                                     class="fa-brands fa-instagram"></i></span></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

 <nav class="navbar navbar-expand-lg py-2">
     <div class="container">
         <a class="navbar-brand m-0 py-0" href="{{route('index')}}"><img src="assets/images/logo.jpg" alt=""></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
             aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
             <div class="offcanvas-header bg-white">
                 <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="assets/images/logo.jpg" alt=""></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body">
                 <ul class="navbar-nav mx-auto align-items-lg-center">
                     <li class="nav-item">
                         <a class="nav-link " href="{{route('index')}}">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="{{route('about_us')}}">About Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="{{route('destination_tour')}}">Destination Tour</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="{{route('packages_tour')}}">Packages Tour</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('blogs')}}">Blogs</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('contact')}}">Contact</a>
                     </li>
                 </ul>
                 <div class="mt-4 mt-lg-0">
                     <a href="javascript:void(0);" data-bs-target="#enquire" data-bs-toggle="modal" class="btn1">Get
                         in touch</a>
                 </div>
             </div>
         </div>
     </div>
 </nav>