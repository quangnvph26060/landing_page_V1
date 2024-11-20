@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" id="config-form">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucwords($title) }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="titles" class="form-label">Quốc gia</label>
                                    <input type="text" class="form-control " id="titles" name="titles[]"
                                        placeholder="Tiêu đề" value="{{ $session->titles[0] }}" />
                                    <small></small>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="content" class="form-label">Nội dung</label>
                                    <textarea class="form-control" id="content_1" name="contents[]" placeholder="Mô tả" rows="5">{!! $session->contents[0] !!}</textarea>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucwords($title) }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="titles" class="form-label">Quốc gia</label>
                                    <input type="text" class="form-control" id="titles" name="titles[]"
                                        placeholder="Tiêu đề" value="{{ $session->titles[1] }}" />
                                    <small></small>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="content" class="form-label">Nội dung</label>
                                    <textarea class="form-control" id="content_2" name="contents[]" placeholder="Mô tả" rows="5">{!! $session->contents[1] !!}</textarea>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <img class="img-fluid img-thumbnail w-100" id="show_image_{{ $i }}"
                                        style="max-height: 337px; height: 337px; cursor: pointer" src="{{ showImage($session->images[$i]) }}"
                                        alt=""
                                        onclick="document.getElementById('image_{{ $i }}').click();">
                                    <input type="file" name="images[]" id="image_{{ $i }}"
                                        class="form-control d-none" accept="image/*"
                                        onchange="previewImage(event, 'show_image_{{ $i }}')">
                                </div>
                                <div class="form-group col-lg-8">
                                    <textarea name="descriptions[]" id="description_{{ $i }}" class="ckeditor" cols="30" rows="10">{!! $session->descriptions[$i] !!}</textarea>
                                    <small id="err_description_{{ $i }}"></small>
                                </div>
                            </div>
                        </div>
                    @endfor

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
        ckeditor('content_1')
        ckeditor('content_2')

        $('textarea.ckeditor').each(function(index, textarea) {

            ckeditor($(textarea).attr('id'), 200);
        });
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

                            if (key.includes('descriptions')) {
                                let index = key.match(/\d+/);
                                if (index) {
                                    $('#err_description_' + index[0]).addClass('text-danger')
                                        .html(value);
                                }
                            } else {
                                // Với các trường khác, hiển thị lỗi thông thường
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
@endpush
