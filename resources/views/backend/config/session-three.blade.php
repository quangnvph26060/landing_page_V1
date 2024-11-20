@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <form action="" method="POST" enctype="multipart/form-data" id="config-form">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ ucwords($title) }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" name="title" id="title"
                                value="{{ old('title', $session->title ?? '') }}" class="form-control">
                            <small></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cấu hình block {{ $i + 1 }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="blocks[{{ $i }}][image]"
                                            name="blocks[{{ $i }}][image]" />
                                        <input type="hidden" name="oldImage[{{ $i }}]"
                                            value="{{ $session->blocks[$i]['image'] ?? '' }}">
                                        <small></small>
                                        <img src="{{ showImage($session->blocks[$i]['image'] ?? '') }}" alt=""
                                            width="100%" class="mt-3">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="content" class="form-label">Nội dung</label>
                                        <textarea class="form-control" id="content_{{ $i }}" name="blocks[{{ $i }}][description]"
                                            placeholder="Mô tả" rows="5">{{ old("blocks.$i.description", $session->blocks[$i]['description'] ?? '') }}</textarea>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor



            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Các nội dung</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="form-group col-lg-4 mb-3">
                                    <textarea name="contents[{{ $i }}]" id="contents[{{ $i }}]" class="form-control" cols="30"
                                        rows="10">{{ old("contents.$i", $session->contents[$i] ?? '') }}</textarea>
                                    <small id="err_description_{{ $i }}"></small>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-start mb-3 mt-3">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/libs/toastify-js/src/toastify.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>

    <script>
        ckeditor('content_0')
        ckeditor('content_1')

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
