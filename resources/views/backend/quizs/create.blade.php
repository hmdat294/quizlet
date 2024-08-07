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
        <form action="{{ route('quizs.store') }}" method="POST" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-md-3">
                <div class="card border-top border-0 border-4 border-primary h-100">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bxs-category me-1 font-22 text-primary"></i>
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
                            <label for="quiz_type" class="form-label">Chọn loại câu hỏi:</label>
                            <select class="form-select" id="quiz_type" name="quiz_type" onchange="disableOpt(this.value)">
                                <option selected disabled value="">Chọn loại câu hỏi</option>
                                <option value="0">Trắc nghiệm</option>
                                <option value="1">Điền vào chỗ trống</option>
                                <option value="2">Kết hợp</option>
                            </select>
                            <input type="hidden" id="type" name="type" value="">
                            <div class="invalid-feedback">Vui lòng chọn loại câu hỏi.</div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card border-top border-0 border-4 border-primary h-100">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bxs-category me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Tạo bài Quiz</h5>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-7">
                                <label for="title" class="form-label">Tên bài Quiz</label>
                                <div class="input-group">
                                    <input type="text" class="form-control rounded" id="title" name="title"
                                        placeholder="Tên bài kiểm tra">
                                    <div class="invalid-feedback">Vui lòng nhập tên bài Quiz.</div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="duration" class="form-label">Thời gian</label>
                                <div class="input-group">
                                    <input type="text" class="form-control rounded" id="duration" name="duration"
                                        value="30">
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
            <div class="col-md-12">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-book me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Danh sách câu hỏi</h5>
                        </div>
                        <hr>
                        <div id="questions-container">
                            <div class="mb-6 question-container question-c mt-3" data-question-counter="0"
                                style="display: none;">
                                <div class="col-12">
                                    <label for="questions" class="form-label">Câu hỏi 1: </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded" id="question"
                                            name="questions[0][question]" placeholder="Nhập câu hỏi">
                                        <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                    </div>
                                </div>

                                <label class="block text-gray-700 font-bold mt-2">Danh sách câu trả lời:</label>
                                @for ($i = 0; $i < 2; $i++)
                                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                                        @for ($j = 0; $j < 2; $j++)
                                            <div class="col-6 ">
                                                <label for="questions[0][options][{{ $i * 2 + $j }}]"
                                                    class="form-label">Câu
                                                    trả lời {{ $i * 2 + $j + 1 }}</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control rounded"
                                                        id="questions[0][options][{{ $i * 2 + $j }}]"
                                                        name="questions[0][options][{{ $i * 2 + $j }}]"
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
                                        id="answer" name="answer">
                                        <option selected disabled value="">Chọn câu trả lời đúng</option>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <option value="{{ $i }}">Câu trả lời {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    <div class="invalid-feedback">Please Enter a Valid Answer.</div>
                                </div>
                            </div>
                        </div>
                        <div id="essays-container">
                            <div class="mb-6 essay-container question-c mt-3" data-essay-counter="0"
                                style="display: none;">
                                <div class="col-12">
                                    <label for="essays" class="form-label">Câu hỏi 1: </label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded" name="essays[0][essay]" id="essay" cols="10" rows="3"
                                            placeholder="Nhập câu hỏi"></textarea>
                                        <div class="invalid-feedback">Hãy nhập câu hỏi của bạn.</div>
                                    </div>
                                </div>

                                <div class="mt-2 d-flex justify-content-between">
                                    <label class="block text-gray-700 font-bold mt-2">Danh sách chỗ
                                        trống:</label>
                                    <div class="d-flex justify-content-evenly gap-2">
                                        <button type="button" class="btn btn-primary px-4 add-blank">Thêm chỗ
                                            trống</button>
                                        <button type="button" class="btn btn-danger px-4 delete-blank">
                                            Xóa chỗ trống
                                        </button>
                                    </div>
                                </div>

                                <div id="blanks-container">
                                    <div class="row row my-2 border p-2" style="border-radius:10px;">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded"
                                                    id="essays[0][blanks][0]" name="essays[0][blanks][0]"
                                                    data-blank-counter="0" placeholder="Chỗ trống 1">
                                                <div class="invalid-feedback">Hãy nhập chỗ trống hợp lệ.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex gap-3 my-4">
                            <button type="button" id="add-question" class="btn btn-primary px-4"
                                style="display: none;">Thêm Quiz trắc
                                nghiệm</button>
                            <button type="button" id="add-essay" class="btn btn-primary px-4"
                                style="display: none;">Thêm
                                Quiz điền vào chỗ
                                trống</button>
                            <button type="button" id="remove-question" class="btn btn-danger px-4"
                                style="display: none;">Xóa</button>
                        </div>
                        <div class="col-12 submit-container mb-4">
                            <button type="submit" id="create-quiz" class="btn btn-success px-5 rounded"
                                style="display: none;">Tạo quiz</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        let hasAddedQuestion = false;
        let hasAddedEssay = false;

        document.getElementById('add-question').addEventListener('click', function() {
            addQuestion();
            hasAddedQuestion = true;
            document.getElementById('quiz_type').disabled = true; // Vô hiệu hóa trường chọn loại câu hỏi
            updateRemoveButtonState(); // Cập nhật trạng thái nút xóa
        });

        document.getElementById('add-essay').addEventListener('click', function() {
            addEssay();
            hasAddedEssay = true;
            document.getElementById('quiz_type').disabled = true; // Vô hiệu hóa trường chọn loại câu hỏi
            updateRemoveButtonState(); // Cập nhật trạng thái nút xóa
        });

        document.getElementById('remove-question').addEventListener('click', function() {
            removeQuestion();
        });

        function addQuestion() {
            const questionsContainer = document.getElementById('questions-container');
            const questionContainers = questionsContainer.querySelectorAll('.question-container');
            const lastQuestionContainer = questionContainers[questionContainers.length - 1];

            const newQuestionContainer = lastQuestionContainer.cloneNode(true);
            const newQuestionCounter = questionContainers.length;

            newQuestionContainer.dataset.questionCounter = newQuestionCounter;

            newQuestionContainer.querySelectorAll('input, select, textarea').forEach(input => {
                // Clear the value
                input.value = '';
                // Update the name attribute
                input.name = input.name.replace(/\[\d+\]/, `[${newQuestionCounter}]`);
                // Update the id attribute
                if (input.id) {
                    const newId = input.id.replace(/\d+/, newQuestionCounter);
                    input.id = newId;
                }
                // Update the for attribute of labels
                if (input.previousElementSibling && input.previousElementSibling.tagName === 'LABEL') {
                    const label = input.previousElementSibling;
                    const newFor = label.htmlFor.replace(/\d+/, newQuestionCounter);
                    label.htmlFor = newFor;
                }
            });

            // Update the question label
            const label = newQuestionContainer.querySelector('label[for^="questions"]');
            if (label) {
                label.textContent = `Câu hỏi ${newQuestionCounter + 1}:`;
            }

            questionsContainer.appendChild(newQuestionContainer);
        }

        function addEssay() {
            const essaysContainer = document.getElementById('essays-container');
            const essayContainers = essaysContainer.querySelectorAll('.essay-container');
            const lastEssayContainer = essayContainers[essayContainers.length - 1];

            const newEssayContainer = lastEssayContainer.cloneNode(true);
            const newEssayCounter = essayContainers.length;

            newEssayContainer.dataset.essayCounter = newEssayCounter;

            // Xóa các ô trống trong câu hỏi mới được nhân bản và reset lại bộ đếm về 1
            const blanksContainer = newEssayContainer.querySelector('#blanks-container');
            blanksContainer.innerHTML = '';

            // Thêm lại ô trống đầu tiên cho câu hỏi mới
            addBlank(newEssayContainer);

            // Cập nhật lại tất cả các thuộc tính name, id và for
            newEssayContainer.querySelectorAll('input, select, textarea').forEach(input => {
                // Clear the value
                input.value = '';
                // Update the name attribute
                input.name = input.name.replace(/\[\d+\]/, `[${newEssayCounter}]`);
                // Update the id attribute
                if (input.id) {
                    const newId = input.id.replace(/\d+/, newEssayCounter);
                    input.id = newId;
                }
                // Update the for attribute of labels
                if (input.previousElementSibling && input.previousElementSibling.tagName === 'LABEL') {
                    const label = input.previousElementSibling;
                    const newFor = label.htmlFor.replace(/\d+/, newEssayCounter);
                    label.htmlFor = newFor;
                }
            });

            // Update the essay label
            const label = newEssayContainer.querySelector('label[for^="essays"]');
            if (label) {
                label.textContent = `Câu hỏi ${newEssayCounter + 1}:`;
            }

            // Thêm sự kiện click cho nút "Thêm chỗ trống" của câu hỏi mới
            const addBlankButton = newEssayContainer.querySelector('.add-blank');
            addBlankButton.addEventListener('click', function() {
                addBlank(newEssayContainer);
            });

            // Thêm sự kiện click cho nút "Xóa chỗ trống" của câu hỏi mới
            const deleteBlankButton = newEssayContainer.querySelector('.delete-blank');
            deleteBlankButton.addEventListener('click', function() {
                deleteBlank(newEssayContainer);
            });

            essaysContainer.appendChild(newEssayContainer);
        }

        function addBlank(container) {
            const blanksContainer = container.querySelector('#blanks-container');
            const blankCounter = blanksContainer.querySelectorAll('[name^="essays["]').length;
            const newBlank = document.createElement('div');
            newBlank.className = 'row my-2 border p-2';
            newBlank.style.borderRadius = '10px';

            newBlank.innerHTML = `
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control rounded"
                            name="essays[${container.dataset.essayCounter}][blanks][${blankCounter}]"
                            placeholder="Chỗ trống ${blankCounter + 1}">
                        <div class="invalid-feedback">Hãy nhập chỗ trống hợp lệ.</div>
                    </div>
                </div>
            `;

            blanksContainer.appendChild(newBlank);
        }

        function deleteBlank(container) {
            const blanksContainer = container.querySelector('#blanks-container');
            const blankDivs = blanksContainer.querySelectorAll('.row');
            if (blankDivs.length > 1) { // Đảm bảo không xóa ô trống cuối cùng
                blanksContainer.removeChild(blankDivs[blankDivs.length - 1]);
            }
        }

        function removeQuestion() {
            const questionContainers = document.querySelectorAll('.question-container');
            const essayContainers = document.querySelectorAll('.essay-container');

            // Xử lý trường hợp là câu hỏi trắc nghiệm
            if (questionContainers.length > 1) {
                const lastQuestionContainer = questionContainers[questionContainers.length - 1];
                lastQuestionContainer.remove();

                // Nếu chỉ còn lại một câu hỏi, bật lại trường chọn loại câu hỏi và vô hiệu hóa nút xóa
                if (questionContainers.length === 1) {
                    document.getElementById('quiz_type').disabled = false;
                    // Cập nhật container nếu cần thiết
                    document.getElementById('questions-container').style.display = 'block';
                    document.getElementById('essays-container').style.display = 'none';
                }
            }

            // Xử lý trường hợp là câu hỏi điền vào chỗ trống
            if (essayContainers.length > 1) {
                const lastEssayContainer = essayContainers[essayContainers.length - 1];
                lastEssayContainer.remove();

                // Nếu chỉ còn lại một câu hỏi, bật lại trường chọn loại câu hỏi và vô hiệu hóa nút xóa
                if (essayContainers.length === 1) {
                    document.getElementById('quiz_type').disabled = false;
                    // Cập nhật container nếu cần thiết
                    document.getElementById('essays-container').style.display = 'block';
                    document.getElementById('questions-container').style.display = 'none';
                }
            }

            updateRemoveButtonState(); // Cập nhật trạng thái nút xóa
        }


        function updateRemoveButtonState() {
            const questionContainers = document.querySelectorAll('.question-container');
            const essayContainers = document.querySelectorAll('.essay-container');

            const removeQuestionButton = document.getElementById('remove-question');

            // Xử lý trạng thái nút xóa câu hỏi trắc nghiệm
            if (questionContainers.length <= 1 && essayContainers.length <= 1) {
                removeQuestionButton.disabled = true;
            } else {
                removeQuestionButton.disabled = false;
            }
        }


        document.querySelectorAll('.add-blank').forEach(button => {
            button.addEventListener('click', function() {
                const essayContainer = this.closest('.essay-container');
                addBlank(essayContainer);
            });
        });

        document.querySelectorAll('.delete-blank').forEach(button => {
            button.addEventListener('click', function() {
                const essayContainer = this.closest('.essay-container');
                deleteBlank(essayContainer);
            });
        });

        function disableOpt(value) {
            // Thiết lập giá trị cho input ẩn
            document.getElementById('type').value = value;
            // Kiểm tra số lượng câu hỏi và cho phép thay đổi loại câu hỏi nếu chỉ còn lại một câu hỏi
            if (hasAddedQuestion || hasAddedEssay) {
                alert("Bạn không thể thay đổi loại câu hỏi sau khi đã thêm quiz.");
                return;
            }

            let add_question = document.getElementById('add-question');
            let add_essay = document.getElementById('add-essay');
            let questions = document.querySelectorAll('.question-container');
            let essays = document.querySelectorAll('.essay-container');
            let remove_question = document.getElementById('remove-question');
            let create_quiz = document.getElementById('create-quiz');

            if (value) {
                remove_question.style.display = 'block';
                create_quiz.style.display = 'block';
            } else {
                remove_question.style.display = 'none';
                create_quiz.style.display = 'none';
            }

            if (value == 0) {
                add_question.style.display = 'block';
                add_essay.style.display = 'none';
                questions.forEach(question => question.style.display = 'block');
                essays.forEach(essay => essay.style.display = 'none');
            } else if (value == 1) {
                add_question.style.display = 'none';
                add_essay.style.display = 'block';
                questions.forEach(question => question.style.display = 'none');
                essays.forEach(essay => essay.style.display = 'block');
            } else if (value == 2) {
                add_question.style.display = 'block';
                add_essay.style.display = 'block';
                questions.forEach(question => question.style.display = 'block');
                essays.forEach(essay => essay.style.display = 'block');
            } else {
                add_question.style.display = 'none';
                add_essay.style.display = 'none';
                questions.forEach(question => question.style.display = 'none');
                essays.forEach(essay => essay.style.display = 'none');
            }
            updateRemoveButtonState();
        }
    </script>



@endsection
