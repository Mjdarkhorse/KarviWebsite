<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('admin.head')
</head>

<body>

    <div class="auth-page-wrapper">
        <div class="auth-page-content pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <img src="{{ asset('admin_aassets/images/logo-ico.png') }}" alt="">
                                    <h5 class="text-primary mt-4">Welcome Back !</h5>
                                    <p class="text-muted">Admin Login to Karvi.</p>
                                </div>
                                <div class="p-2">
                                    <form id="from" method="post" action="{{route('check')}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label mb-0">Username</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-0" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button class="btn btn-success btn-lg w-100" type="submit" onclick="return from(event)">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <p class="mb-0">©2024 All Rights Reserved. Admin Privacy and Terms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
    <script src="{{ asset('admin_assets/js/pages/password-addon.init.js') }}"></script>
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('input, textarea').attr('autocomplete', 'off');

            $('#from').on("input", "input", function() {
                var inputId = $(this).attr("id");
                removeErrorStyle(inputId);
            });

            $('#from').on("input", "textarea", function() {
                var inputId = $(this).attr("id");
                removeErrorStyle(inputId);
            });

            $('#from').on("change", "select", function() {
                var selectId = $(this).attr("id");
                removeErrorStyle(selectId);
            });
        });

        function from(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var submit = $('.submit');
            var isvalid = true;
            if (isvalid) {
                $("textarea:not(.required_not), select:not(.required_not), input:not(.required_not)").each(function() {
                    if ($(this).val().trim() === "" || $(this).val().trim() == 0) {
                        $(this)[0].scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });
                        addErrorStyle($(this).attr("id"));
                        isvalid = false;
                        return false;
                    }
                });
            }

            if (isvalid) {
                var email = document.getElementById("email").value;
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailRegex.test(email)) {
                    var loader = $('#from');
                    var spinner = $('<div class="spinner-border text-success" style="width: 4rem; height: 4rem; position: absolute; top: 2rem; left: 0; right: 0; bottom: 100; margin: auto; opacity: 1;" role="status"></div>').appendTo(loader);
                    $('body').css('opacity', 0.6);
                    $('#from').submit();
                } else {
                    addErrorStyle('email');
                    tost('error', 'Please Enter A Valid Email !', 'text-danger');
                }
            }
        }
    </script>
    @if(session('error'))
    <script>
        tost('error', 'Wrong Username or Password!', 'text-danger');
    </script>
    @endif
    </script>
</body>

</html>