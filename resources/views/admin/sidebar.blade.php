<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('admin_assets/images/logo.jpg') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin_assets/images/logo.jpg') }}" alt="" height="60">
            </span>
        </a>
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('admin_assets/images/logo.jpg') }}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin_assets/images/logo.jpg') }}" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Blog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Blog">
                        <i class="ri-inbox-archive-line"></i> <span data-key="t-Blogs">Blogs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Blog">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ url('admin/blogdetails') }}">Add Blog</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Blog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Blog">
                        <i class="ri-inbox-archive-line"></i> <span data-key="t-Blogs">Packages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Blog">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ url('packageDetails') }}">Add Package</a></li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>