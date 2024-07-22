@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Questions</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('quizs.index') }}"><i class="bx bx-book"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Question Management</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('questions.create') }}">
                    <i class="bx bxs-plus-square"></i>Add New Question</a>
            </div>
        </div> --}}
        </div>
        <!--end breadcrumb-->

        <h6 class="mb-0 text-uppercase">Danh sách câu hỏi thuộc: {{ $quiz->title }}</h6>
        <hr />

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Câu hỏi</th>
                                <th>Đáp án 1</th>
                                <th>Đáp án 2</th>
                                <th>Đáp án 3</th>
                                <th>Đáp án 4</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($questions as $question)
                                @php $ans = 'option_' . $question->answer; @endphp
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td class="{{ $question->answer == 1 ? 'fw-bold' : '' }}">{{ $question->question }}
                                    </td>
                                    <td class="{{ $question->answer == 2 ? 'fw-bold' : '' }}">{{ $question->option_2 }}
                                    </td>
                                    <td class="{{ $question->answer == 3 ? 'fw-bold' : '' }}">{{ $question->option_3 }}
                                    </td>
                                    <td class="{{ $question->answer == 4 ? 'fw-bold' : '' }}">{{ $question->option_4 }}
                                    </td>

                                    <td>

                                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm btn-primary" href="#"
                                                onclick="openModal({{ $question->id }})">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" id="delete-question"
                                                class="btn btn-sm btn-danger show_confirm"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="questionModal-{{ $question->id }}" tabindex="-1"
                                    aria-labelledby="questionModalLabel-{{ $question->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="questionModalLabel-{{ $question->id }}">Chỉnh
                                                    sửa câu hỏi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="question-form-{{ $question->id }}" method="POST"
                                                    action="{{ route('questions.update', $question->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="quiz_id" value="{{ $question->quiz_id }}">
                                                    <div class="mb-3">
                                                        <label for="question" class="form-label">Câu hỏi:</label>
                                                        <input type="text" class="form-control" id="question"
                                                            name="question" value="{{ $question->question }}" required>
                                                        <div class="invalid-feedback">Vui lòng nhập câu hỏi.</div>
                                                    </div>
                                                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                                                        <div class="col-6">
                                                            <label for="option_1" class="form-label">Đáp án 1</label>
                                                            <input type="text" class="form-control" id="option_1"
                                                                name="option_1" value="{{ $question->option_1 }}">
                                                            <div class="invalid-feedback">Vui lòng nhập câu trả lời.</div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="option_2" class="form-label">Đáp án 2</label>
                                                            <input type="text" class="form-control" id="option_2"
                                                                name="option_2" value="{{ $question->option_2 }}">
                                                            <div class="invalid-feedback">Vui lòng nhập câu trả lời.</div>
                                                        </div>
                                                    </div>
                                                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                                                        <div class="col-6">
                                                            <label for="option_3" class="form-label">Đáp án 3</label>
                                                            <input type="text" class="form-control" id="option_3"
                                                                name="option_3" value="{{ $question->option_3 }}">
                                                            <div class="invalid-feedback">Vui lòng nhập câu trả lời.</div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="option_4" class="form-label">Đáp án 4</label>
                                                            <input type="text" class="form-control" id="option_4"
                                                                name="option_4" value="{{ $question->option_4 }}">
                                                            <div class="invalid-feedback">Vui lòng nhập câu trả lời.</div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="answer" class="form-label">Đáp án đúng</label>
                                                        <select class="form-select" id="answer" name="answer"
                                                            required>
                                                            <option selected disabled value="">Chọn đáp án đúng
                                                            </option>
                                                            <option value="1"
                                                                @if ($question->answer == 1) selected @endif>Option 1
                                                            </option>
                                                            <option value="2"
                                                                @if ($question->answer == 2) selected @endif>Option 2
                                                            </option>
                                                            <option value="3"
                                                                @if ($question->answer == 3) selected @endif>Option 3
                                                            </option>
                                                            <option value="4"
                                                                @if ($question->answer == 4) selected @endif>Option 4
                                                            </option>
                                                        </select>
                                                        <div class="invalid-feedback">Vui lòng chọn đáp án đúng.</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-danger px-5">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        function openModal(questionId) {
            const modal = document.getElementById(`questionModal-${questionId}`);
            const modalInstance = new bootstrap.Modal(modal);
            modalInstance.show();
        }
    </script>
@endsection
