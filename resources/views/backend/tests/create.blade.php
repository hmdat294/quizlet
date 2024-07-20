@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Question</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('tests.index') }}"><i class="bx bx-book"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Tạo Quiz mới</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <hr />
        <form action="{{ route('tests.store') }}" method="POST" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Tạo bài Quiz</h5>
                    </div>
                    <hr>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">Tên bài Quiz</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="title" name="title"
                                    placeholder="Enter Title" required>
                                <div class="invalid-feedback">Vui lòng nhập tên bài Quiz.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="duration" class="form-label">Thời gian</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="duration" name="duration"
                                    value="35" required>
                                <div class="invalid-feedback">Vui lòng nhập thời gian của bài quiz.</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="description" class="form-label">Mô tả bài quiz</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description..." rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-book me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Danh sách câu hỏi</h5>
                    </div>
                    <hr>
                    <div id="questions-container">
                        <div class="mb-6 question-container mt-3" data-question-counter="0">
                            <div class="col-12">
                                <label for="questions" class="form-label">Câu hỏi: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-start-0" id="question"
                                        name="questions[0][question]" placeholder="Enter Name" required>
                                    <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                </div>
                            </div>

                            <label class="block text-gray-700 font-bold mt-2">Danh sách câu trả lời:</label>
                            @for ($i = 0; $i < 2; $i++)
                                <div class="row row my-2 border p-2" style="border-radius:10px;">
                                    @for ($j = 0; $j < 2; $j++)
                                        <div class="col-6 ">
                                            <label for="questions[{{ $i * 2 + $j }}][options][]" class="form-label">Câu
                                                trả lời {{ $i * 2 + $j + 1 }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control border-start-0"
                                                    id="questions[{{ $i * 2 + $j }}][options][]"
                                                    name="questions[{{ $i * 2 + $j }}][options][]"
                                                    placeholder="Câu trả lời {{ $i * 2 + $j + 1 }}">
                                                <div class="invalid-feedback">Hãy nhập câu trả lời hợp lệ.</div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            @endfor
                            <div class="col-4">
                                <label for="correct_answer" class="form-label">Chọn câu trả lời đúng</label>
                                <select name="questions[0][correct_answer]" class="form-select p-2 border rounded"
                                    id="answer" name="answer" required>
                                    <option selected disabled value="">Chọn câu trả lời đúng</option>
                                    @for ($i = 1; $i <= 4; $i++)
                                        <option value="{{ $i }}">Câu trả lời {{ $i }}</option>
                                    @endfor
                                </select>
                                <div class="invalid-feedback">Please Enter a Valid Answer.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 flex justify-between mb-3 mt-3">
                        <button type="button" id="add-question" class="btn btn-primary px-5">Add Question</button>
                        <button type="button" id="remove-question" class="btn btn-danger px-5">Remove Question</button>
                    </div>
                    <div class="col-12 submit-container mb-4">
                        <button type="submit" class="btn btn-danger px-5 rounded">Tạo quiz</button>
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
