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
                                <h4 class="mb-sm-0">Edit Package Details</h4>
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
                                    <form method="POST" action="{{ route('packageDetailsupdate') }}" id="editForm" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="package_details_id" value="{{ $packdetails->package_details_id }}">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Selected City</label>
                                                <select name="city_id" id="city_id" class="form-select mb-2 select2" required>
                                                    <option value="">Select City</option>
                                                    <?php
                                                    foreach ($package_city as $data) {
                                                        $selected = ($data->package_city_id == $packdetails->package_city_id) ? 'selected' : '';
                                                    ?>
                                                        <option value="<?= $data->package_city_id ?>" <?= $selected ?>>
                                                            <?= $data->city_name ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ $packdetails->title }}" required oninput="updateUrl(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-none">
                                            <div class="form-group">
                                                <label for="title">slugname</label>
                                                <input type="text" name="slug_name" id="slug_name" class="form-control" value="{{ $packdetails->slug_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" id="location" class="form-control" value="{{ $packdetails->location }}" required oninput="updateUrl(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="imageContainer">
                                            <div class="form-group">
                                                <label for="image1">Image 1
                                                    @if($packdetails->image1)<br>
                                                    <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $packdetails->image1) }}" alt="Error">
                                                    @endif
                                                </label>

                                                <input type="file" name="image1" class="form-control mt-2" id="image1">
                                                <input type="hidden" name="old_image1" value="{{$packdetails->image1}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="image2">Image 2
                                                    @if($packdetails->image2) <br>
                                                    <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $packdetails->image2) }}" alt="Error">
                                                    @endif
                                                </label>
                                                <input type="file" name="image2" class="form-control mt-2" id="image2">
                                                <input type="hidden" name="old_image2" value="{{$packdetails->image2}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="image3">Image 3
                                                    @if($packdetails->image3)<br>
                                                    <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $packdetails->image3) }}" alt="Error">
                                                    @endif
                                                </label>
                                                <input type="file" name="image3" class="form-control mt-2" id="image3">
                                                <input type="hidden" name="old_image3" value="{{$packdetails->image3}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="image4">Image 4
                                                    @if($packdetails->image4)<br>
                                                    <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $packdetails->image4) }}" alt="Error">
                                                    @endif
                                                </label>
                                                <input type="file" name="image4" class="form-control mt-2" id="image4">
                                                <input type="hidden" name="old_image4" value="{{$packdetails->image4}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="image5">Image 5
                                                    @if($packdetails->image5)<br>
                                                    <img style="height: 80px; width: 80px;" src="{{ asset('/PackageImage/' . $packdetails->image5) }}" alt="Error">
                                                    @endif
                                                </label>
                                                <input type="file" name="image5" class="form-control mt-2" id="image5">
                                                <input type="hidden" name="old_image5" value="{{$packdetails->image5}}">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pac_duration">Package Duration</label>
                                                <input type="text" name="pac_duration" id="pac_duration" class="form-control" value="{{ $packdetails->days }}" required oninput="updateTextareas(this)">
                                            </div>
                                        </div> -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pac_duration">Package Duration</label>
                                                <input type="text" name="pac_duration" id="pac_duration" class="form-control" value="{{ $packdetails->days }}" readonly>
                                                <button type="button" class="btn btn-primary mt-2" id="addDayButton">Add 1 More Day</button>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="textareaContainer">
                                            <!-- Textareas will be generated here dynamically -->
                                            @if($packdetailsContents && count($packdetailsContents) > 0)
                                            @foreach($packdetailsContents as $key => $contentData)
                                            <div class="form-group">
                                                <label for="content_{{ $key + 1 }}">Description for Day {{ $key + 1 }}</label>
                                                <textarea type="text" name="content[]" id="content_{{ $key + 1 }}" class="form-control content_textarea" required>{{ $contentData->contents ?? '' }}</textarea>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-info submit">Update</button>
                                        </div>
                                    </form>
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

    <!-- for multiple text area box -->



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const durationInput = document.getElementById("pac_duration");
            const textareaContainer = document.getElementById("textareaContainer");
            const addDayButton = document.getElementById("addDayButton");

            // Add a new day and corresponding textarea
            addDayButton.addEventListener("click", function() {
                let currentDuration = parseInt(durationInput.value, 10);
                if (isNaN(currentDuration)) currentDuration = 0;

                // Increment the duration
                const newDuration = currentDuration + 1;
                durationInput.value = newDuration;

                // Create a new textarea with a close button
                const textareaDiv = document.createElement("div");
                textareaDiv.classList.add("form-group", "textarea-wrapper");
                textareaDiv.id = `textareaWrapper_${newDuration}`;
                textareaDiv.innerHTML = `
            <label for="content_${newDuration}">Description for Day ${newDuration}</label>
            <textarea type="text" name="content[]" id="content_${newDuration}" class="form-control content_textarea" required></textarea>
            <button type="button" class="btn btn-danger remove-textarea" data-id="${newDuration}">Remove</button>
        `;
                textareaContainer.appendChild(textareaDiv);

                // Initialize CKEditor for the new textarea
                CKEDITOR.replace(`content_${newDuration}`, {
                    filebrowserUploadUrl: "{{ route('upload.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: "form",
                });
            });

            // Remove a textarea when the close button is clicked
            textareaContainer.addEventListener("click", function(event) {
                if (event.target.classList.contains("remove-textarea")) {
                    const id = event.target.dataset.id;
                    const wrapper = document.getElementById(`textareaWrapper_${id}`);

                    // Destroy CKEditor instance for this textarea
                    if (CKEDITOR.instances[`content_${id}`]) {
                        CKEDITOR.instances[`content_${id}`].destroy();
                    }

                    // Remove the wrapper div
                    wrapper.remove();

                    // Update the duration count
                    let currentDuration = parseInt(durationInput.value, 10);
                    if (!isNaN(currentDuration) && currentDuration > 0) {
                        durationInput.value = currentDuration - 1;
                    }
                }
            });

            // Initialize CKEditor on page load for existing textareas
            const existingTextareas = document.querySelectorAll(".content_textarea");
            existingTextareas.forEach((textarea) => {
                CKEDITOR.replace(textarea.id, {
                    filebrowserUploadUrl: "{{ route('upload.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: "form",
                });
            });

            // Ensure CKEditor data is synced to textareas on form submission
            const form = document.querySelector("form"); // Adjust to your form selector
            if (form) {
                form.addEventListener("submit", function() {
                    for (const instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].updateElement();
                    }
                });
            }
        });
    </script>

    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const durationInput = document.getElementById("pac_duration");
            const textareaContainer = document.getElementById("textareaContainer");
            const addDayButton = document.getElementById("addDayButton");

            // Add a new day and corresponding textarea
            addDayButton.addEventListener("click", function() {
                let currentDuration = parseInt(durationInput.value, 10);
                if (isNaN(currentDuration)) currentDuration = 0;

                // Increment the duration
                const newDuration = currentDuration + 1;
                durationInput.value = newDuration;

                // Create a new textarea with a close button
                const textareaDiv = document.createElement("div");
                textareaDiv.classList.add("form-group", "textarea-wrapper");
                textareaDiv.id = `textareaWrapper_${newDuration}`;
                textareaDiv.innerHTML = `
                <label for="content_${newDuration}">Description for Day ${newDuration}</label>
                <textarea type="text" name="content[]" id="content_${newDuration}" class="form-control content_textarea" required></textarea>
                <button type="button" class="btn btn-danger remove-textarea" data-id="${newDuration}">Remove</button>
            `;
                textareaContainer.appendChild(textareaDiv);

                // Initialize CKEditor for the new textarea
                CKEDITOR.replace(`content_${newDuration}`, {
                    filebrowserUploadUrl: "{{ route('upload.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: "form",
                });
            });

            // Remove a textarea when the close button is clicked
            textareaContainer.addEventListener("click", function(event) {
                if (event.target.classList.contains("remove-textarea")) {
                    const id = event.target.dataset.id;
                    const wrapper = document.getElementById(`textareaWrapper_${id}`);
                    const textareaId = `content_${id}`;

                    // Destroy CKEditor instance for this textarea
                    if (CKEDITOR.instances[textareaId]) {
                        CKEDITOR.instances[textareaId].destroy();
                    }

                    // Remove the wrapper div
                    wrapper.remove();

                    // Update the duration count
                    let currentDuration = parseInt(durationInput.value, 10);
                    if (!isNaN(currentDuration) && currentDuration > 0) {
                        durationInput.value = currentDuration - 1;
                    }
                }
            });

            // Initialize CKEditor on page load for existing textareas
            const existingTextareas = document.querySelectorAll(".content_textarea");
            existingTextareas.forEach((textarea) => {
                CKEDITOR.replace(textarea.id, {
                    filebrowserUploadUrl: "{{ route('upload.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: "form",
                });
            });

            // Ensure CKEditor data is synced to textareas on form submission
            const form = document.querySelector("form");
            if (form) {
                form.addEventListener("submit", function() {
                    for (const instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].updateElement();
                    }
                });
            }
        });
    </script> -->





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
    @if(session('update'))
    tost('success', 'Package Details Update Successfully!', 'text-success');
    @endif
</body>

</html>