@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" id="config-form">

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucwords($title) }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="title" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control " id="title" name="title"
                                        placeholder="Tiêu đề" value="{{$session->title}}" />
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="excerpt" class="form-label">Mô tả ngắn</label>
                                    <input class="form-control" name="excerpt" value="{{$session->excerpt}}" placeholder="Mô tả ngắn " />
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="title_form" class="form-label">Tiêu đề form</label>
                                    <textarea class="form-control" id="title_form" name="title_form" placeholder="Mô tả" rows="5">{!! $session->title_form !!}</textarea>
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="content" class="form-label">Nội dung</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="Mô tả" rows="5">{!! $session->content !!}</textarea>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình logo</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" class="form-control" id="logo" name="logo" />
                            <small></small>
                            <img src="{{ showImage($session->logo) }}" alt="" width="100%" class="mt-3">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình ảnh</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" class="form-control" id="image" name="image" />
                            <small></small>
                            <img src="{{ showImage($session->image) }}" alt="" width="100%" class="mt-3">
                        </div>
                    </div>
                </div>


                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/libs/toastify-js/src/toastify.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>

    <script>
        ckeditor('content')
        ckeditor('title_form', 100)

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
                            $('input[name=' + key + '], textarea[name=' + key + ']').addClass(
                                    'is-invalid')
                                .siblings('small').addClass('text-danger').html(value);

                            if (key == 'keywords_seo') {

                                $('#err_keywords_seo').addClass('text-danger').html(value);
                            }
                        })
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
