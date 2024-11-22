@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">{{ ucwords($title) }}</h5>
                    <form action="" method="post" style="width: 300px" id="email-form">
                        <div class="input-group d-flex">
                            <input type="text" name="email" id="email" value="{{ env('MAIL_TO') }}"
                                placeholder="Nhập email nhận thông báo" class="form-control">
                            <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table id="alternative-pagination"
                        class="table nowrap dt-responsive align-middle table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">SR No.</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <td class="fw-medium text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i') }}
                                        ({{ \Carbon\Carbon::parse($item->created_at)->locale('vi')->diffForHumans() }})
                                    </td>
                                    <td>
                                        <button type="button" data-id="{{ $item->id }}"
                                            class="btn btn-danger btn-sm btn-destroy">
                                            <i class="ri-delete-bin-2-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/toastify-js/src/toastify.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

@push('scripts')
    <script src="{{ asset('backend/assets/libs/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script>
        $('#email-form').submit(function(e) {
            e.preventDefault();
            var email = $('#email').val();
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email
                },
                success: function(response) {
                    if (response.status) {

                        toastSuccess(response.message)
                    } else {
                        toastError(response.message)
                    }
                },
                error: function(error) {
                    toastError(response.message)
                }
            })
        });

        $(document).on('click', '.btn-destroy', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = "{{ route('admin.contact.destroy', ':id') }}".replace(':id', id);

            // SweetAlert2: Hiển thị xác nhận
            Swal.fire({
                title: 'Bạn có chắc chắn không?',
                text: "Bạn sẽ không thể hoàn nguyên điều này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            if (response.status) {
                                window.location.reload();
                            } else {
                                toastError(response.message)
                            }
                        },
                        error: function(error) {
                            toastError(error.responseJSON.message)
                        }
                    });
                }
            });
        });
    </script>
@endpush
