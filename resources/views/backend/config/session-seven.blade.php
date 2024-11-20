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
                            <label for="link" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề"
                                value="{{ old('title', $session->title ?? '') }}" />
                                <small></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="link" class="form-label">Video</label>
                            <div id="link-container">
                                @if (count( $session->links) > 0)
                                    @foreach ( $session->links as $key => $item)
                                        <div class="link-item row mb-3">
                                            <div class="col-lg-11">
                                                <input type="text" class="form-control" data-id="{{ $key }}"
                                                    name="links[]" placeholder="Link video" value="{{ $item }}" />
                                                    <small id="err_link_{{ $key }}"></small>
                                            </div>
                                            <div class="col-lg-1">
                                                @if ($loop->first)
                                                    <button type="button" class="btn btn-primary add-link">+</button>
                                                @else
                                                    <button type="button" class="btn btn-danger remove-link">-</button>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="link-item row mb-3">
                                        <div class="col-lg-11">
                                            <input type="text" class="form-control" data-id="0" name="links[]"
                                                placeholder="Nội dung" value="" />
                                                <small id="err_link_0"></small>
                                        </div>
                                        <div class="col-lg-1">
                                            <button type="button" class="btn btn-primary add-link">+</button>
                                        </div>
                                    </div>
                                @endif
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



    <script>
        $(document).ready(function() {

            let currentIndex = {{ count($session->links) > 0 ? count($session->links) : 1 }};

            $('.add-link').on('click', function() {
                const linkItem = `
                    <div class="link-item row mb-3">
                        <div class="col-lg-11">
                            <input type="text" data-id="${currentIndex}" class="form-control" name="links[]"
                                placeholder="Link video" value="" />
                                <small id="err_link_${currentIndex}"></small>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-danger remove-link">-</button>
                        </div>
                    </div>`;

                $('#link-container').append(linkItem);
                currentIndex++;
            });

            $('#link-container').on('click', '.remove-link', function() {
                const linkItem = $(this).closest('.link-item');
                linkItem.remove();
            });

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

                            if (key.includes('link')) {
                                let index = key.match(/\d+/);
                                if (index) {
                                    $('#err_link_' + index[0]).addClass('text-danger')
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
