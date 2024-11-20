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
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" placeholder="Tiêu đề" value="{{$session->title}}" name="title" class="form-control">
                            <small></small>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="extra" class="form-label">Nội dung ngắn</label>
                            <textarea name="extra" id="extra" cols="30" rows="10" class="form-control">{!! $session->extra !!}</textarea>
                            <small></small>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Mô tả</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{!! $session->content !!}</textarea>
                            <small></small>
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
    <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>

    <script>
        ckeditor('content', 200)
        ckeditor('extra', 200)

        // Xử lý form submit
        $('#config-form').submit(function(e) {
            e.preventDefault();
            $('textarea').each(function() {
                const editorId = this.id;
                if (CKEDITOR.instances[editorId]) {
                    CKEDITOR.instances[editorId].updateElement();
                }
            });

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
