@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Question</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('quizs.index') }}"><i class="bx bx-book"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tạo Quiz mới</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <hr />
    <form action="{{ route('quizs.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-3">
            <div class="card border-top border-0 border-4 border-primary h-100">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Chủ đề</h5>
                    </div>
                    <hr>

                    <div class="row mb-4">
                        <label for="category_id" class="form-label">Chọn chủ đề:</label>
                        <select class="form-select" id="category_id" name="category_id">
                            <option selected disabled value="">Chọn chủ đề</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn chủ đề.</div>
                    </div>

                    <div class="row mb-4">
                        <label for="type" class="form-label">Chọn loại câu hỏi:</label>
                        <select class="form-select" id="type" name="type">
                            <option selected disabled value="">Chọn loại câu hỏi</option>
                            <option value="0">Trắc nghiệm</option>
                            <option value="1">Điền vào chỗ trống</option>
                            <option value="3">Cả 2</option>
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn loại câu hỏi.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card border-top border-0 border-4 border-primary h-100">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">Tạo bài Quiz</h5>
                    </div>
                    <hr>

                    <div class="row g-3">
                        <div class="col-md-7">
                            <label for="title" class="form-label">Tên bài Quiz</label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded" id="title" name="title" placeholder="Tên bài kiểm tra">
                                <div class="invalid-feedback">Vui lòng nhập tên bài Quiz.</div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="duration" class="form-label">Thời gian</label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded" id="duration" name="duration" value="35">
                                <div class="invalid-feedback">Vui lòng nhập thời gian của bài quiz.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Mô tả bài quiz</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Mô tả..." rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div>
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-book me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Danh sách câu hỏi</h5>
                        </div>
                        <hr>
                        <div id="questions-container">
                            <div class="mb-6 question-container question-c mt-3" data-question-counter="0">
                                <div class="col-12">
                                    <label for="questions" class="form-label">Câu hỏi 1: </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded" id="question" name="questions[0][question]" placeholder="Nhập câu hỏi">
                                        <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                    </div>
                                </div>

                                <label class="block text-gray-700 font-bold mt-2">Danh sách câu trả lời:</label>
                                @for ($i = 0; $i < 2; $i++) <div class="row row my-2 border p-2" style="border-radius:10px;">
                                    @for ($j = 0; $j < 2; $j++) <div class="col-6 ">
                                        <label for="questions[0][options][{{ $i * 2 + $j }}]" class="form-label">Câu
                                            trả lời {{ $i * 2 + $j + 1 }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded" id="questions[0][options][{{ $i * 2 + $j }}]" name="questions[0][options][{{ $i * 2 + $j }}]" placeholder="Câu trả lời {{ $i * 2 + $j + 1 }}">
                                            <div class="invalid-feedback">Hãy nhập câu trả lời hợp lệ.</div>
                                        </div>
                            </div>
                            @endfor
                        </div>
                        @endfor
                        <div class="col-4">
                            <label for="correct_answer" class="form-label">Chọn câu trả lời đúng</label>
                            <select name="questions[0][correct_answer]" class="form-select p-2 border rounded" id="answer" name="answer">
                                <option selected disabled value="">Chọn câu trả lời đúng</option>
                                @for ($i = 1; $i <= 4; $i++) <option value="{{ $i }}">Câu trả lời {{ $i }}</option>
                                    @endfor
                            </select>
                            <div class="invalid-feedback">Please Enter a Valid Answer.</div>
                        </div>
                    </div>

                    <div>
                        <div id="questions-container" style="display: none;">
                            <div class="mb-6 question-container-essay question-c mt-3" data-question-counter="0">

                                <div class="col-12">
                                    <label for="essays" class="form-label">Câu hỏi 1: </label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded" name="essays[0][essay]" id="essay" cols="10" rows="3" placeholder="Nhập câu hỏi"></textarea>
                                        <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                    </div>
                                </div>

                                <div class="mt-2 d-flex justify-content-between">
                                    <label class="block text-gray-700 font-bold mt-2">Danh sách chỗ trống:</label>
                                    <button type="button" id="add-blank" class="btn btn-primary px-4 add-blank-btn">Thêm chỗ trống</button>
                                </div>

                                <div id="blanks-container">
                                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded" id="essays[0][blanks][0]" name="essays[0][blanks][0]" data-blank-counter="0" placeholder="Chỗ trống 1">
                                                <div class="invalid-feedback">Hãy nhập chỗ trống hợp lệ.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex gap-3 my-4">
                <button type="button" id="add-question" class="btn btn-primary px-4">Thêm Quiz trắc nghiệm</button>
                <button type="button" id="add-essay" class="btn btn-primary px-4">Thêm Quiz điền vào chỗ trống</button>
                <button type="button" id="remove-question" class="btn btn-danger px-4">Xóa</button>
            </div>
            <div class="col-12 submit-container mb-4">
                <button type="submit" class="btn btn-success px-5 rounded">Tạo quiz</button>
            </div>

        </div>
    </form>
</div>
<script>
    let questionCounter = 1;

    document.getElementById('add-question').addEventListener('click', function() {
        const questionsContainer = document.getElementById('questions-container');
        if (questionsContainer.style.display == 'none') {
            questionsContainer.style.display = 'block';
        } else {
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
        }

    });

    document.getElementById('add-essay').addEventListener('click', function() {
        const questionsContainer = document.getElementById('questions-container');
        if (questionsContainer.style.display == 'none') {
            questionsContainer.style.display = 'block';
        } else {
            const newQuestionContainer = document.querySelector('.question-container-essay').cloneNode(true);
            newQuestionContainer.dataset.questionCounter = questionCounter;
            newQuestionContainer.querySelectorAll('input, select').forEach(input => {
                input.value = '';
                input.name = input.name.replace('[0]', `[${questionCounter}]`);
            });
            newQuestionContainer.querySelector('label[for="essays"]').textContent =
                `Câu hỏi ${questionCounter + 1}:`;

            questionsContainer.appendChild(newQuestionContainer);
            questionCounter++;
        }
    });


    document.getElementById('remove-question').addEventListener('click', function() {
        const questionsContainer = document.getElementById('questions-container');
        
        let questionContainers = questionsContainer.querySelectorAll('.question-c');

        console.log(questionContainers.length);

        if (questionContainers.length > 2) {
            questionsContainer.removeChild(questionContainers[questionContainers.length - 1]);
            questionCounter--;
        }
    });

    const addBlankButton = document.getElementById('add-blank');
    const blankContainer = document.getElementById('blanks-container');
    let blankCounter = 1;

    addBlankButton.addEventListener('click', () => {
        const newBlank = document.createElement('div');
        newBlank.classList.add('row', 'row', 'my-2', 'border', 'p-2');
        newBlank.style.borderRadius = '10px';

        newBlank.innerHTML = `
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control rounded" id="essays[0][blanks][${blankCounter}]" name="essays[0][blanks][${blankCounter}]" data-blank-counter="${blankCounter}" placeholder="Chỗ trống ${blankCounter + 1}">
                        <div class="invalid-feedback">Hãy nhập chỗ trống hợp lệ.</div>
                    </div>
                </div>
            `;
        blankContainer.appendChild(newBlank);
        blankCounter++;
    });
</script>
</div>
@endsection