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
                            <div class="widgets-icons bg-light-transparent text-white ms-auto"><i
                                    class="bx bxs-category"></i>
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
                        <h3 class="card-title">Thống Kê Lượt Làm Bài</h3>
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
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thống Kê Lượt Làm Bài</h3>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Bài quiz</th>
                            <th>Star</th>
                            <th>Ngày feedback</th>
                            <th>button -> view modal</th>
                        </thead>
                    </table>
                </div>
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
