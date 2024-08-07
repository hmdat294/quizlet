@extends('backend.layout.template')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tests</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Test Results</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Test Result List</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Tiêu đề</th>
                            <th>Điểm</th>
                            <th>Ngày</th>
                        </tr>
                    </thead>
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($results as $result)

                    <tbody>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $result->user->name }}</td>
                            <td>{{ $result->quiz->title }}</td>
                            <td>{{ $result->score }}</td>
                            <td>{{ date('d-m-Y', strtotime($result->created_at)) }}</td>
                        </tr>
                    </tbody>

                    @endforeach

                </table>

            </div>
        </div>
    </div>
</div>


<!--app JS-->
{{-- <script src="assets/js/app.js"></script> --}}
@endsection