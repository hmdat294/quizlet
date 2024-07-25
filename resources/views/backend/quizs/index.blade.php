@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Quizs</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('quizs.index') }}"><i class="bx bx-category"></i></a>

                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Quizs Management</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Quizs List</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tiêu đề</th>
                            <th>Thời gian</th>
                            <th>Cấp độ</th>
                            <th>Mô tả</th>
                            <th>Câu hỏi</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizs as $i => $quiz)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $quiz->title }}</td>
                            <td>{{ $quiz->duration }}</td>
                            <td>{{
                                ($quiz->level == 0)?'Cơ bản':
                                (($quiz->level == 1)?'Trung bình':
                                (($quiz->level == 2)?'Nâng cao':''))
                            }}</td>
                            <td>{{ $quiz->description }}</td>
                            <td><a class="btn btn-sm btn-warning" href="{{ route('quizs.questions', $quiz->id) }}" title="Danh sách câu hỏi">
                                    <i class="bi bi-list"></i> Câu hỏi
                                </a></td>
                            <td class="d-flex gap-2">

                                <div>
                                    <a class="btn btn-sm btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#Quiz{{$quiz->id}}">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <div class="modal fade" id="Quiz{{$quiz->id}}" tabindex="-1" aria-labelledby="QuizLabel{{$quiz->id}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <form action="{{route('quizs.update', $quiz->id)}}" method="post" class="modal-content">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="QuizLabel{{$quiz->id}}">Sửa chủ đề</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row my-2">

                                                        <div class="form-group col-6">
                                                            <label class="form-label my-2">Tiêu đề</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề" value="{{$quiz->title}}">
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="level" class="form-label my-2">Chọn loại cấp độ:</label>
                                                            <select class="form-select" id="level" name="level">
                                                                <option value="0" {{($quiz->level == 0)?'selected':''}}>Cơ bản</option>
                                                                <option value="1" {{($quiz->level == 1)?'selected':''}}>Trung bình</option>
                                                                <option value="2" {{($quiz->level == 2)?'selected':''}}>Nâng cao</option>
                                                            </select>
                                                            <div class="invalid-feedback">Vui lòng chọn loại cấp độ.</div>
                                                        </div>

                                                        <div class="form-group col-2">
                                                            <label class="form-label my-2">Thời gian</label>
                                                            <input type="text" class="form-control" name="duration" placeholder="Thời gian" value="{{$quiz->duration}}">
                                                        </div>

                                                    </div>


                                                    <div class="row my-2">

                                                        <div class="form-group col-6">
                                                            <label class="form-label my-2">Danh mục</label>
                                                            <input type="text" class="form-control" value="{{App\Models\Category::find($quiz->category_id)->title}}" disabled>
                                                        </div>

                                                        <div class="form-group col-6">
                                                            <label class="form-label my-2">Loại câu hỏi</label>
                                                            <input type="text" class="form-control" value="{{
                                                                ($quiz->type == 0)?'Trắc nghiệm':
                                                                (($quiz->type == 1)?'Điền vào chỗ trống':
                                                                (($quiz->type == 2)?'Kết hợp':''))
                                                            }}" disabled>
                                                        </div>

                                                    </div>

                                                    <div class="form-group my-2">
                                                        <label for="description" class="form-label">Mô tả bài quiz</label>
                                                        <textarea class="form-control" id="description" name="description" placeholder="Mô tả" rows="3">{{$quiz->description}}</textarea>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('quizs.destroy', $quiz->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" id="delete-quiz" class="btn btn-sm btn-danger show_confirm"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->


</div>
@endsection