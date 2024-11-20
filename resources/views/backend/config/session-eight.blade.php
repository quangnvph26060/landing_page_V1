@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" id="config-form">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucwords($title) }}</h4>
                    </div>
                    <div class="card-body">


                        <div class="form-group mb-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Tiêu đề"
                                value="{{ $session->title }}">
                            <small></small>
                        </div>


                        <label for="" class="form-label">Ảnh</label>
                        <div class="row">

                            @for ($i = 0; $i < 6; $i++)
                                <div class="form-group mb-3 col-md-2">
                                    <img class="img-fluid img-thumbnail w-100" id="show_image_{{ $i }}"
                                        style="max-height: auto; height: auto; cursor: pointer"
                                        src="{{ showImage($session->images[$i]) }}" alt=""
                                        onclick="document.getElementById('image_{{ $i }}').click();">
                                    <small id="err_images_{{ $i }}"></small>
                                    <input type="file" name="images[]" id="image_{{ $i }}"
                                        class="form-control d-none" accept="image/*"
                                        onchange="previewImage(event, 'show_image_{{ $i }}')">

                                </div>
                            @endfor
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slides</h4>
                    </div>
                    <div class="card-body">
                        <div class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>
                                <h4>Drop files here or click to upload.</h4>
                            </div>
                        </div>

                        <div id="dropzone-preview" class="row">
                            @foreach ($titles->images ?? [] as $item)
                                <div class="col-12 col-sm-6 col-md-3 mt-2" id="dropzone-preview-list-{{ $item->id }}">
                                    <img class="img-fluid rounded" src="{{ showImage($item->image) }}" alt="Image">
                                    <p class="fs-13 text-muted my-2">{{ getSize($item->image) }}</p>

                                    <button data-id="{{ $item->id }}" type="button"
                                        class="btn btn-danger btn-sm delete position-absolute top-0 end-0 m-2"
                                        id="sa-image">X</button>
                                </div>
                            @endforeach
                        </div>


                        <div id="preview-template" style="display: none;">
                            <div class="col-12 col-sm-6 col-md-3 mt-2">
                                <div class="image-preview-container position-relative">
                                    <img data-dz-thumbnail class="img-fluid rounded" src="" alt="Image">
                                    <button type="button" data-dz-remove
                                        class="btn btn-sm btn-danger delete position-absolute top-0 end-0 m-2">X</button>
                                    <p class="fs-13 text-muted my-2" data-dz-size></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-start mb-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/libs/toastify-js/src/toastify.js') }}"></script>

    <script src="{{ asset('backend/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            deleteImage(id);
        });

        window.deleteImage = function(id) {

            $.ajax({
                type: "POST",
                url: "{{ route('admin.configuration.postSession', 8) }}",
                data: {
                    id
                },
                success: function(response) {
                    console.log(response);
                    $('#dropzone-preview-list-' + id).remove();

                    toastSuccess(response.message)
                },
                error: function(xhr, status, error) {
                    console.log('Error:', error);

                }
            });
        }

        var dropzone = new Dropzone(".dropzone", {
            url: "{{ route('admin.configuration.postSession', 8) }}",
            method: "post",
            acceptedFiles: "image/*",
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            previewsContainer: "#dropzone-preview",
            maxFilesize: 5, // in MB
            paramName: "file",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content')
            },
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("title", $('#title').val());
                });
            },
            success: function(file, response) {

                $(".dz-complete, .dz-image-preview, .dz-processing").remove();

                var newPreview = document.createElement('div');
                newPreview.setAttribute('id', 'dropzone-preview-list-' + response.id);
                newPreview.classList.add('col-12', 'col-sm-6', 'col-md-3', 'mt-2');
                newPreview.innerHTML = `
                        <div class="image-preview-container position-relative">
                            <img class="img-fluid rounded" src="` + response.image + `" alt="Image">
                            <button type="button" data-id="` + response.id + `" class="btn btn-sm btn-danger delete position-absolute top-0 end-0 m-2">X</button>
                            <p class="fs-13 text-muted my-2">${response.size}</p>
                        </div>
                    `;

                document.querySelector('#dropzone-preview').prepend(newPreview);

            },


        });

        // Xử lý form submit
        $('#config-form').submit(function(e) {
            e.preventDefault();


            const data = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: data,
                contentType: false,
                processData: false,

                success: function(response) {
                    $('input, textarea').removeClass('is-invalid').siblings('small').removeClass(
                        'text-danger').html('');


                    if (response.status) {
                        toastSuccess(response.message)


                    } else {
                        $.each(response.errors, function(key, value) {
                            let selector = 'input[name="' + key + '"], textarea[name="' + key +
                                '"]';

                            $(selector).addClass('is-invalid');

                            if (key.includes('images')) {
                                let index = key.match(/\d+/);
                                if (index) {
                                    $('#err_images_' + index[0]).addClass('text-danger')
                                        .html(value);
                                }
                            } else {
                                $(selector).siblings('small').addClass('text-danger').html(
                                    value);
                            }
                        });

                        toastError(response.message)
                    }
                },
                error: function(error) {

                    Toastify({
                        text: error.responseJSON.message || "Có lỗi xảy ra!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                    }).showToast();
                }
            });
        });
    </script>
@endpush


@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/toastify-js/src/toastify.css') }}">
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css" />
    <style>
        #dropzone-preview {
            margin-top: 15px;
        }

        .link-preview-container {
            position: relative;
            overflow: hidden;
            border: 1px solid #ddd;
            /* Optional border */
            padding: 5px;
            background-color: #f8f9fa;
            /* Optional background */
        }

        .delete {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(255, 0, 0, 0.7);
            /* Red background */
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete:hover {
            background-color: red;
        }

        .link-preview-container img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
@endpush
