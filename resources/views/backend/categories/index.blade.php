@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Chủ đề</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('questions.index') }}"><i class="bx bx-book"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Quản lý chủ đề</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('questions.create') }}">
                        <i class="bx bxs-plus-square"></i>Add New Question</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <h6 class="mb-0 text-uppercase">Question List</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width=150>Hình đại diện</th>
                                <th>Chủ đề</th>
                                <th>Số quiz</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0 @endphp
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('frontend/img/category/' . $cat->image) }}" alt=""
                                            width="40px">
                                    </td>
                                    <td>{{ $cat->title }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="switch-{{ $cat->id }}" onclick="changeLabel('{{ $cat->id }}')"
                                                @if ($cat->status == 1) checked @endif>
                                            <label class="form-check-label" for="switch-{{ $cat->id }}"> <span
                                                    class="status{{ $cat->id }}">{{ $cat->status == 1 ? 'Hiện' : 'Ẩn' }}</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $cat->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('categories.edit', $cat->id) }}"><i
                                                    class="bi bi-pencil"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" id="delete-categories"
                                                class="btn btn-sm btn-danger show_confirm"><i
                                                    class="bi bi-trash"></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endsection

@section('custom_script')
    <script>
        function changeLabel(cate_id) {
            document.querySelector('.status' + cate_id).innerHTML = (document.querySelector('.status' + cate_id).innerHTML == 'Hiện') ? 'Ẩn':'Hiện';
            // if (document.querySelector('.status' + cate_id).innerHTML == 'Hiện') {
            //     document.querySelector('.status' + cate_id).innerHTML = 'Ẩn';
            // } else {
            //     document.querySelector('.status' + cate_id).innerHTML = 'Hiện';
            // }
        }
        $(document).ready(function() {
            $(".form-check-input").on("change", function() {
                var categoryId = $(this).attr("id").replace("switch-", "");
                var status = $(this).is(":checked") ? 1 : 0;

                $.ajax({
                    url: "{{ route('categories.update_status', ':id') }}".replace(':id',
                        categoryId),
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status
                    },
                    success: function(response) {
                        // Cập nhật trạng thái của checkbox dựa trên kết quả AJAX
                        if (response.status === 'success') {
                            $("#switch-" + categoryId).prop("checked", response.data.status ===
                                1);
                            $("label[for='switch-" + categoryId + "']").text(response.data
                                .status === 1 ? "Hiện" : "Ẩn");
                        } else {
                            // Xử lý lỗi nếu có
                            console.log(response.message);
                        }
                    },
                    error: function(xhr, status, error) {

                    }
                });
            });
        });
    </script>
@endsection
