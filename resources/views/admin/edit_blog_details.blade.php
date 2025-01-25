<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('admin.includeAdmin.head')
    <style>
        .toggle-container {
            display: inline-block;
            position: relative;
            width: 60px;
            height: 34px;
        }

        .toggle-checkbox {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.toggle-slider {
            background-color: #2196F3;
        }

        input:focus+.toggle-slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.toggle-slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
    </style>
</head>

<body>


    <div id="layout-wrapper">
        @include('admin/includeAdmin/header')
        @include('admin/includeAdmin/sidebar')
        <div class="vertical-overlay"></div>
        <div class="main-content">

            <div class="page-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Update Blog Details </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                        <li class="breadcrumb-item active">Update Blog Details</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ url('update-blog-details') }}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="blogdetails_id" value="{{$data->blogdetails_id}}" id="blogdetails_id">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="url">Blog Image</label>
                                                <input type="file" name="image" class="form-control" id="image">
                                                <img src="{{ asset('Blogdetails/' . $data->image)}}" class="img-fluid" alt="ERROR CODE">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="blog_title" class="form-control" value="{{$data->blog_title}}" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Publish Date</label>
                                                <input type="date" name="date" class="form-control" value="{{$data->publish_date}}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Tag</label>
                                                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" data-role="tagsinput" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Description</label>
                                                <textarea type="text" name="content" oninput="handleTextareaChange(this)" id="contentdata" class="form-control" required>{!! $data->description !!}</textarea>
                                                <input type="hidden" name="contentdata1" id="content_textarea" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-info">Update Blog Details</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Justori.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Add Value Technology Ltd.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    @include('admin.includeAdmin.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('admin_aassets/js/tagsinput.js') }}"></script>
    <script>
        $(document).ready(function() {
            var checkInterval = setInterval(function() {
                if ($('.cke_notifications_area').length > 0) {
                    $('.cke_notifications_area').addClass('d-none');
                    clearInterval(checkInterval);
                }
            }, 1);
        });

        $(function() {
            $('tagsinput').on('change', function(event) {

                var $element = $(event.target);
                var $container = $element.closest('.example');

                if (!$element.data('tagsinput'))
                    return;

                var val = $element.val();
                if (val === null)
                    val = "null";
                var items = $element.tagsinput('items');

                $('code', $('pre.val', $container)).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
                $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));


            }).trigger('change');
        });


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

        CKEDITOR.replace('contentdata', {
            filebrowserUploadUrl: "{{ route('upload.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            on: {
                change: function(evt) {
                    var editor = evt.editor;
                    var content = editor.getData();
                    document.getElementById("content_textarea").value = content;
                }
            }

        });



        document.addEventListener("DOMContentLoaded", function() {
            // Show the first tab by default
            document.querySelector('.tabs button').click();
        });


        function update_status(id_value, status_value, name) {
            var swalOptions = {
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                allowOutsideClick: false
            };

            if (status_value == 1) {
                swalOptions.html = 'You Want To Close  The Blog  !<br> ';
                swalOptions.confirmButtonText = 'Yes, Close!';
            } else {
                swalOptions.icon = 'success';
                swalOptions.html = 'You Want To Reactivate The Blog  !<br>';
                swalOptions.confirmButtonColor = '#green';
                swalOptions.confirmButtonText = 'Yes, Reopen!';
            }

            Swal.fire(swalOptions).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: 'update_status',
                        data: {
                            id_value: id_value,
                            tableName: 'blogdetails',
                            status_value: status_value
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response && response.status === "success") {
                                Swal.fire({
                                    icon: 'success',
                                    title: (status_value == 1) ? 'Blog Details Close Successful' : 'Blog Details Reopen Successful',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: (status_value == 1) ? 'Blog Details Close Failed' : 'Blog Details Reopen  Failed',
                                    text: 'There was an error!.'
                                });
                            }

                            console.log(response);
                        },
                        error: function(error) {
                            console.log(error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'There was an error during the request.'
                            });
                        }
                    });
                } else {
                    var checkbox = document.querySelector(`.form-check-input[data-id="${id_value}"]`);
                    if (checkbox) {
                        checkbox.checked = status_value == 1;
                    } else {
                        console.error("Checkbox not found");
                    }
                }
            });
        }

        function deleteRow(name, id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete the  Image ' + name + '!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'deleteRow',
                        type: 'GET',
                        data: {
                            tableName: 'college_names_images',
                            id_value: id
                        },
                        success: function(response) {
                            if (response) {
                                Swal.fire({
                                    title: 'Deleted!',
                                    html: 'Image Deleted Successfully.',
                                    icon: 'success',
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Image has not been deleted !',
                                    icon: 'error',
                                });
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        }
    </script>

</body>

</html>