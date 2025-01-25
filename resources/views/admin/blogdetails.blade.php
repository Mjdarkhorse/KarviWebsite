<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('admin.head')

</head>

<body>
    <div id="layout-wrapper">
        @include('admin.header')
        @include('admin.sidebar')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Blog Details</h4>
                                <div class="page-title-right" id="college_header_div">
                                    <ol class="breadcrumb m-0 d-none">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('blogdetailssave') }}" id="addForm" class="row g-3" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" required oninput="updateUrl(this)">
                                            </div>
                                        </div>

                                        <div class="col-md-4 d-none">
                                            <div class="form-group">
                                                <label for="title">slugname</label>
                                                <input type="text" name="slug_name" id="slug_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Publish Date</label>
                                                <input type="date" name="date" id="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Tag</label>
                                                <input type="text" name="keywords" class="form-control" oninput="" data-role="tagsinput" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 " id="image2">
                                            <div class="form-group">
                                                <label for="url">Image</label>
                                                <input type="file" name="image" class="form-control mt-2" id="image">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Description</label>
                                                <textarea type="text" name="content" oninput="handleTextareaChange(this)" id="contentdata" class="form-control" required></textarea>
                                                <input type="hidden" name="contentdata1" id="content_textarea" class="form-control" required>
                                            </div>
                                        </div>


                                        <div class="text-center mt-3">
                                            <button type="submit" id="submit" class="btn btn-info submit" onclick="return from(event)">Submit</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table table-striped">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Sl No.</th>
                                                    <th>Blog Title</th>
                                                    <th>Image </th>
                                                    <!-- <th>Keyword</th> -->
                                                    <th>Publish Date</th>
                                                    <th>Short Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $serialNumber = 1;
                                                @endphp
                                                @foreach($blogdetails as $data)

                                                <tr>
                                                    <td>{{ $serialNumber }}</td>
                                                    <td>{{ $data->blog_title }}</td>
                                                    <td><img style="height: 80px; width: 80px;" src="{{ asset('/Blogdetails/' . $data->image) }}" alt="Error">
                                                        <!-- <td>{{ $data->keywords }}</td> -->
                                                    <td>{{ $data->publish_date }}</td>

                                                    <td>{{ $data->description }}</td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="{{ url('blog-details-edit/' . encrypt($data->blogdetails_id )) }}" class=" btn-primary fs-18"><i class="ri-edit-2-line"></i></a>
                                                            <div class="form-check form-switch mx-4">
                                                                <input class="form-check-input" type="checkbox" role="switch" data-id="<?= $data->blogdetails_id ?>" id="<?= $data->blogdetails_id ?>" onclick="update_status(<?= $data->blogdetails_id  ?>,<?= $data->status ?>,'')" <?= $data->status ? 'checked' : ''; ?>>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php
                                                $serialNumber++;
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @include('admin.footer')
    <script src="{{ asset('admin_assets/js/tagsinput.js') }}"></script>

    <script>
        $(document).ready(function() {
            var checkInterval = setInterval(function() {
                if ($('.cke_notifications_area').length > 0) {
                    $('.cke_notifications_area').addClass('d-none');
                    clearInterval(checkInterval);
                }
            }, 1);
        });
        $(document).ready(function() {
            $('.editbtn').click(function() {
                var blogdetails_id = $(this).val();
                // Assuming you have a route to fetch blog details by ID
                $.ajax({
                    url: '/get-blog-details/' + blogdetails_id,
                    type: 'GET',
                    success: function(response) {
                        // Assuming response is in JSON format with blog details
                        $('#editForm').find('#title').val(response.title);
                        $('#editForm').find('#blog_category_id').val(response.blog_category_id);
                        $('#editForm').find('#date').val(response.date);
                        $('#editForm').find('#keywords').val(response.keywords);
                        // Similarly, populate other form fields
                        $('#editForm').show(); // Show the edit form
                        $('#addForm').hide(); // Hide the add form
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // Handle error appropriately
                    }
                });
            });
        });


        $(document).ready(function() {
            var table = $('#datatable').DataTable({
                "order": [
                    [5, "desc"]
                ],
                "pageLength": 25
            });
            table.on('order.dt search.dt', function() {
                table.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                    table.cell(cell).invalidate('dom');
                });
            }).draw();
            table.on('search.dt', function() {
                table.column(0, {
                    search: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            });


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

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-')
                .replace(/^-+/, '')
                .replace(/-+$/, '');
        }

        function updateUrl(input) {
            var title = input.value.trim();
            var slug = slugify(title);
            document.getElementById('slug_name').value = slug;
        }
    </script>


    @if(session('success'))
    <script>
        tost('success', 'Blog Details Added Successfully!', 'text-success');
    </script>
    @endif

    @if(session('update'))
    <script>
        tost('success', 'Blog Details Update Successfully!', 'text-success');
    </script>
    @endif
</body>

</html>