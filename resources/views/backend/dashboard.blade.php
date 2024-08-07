@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 bg-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Người dùng</h4>
                            <h4 class="my-1 text-white">{{ $data['users'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-group"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="mb-0 text-white">Lượt làm bài</h4>
                            <h4 class="my-1 text-white">{{ $data['results'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white"><i class="bx bx-line-chart-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Bài quiz</h4>
                            <h4 class="my-1 text-white">{{ $data['quizs'] }}</h4>

                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-category"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Câu hỏi</h4>
                            <h4 class="my-1 text-white">{{ $data['questions'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-book"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    {{-- Thống kê --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="min-height:610px">
                <div class="card-header">
                    <h3 class="card-title mt-2">Thống Kê Lượt Làm Bài</h3>
                </div>
                <div class="card-body">
                    <canvas id="quizStatsChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="min-height:610px">
                <div class="card-header">
                    <h3 class="card-title">Thống Kê Theo Danh Mục</h3>
                </div>
                <div class="card-body">
                    <canvas id="quizChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-header">
            <h3 class="card-title mt-2">Thống Kê Lượt Đánh Giá</h3>
        </div>

        <div class="row p-3 pb-0">
            <div class="col">
                <div class="card radius-10 bg-secondary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="mb-0 text-white">Lượt đánh giá</h4>
                                <h4 class="my-1 text-white">{{ $data['feedbacks'] }}</h4>
                            </div>
                            <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bi bi-send-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-0 text-white">Mức độ</h4>
                                <h4 class="my-1 text-white">{{ $data['stars'] }} / 5</h4>
                            </div>
                            <div class="widgets-icons bg-light-transparent text-white"><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Bài quiz</th>
                    <th>Star</th>
                    <th>Ngày feedback</th>
                    <th>Nội dung</th>
                </thead>
                <tbody>

                    @foreach ($feedbacks as $i => $feedback)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$feedback->user->name}}</td>
                        <td>{{$feedback->user->email}}</td>
                        <td>{{$feedback->quiz->title}}</td>
                        <td class="text-center">{{$feedback->star}} <i class="bi bi-star-fill text-warning"></i></td>
                        <td class="text-center" style="width: 150px;">{{ date('d-m-Y', strtotime($feedback->created_at)) }}</td>
                        <td class="text-center" style="width: 100px;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackContent{{$feedback->id}}">
                                <i class="bi bi-three-dots"></i>
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="feedbackContent{{$feedback->id}}" tabindex="-1" aria-labelledby="feedbackContentLabel{{$feedback->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="feedbackContentLabel{{$feedback->id}}">Nội dung</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <b>Nội dung:</b> <span>{{$feedback->content}}</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
@endsection
@section('custom_script')
<script>
    var ctx = document.getElementById('quizChart').getContext('2d');
    var quizChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: @json($categoryNames), // Các danh mục
            datasets: [{
                label: 'Số bài quiz',
                data: @json($quizCounts), // Số lượng bài quiz
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                    // Thêm màu sắc cho tất cả các danh mục của bạn
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                    // Thêm màu sắc cho các đường viền
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });
    var ctxStats = document.getElementById('quizStatsChart').getContext('2d');
    var quizStatsChart = new Chart(ctxStats, {
        type: 'bar',
        data: {
            labels: ['Trắc nghiệm', 'Điền vào chỗ trống', 'Kết hợp'],
            datasets: [{
                label: 'Số lượt làm bài',
                data: [
                    @json($results['trắc nghiệm']['completed']),
                    @json($results['điền vào chỗ trống']['completed']),
                    @json($results['kết hợp']['completed']),
                ],
                backgroundColor: [
                    'red', 'blue', 'green'
                ],
                borderColor: [
                    'darkred', 'darkblue', 'darkgreen'
                ],
                borderWidth: 1
            }, {
                label: 'Tổng số quiz',
                data: [
                    @json($results['trắc nghiệm']['total']),
                    @json($results['điền vào chỗ trống']['total']),
                    @json($results['kết hợp']['total']),
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection