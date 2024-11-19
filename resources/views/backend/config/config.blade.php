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
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình seo</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="title_seo" class="form-label">Tiêu đề</label>
                                    <input type="text" class="form-control " id="title_seo" name="title_seo"
                                        placeholder="Tiêu đề" value="{{ $config->title_seo }}" />
                                    <small></small>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="keywords_seo" class="form-label">Keywords</label>
                                    <input class="form-control" id="choices-text-unique-values" data-choices
                                        data-choices-text-unique-true type="text" name="keywords_seo"
                                        value="{{ $config->keywords_seo }}" />
                                    <small id="err_keywords_seo"></small>

                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="description_seo" class="form-label">Mô tả</label>
                                    <textarea class="form-control" id="description_seo" name="description_seo" placeholder="Mô tả" rows="5">{{ $config->description_seo }}</textarea>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình scripts</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="script" class="form-label">Scripts</label>
                                    <textarea class="form-control" id="script" name="script" placeholder="Scripts" rows="5">{{ $config->script }}</textarea>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình footer</h4>
                        <small class="form-text text-danger">Vui lòng nhập cách nhau bởi dấu "|". Ví dụ: Hà Nội | Hồ Chí
                            Minh</small>

                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="branch" class="form-label">Chi nhánh</label>
                                    <input type="text" placeholder="Chi nhánh" class="form-control " id="branch"
                                        name="branch" value="{{ $config->branch }}">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="title" class="form-label">Địa chỉ</label>
                                    <input type="text" placeholder="Địa chỉ" class="form-control " id="address"
                                        name="address" value="{{ $config->address }}">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="hotline" class="form-label">Hotline</label>
                                    <input type="text" placeholder="Hotline" class="form-control " id="hotline"
                                        name="hotline" value="{{ $config->hotline }}">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" placeholder="Email" class="form-control " id="email"
                                        name="email" value="{{ $config->email }}">
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" placeholder="Website" class="form-control " id="website"
                                        name="website" value="{{ $config->website }}">
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="title" class="form-label">Tiêu đề</label>
                                <input type="text" placeholder="Tiêu đề" class="form-control " id="title"
                                    name="title" value="{{ $config->title }}">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="copyright" class="form-label">Chân trang</label>
                                <input type="text" placeholder="Copyright" class="form-control " id="copyright"
                                    name="copyright" value="{{ $config->copyright }}">
                                <small></small>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="map" class="form-label">Map</label>
                                <input type="text" placeholder="Map" class="form-control " id="map"
                                    name="map" value="{{ $config->map }}">
                                <small></small>
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
                            <img src="{{ showImage($config->logo) }}" alt="" width="100%" class="mt-3">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cấu hình icon</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" class="form-control" id="favicon" name="favicon" />
                            <small></small>
                            <img src="{{ showImage($config->favicon) }}" alt="" width="100%" class="mt-3">
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
        // Khởi tạo CKEditor
        CKEDITOR.replace('content_footer', {
            height: 150
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
