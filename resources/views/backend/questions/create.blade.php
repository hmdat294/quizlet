@extends('backend.layout.template')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Question</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('questions.index') }}"><i class="bx bx-book"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Question</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <hr />
<<<<<<< HEAD
        <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Tạo Quiz</h5>
                    </div>
                    <hr>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">Tên bài Quiz</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="title" name="title"
                                    placeholder="Enter Title" required>
                                <div class="invalid-feedback">Please Enter a Title.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="duration" class="form-label">Thời gian</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="duration" name="duration"
                                    value="35" required>
                                <div class="invalid-feedback">Please Enter a Value.</div>
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
=======

        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-book me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">Question Form</h5>
                </div>
                <hr>
                <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data"
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-4">
                        <label for="test_id" class="form-label">Chọn đề Quiz</label>
                        <select class="form-select" id="test_id" name="test_id" required>
                            <option selected disabled value="">Chọn đề Quiz</option>
                            @foreach ($tests as $test)
                                <option value="{{ $test->id }}">{{ $test->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a valid Test.</div>
                    </div>

>>>>>>> minhdat
                    <div id="questions-container">
                        <div class="mb-6 question-container" data-question-counter="0">
                            <div class="col-12">
                                <label for="questions" class="form-label">Câu hỏi: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-start-0" id="question"
                                        name="questions[0][question]" placeholder="Enter Name" required>
                                    <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                </div>
                            </div>

                            <label class="block text-gray-700 font-bold mt-2">Danh sách câu trả lời:</label>
<<<<<<< HEAD
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
                                                    placeholder="Option {{ $i * 2 + $j + 1 }}">
                                                <div class="invalid-feedback">Hãy nhập câu trả lời hợp lệ.</div>
                                            </div>
                                        </div>
                                    @endfor
=======
                            @for ($i = 0; $i < 4; $i++)
                                {{-- <input type="text" name="questions[0][options][]" class="w-full p-2 border rounded mb-2"> --}}
                                <div class="row row my-2 border p-2" style="border-radius:10px;">
                                    <div class="col-6">
                                        <label for="questions[0][options][]" class="form-label">Câu trả lời
                                            {{ $i + 1 }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control border-start-0"
                                                id="questions[0][options][]" name="questions[0][options][]"
                                                placeholder="Option 1">
                                            <div class="invalid-feedback">Hãy nhập câu trả lời hợp lệ.</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="questions[0][options][]" class="form-label">Hoặc upload hình
                                            ảnh.</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control border-start-0"
                                                id="questions[0][options][]" name="questions[0][options][]">
                                        </div>
                                    </div>
>>>>>>> minhdat
                                </div>
                            @endfor
                            <div class="col-4">
                                <label for="correct_answer" class="form-label">Câu trả lời</label>
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

                    <div class="col-12 flex justify-between mb-3">
                        <button type="button" id="add-question" class="btn btn-primary px-5">Add Question</button>
                        <button type="button" id="remove-question" class="btn btn-danger px-5">Remove Question</button>
                    </div>
                    <div class="col-12 submit-container mb-4">
                        <button type="submit" class="btn btn-danger px-5 rounded">Tạo quiz</button>
                    </div>
<<<<<<< HEAD
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
{{-- Gốc: --}}
{{-- <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data"
=======
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
                {{-- <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data"
>>>>>>> minhdat
                    class="row g-3 needs-validation" novalidate>

                    @csrf
                    <div class="col-12">
                        <label for="question" class="form-label">Question</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-start-0" id="question" name="question"
                                placeholder="Enter Name" required>
                            <div class="invalid-feedback">Please Enter a Question.</div>
                        </div>
                    </div>

                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                        <div class="col-6">
                            <label for="option_1" class="form-label">Option 1</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="option_1" name="option_1"
                                    placeholder="Option 1">
                                <div class="invalid-feedback">Please Enter a Valid Option.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="option_1" class="form-label">Or Upload an image.</label>
                            <div class="input-group">
                                <input type="file" class="form-control border-start-0" id="option_1" name="option_1">
                            </div>
                        </div>

                    </div>

                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                        <div class="col-6">
                            <label for="option_2" class="form-label">Option 2</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="option_2" name="option_2"
                                    placeholder="Option 2">
                                <div class="invalid-feedback">Please Enter a Valid Option.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="option_2" class="form-label">Or Upload an image.</label>
                            <div class="input-group">
                                <input type="file" class="form-control border-start-0" id="option_2" name="option_2">
                            </div>
                        </div>
                    </div>

                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                        <div class="col-6">
                            <label for="option_3" class="form-label">Option 3</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="option_3" name="option_3"
                                    placeholder="Option 3">
                                <div class="invalid-feedback">Please Enter a Valid Option.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="option_3" class="form-label">Or Upload an image.</label>
                            <div class="input-group">
                                <input type="file" class="form-control border-start-0" id="option_3" name="option_3">
                            </div>
                        </div>
                    </div>

                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                        <div class="col-6">
                            <label for="option_4" class="form-label">Option 4</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="option_4" name="option_4"
                                    placeholder="Option 4">
                                <div class="invalid-feedback">Please Enter a Valid Option.</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="option_4" class="form-label">Or Upload an image.</label>
                            <div class="input-group">
                                <input type="file" class="form-control border-start-0" id="option_4"
                                    name="option_4">
                            </div>
                        </div>

                    </div>

                    <div class="col-4">
                        <label for="answer" class="form-label">Answer</label>

                        <select class="form-select" id="answer" name="answer" required>
                            <option selected disabled value="">Choose Answer</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                        <div class="invalid-feedback">Please Enter a Valid Answer.</div>
                    </div>
                    <div class="col-4">
                        <label for="test_id" class="form-label">Test Name</label>
                        <select class="form-select" id="test_id" name="test_id" required>
                            <option selected disabled value="">Choose Test</option>
                            @foreach ($tests as $test)
                                <option value="{{ $test->id }}">{{ $test->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Please select a valid Test.</div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="addNewQuestion">
                            <label class="form-check-label" for="addNewQuestion">
                                Add New Question
                            </label>
                        </div>
                    </div>
                    <div class="col-12 submit-container">
                        <button type="submit" class="btn btn-danger px-5">Submit</button>
                    </div>
                </form> --}}
<<<<<<< HEAD
=======
            </div>
        </div>
    </div>
@endsection
>>>>>>> minhdat
