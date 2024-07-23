@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">quiz</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('quizs.index') }}"><i class="bx bx-category"></i></a>

                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật Quiz</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <hr />

        <form action="{{ route('quizs.store') }}" method="POST" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="card border-top border-0 border-4 border-primary col-md-3">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Chủ đề</h5>
                    </div>
                    <hr>

                    <div class="row g-3">
                        <label for="category_id" class="form-label">Chọn chủ đề:</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $quiz->category_id) selected class="fw-bold" @endif>{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn chủ đề.</div>
                    </div>
                </div>
            </div>
            <div class="card border-top border-0 border-4 border-primary col-md-9">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Cập nhật thông tin Quiz</h5>
                    </div>
                    <hr>

                    <div class="row g-3">
                        <div class="col-md-7">
                            <label for="title" class="form-label">Tên bài Quiz</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="title" name="title"
                                    placeholder="Enter Title" value="{{ $quiz->title }}" required>
                                <div class="invalid-feedback">Vui lòng nhập tên bài Quiz.</div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="duration" class="form-label">Thời gian</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="duration" name="duration"
                                    value="{{ $quiz->duration }}" required>
                                <div class="invalid-feedback">Vui lòng nhập thời gian của bài quiz.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Mô tả bài quiz</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Mô tả" rows="3">{{$quiz->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
        <script>
            let questionCounter = 1;

            document.getElementById('add-question').addEventListener('click', function() {
                const questionsContainer = document.getElementById('questions-container');
                const newQuestionContainer = document.querySelector('.question-container').cloneNode(true);
                newQuestionContainer.dataset.questionCounter = questionCounter;
                newQuestionContainer.querySelectorAll('input, select').forEach(input => {
                    input.value = '';
                    input.name = input.name.replace('[0]', `[${questionCounter}]`);
                });
                newQuestionContainer.querySelector('label[for="questions"]').textContent =
                    `Câu hỏi ${questionCounter + 1}:`;

                questionsContainer.appendChild(newQuestionContainer);
                questionCounter++;
            });

            document.getElementById('remove-question').addEventListener('click', function() {
                const questionsContainer = document.getElementById('questions-container');
                const questionContainers = questionsContainer.querySelectorAll('.question-container');
                if (questionContainers.length > 1) {
                    questionsContainer.removeChild(questionContainers[questionContainers.length - 1]);
                    questionCounter--;
                }
            });
        </script>
    </div>
@endsection
