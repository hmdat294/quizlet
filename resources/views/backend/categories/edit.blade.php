@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Chủ đề</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}"><i class="bx bx-book"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật chủ đề</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <hr />
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Cập nhật chủ đề</h5>
                    </div>
                    <hr>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">Tên chủ đề</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="title" name="title"
                                    placeholder="Vui lòng nhập tên chủ đề" value="{{ $category->title }}" required>
                                <div class="invalid-feedback">Vui lòng nhập tên chủ đề.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select class="form-select" id="status" name="status" required>
                                <option selected disabled value="">Lựa chọn</option>
                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Kích hoạt</option>
                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Không kích hoạt
                                </option>
                            </select>
                            <div class="invalid-feedback">Vui lòng chọn trạng thái.</div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="image" class="form-label">Chọn ảnh đại diện</label>
                            <div class="input-group">
                                <input type="file" class="form-control border-start-0" id="image" name="image"
                                    value="35" onchange="previewImage(this)">
                                <div class="invalid-feedback">Chọn ảnh đại diện.</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="current-image" class="form-label">Hình hiện tại:</label>
                            <div class="input-group">
                                <img id="current-image" src="{{ asset('frontend/img/category/' . $category->image) }}"
                                    alt="" class="img-responsive img-thumbnail w-50">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="preview-image" class="form-label">Hình xem trước:</label>
                            <div class="input-group">
                                <img id="preview-image" src="" alt=""
                                    class="img-responsive img-thumbnail w-50" style="display: none;">
                            </div>
                        </div>

                    </div>
                    <div class="col-12 submit-container mb-4 mt-3">
                        <button type="submit" class="btn btn-danger px-5 rounded">Cập nhật chủ đề</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('custom_script')
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result);
                    $('#preview-image').show();
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#preview-image').attr('src', '');
                $('#preview-image').hide();
            }
        }
    </script>
@endsection
