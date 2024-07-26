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
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Câu hỏi</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizs as $i => $quiz)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $quiz->title }}</td>
                            <td>{{ $quiz->duration }} phút</td>
                            <td>{{ $quiz->description }}</td>
                            <td>
                                <div>
                                    <small>
                                        <span style="display:inline-block; width: 20px; text-align: center;">
                                            {{ App\Models\Question::where('quiz_id', $quiz->id)->count() }}
                                        </span>
                                        - Trắc nghiệm
                                    </small>
                                </div>
                                <div>
                                    <small>
                                        <span style="display:inline-block; width: 20px; text-align: center;">
                                            {{ App\Models\Essay::where('quiz_id', $quiz->id)->count() }}
                                        </span>
                                        - Điền vào chỗ trống
                                    </small>
                                </div>
                            </td>
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

                                                        <div class="form-group col-8">
                                                            <label class="form-label my-2">Tiêu đề</label>
                                                            <input type="text" class="form-control" name="title" placeholder="Tiêu đề" value="{{$quiz->title}}">
                                                        </div>

                                                        <div class="form-group col-4">
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