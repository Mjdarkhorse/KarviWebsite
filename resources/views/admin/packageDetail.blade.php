<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('admin.includeAdmin.head')

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
                                <h4 class="mb-sm-0">Add Package Details</h4>
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
                                    <form method="POST" action="{{ route('packageDetailsave') }}" id="addForm" class="row g-3" enctype="multipart/form-data">
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
                                                <label for="title">Location</label>
                                                <input type="text" name="location" id="location" class="form-control" required oninput="updateUrl(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="imageContainer">
                                            <div class="form-group">
                                                <label for="image1">Image 1</label>
                                                <input type="file" name="image1" class="form-control mt-2" id="image1">
                                            </div>
                                            <div class="form-group">
                                                <label for="image2">Image 2</label>
                                                <input type="file" name="image2" class="form-control mt-2" id="image2">
                                            </div>
                                            <div class="form-group">
                                                <label for="image3">Image 3</label>
                                                <input type="file" name="image3" class="form-control mt-2" id="image3">
                                            </div>
                                            <div class="form-group">
                                                <label for="image4">Image 4</label>
                                                <input type="file" name="image4" class="form-control mt-2" id="image4">
                                            </div>
                                            <div class="form-group">
                                                <label for="image5">Image 5</label>
                                                <input type="file" name="image5" class="form-control mt-2" id="image5">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Package Duration</label>
                                                <input type="text" name="pac_duration" id="pac_duration" class="form-control" required oninput="updateTextareas(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="textareaContainer">
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-info submit">Submit</button>
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
                                                    <th>Package Title</th>
                                                    <th>Location</th>
                                                    <th>Images </th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $serialNumber = 1;
                                                @endphp
                                                @foreach($packdetails as $data)

                                                <tr>
                                                    <td>{{ $serialNumber }}</td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>{{ $data->location }}</td>
                                                    <td><img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $data->image1) }}" alt="Error">
                                                        <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $data->image2) }}" alt="Error">
                                                        <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $data->image3) }}" alt="Error">
                                                        <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $data->image4) }}" alt="Error">
                                                        <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $data->image5) }}" alt="Error">
                                                    </td>
                                                    <td>{!! $data->content !!}
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="" class=" btn-primary fs-18"><i class="ri-edit-2-line"></i></a>

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
    @include('admin.includeAdmin.footer')
    <script src="{{ asset('admin_assets/js/tagsinput.js') }}"></script>

    <!-- for multiple text area box -->
    <script>
        function updateTextareas(input) {
            const duration = parseInt(input.value, 10);
            const container = document.getElementById('textareaContainer');
            container.innerHTML = '';

            if (!isNaN(duration) && duration > 0) {
                for (let i = 1; i <= duration; i++) {
                    const textareaDiv = document.createElement('div');
                    textareaDiv.classList.add('form-group');

                    textareaDiv.innerHTML = `
                    <label for="content_${i}">Description for Day ${i}</label>
                    <textarea type="text" name="content[]" id="content_${i}" class="form-control" required></textarea>
                `;

                    container.appendChild(textareaDiv);
                    // Initialize CKEditor for each textarea
                    CKEDITOR.replace(`content_${i}`, {
                        // CKEditor configuration options here
                    });
                }
            } else {
                // Remove all CKEditor instances if duration is invalid or zero
                for (const instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].destroy();
                }
            }
        }
    </script>

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
                swalOptions.html = 'You Want To Close  The Package  !<br> ';
                swalOptions.confirmButtonText = 'Yes, Close!';
            } else {
                swalOptions.icon = 'success';
                swalOptions.html = 'You Want To Reactivate The Package  !<br>';
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
        tost('success', 'Package Details Added Successfully!', 'text-success');
    </script>
    @endif

    @if(session('update'))
    <script>
        tost('success', 'package Details Update Successfully!', 'text-success');
    </script>
    @endif
</body>

</html>