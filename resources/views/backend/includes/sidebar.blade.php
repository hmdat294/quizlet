<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('common/Logo-UnicMinds.png') }}" class="img-fluid" alt="logo icon">

        </div>
        {{-- <div>
            <h4 class="logo-text">UNICMINDS</h4>
        </div> --}}
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Quản lý người dùng</div>
            </a>
            <ul>
                <li> <a href="{{ route('users.create') }}"><i class="bx bx-right-arrow-alt"></i>Tạo mới</a>
                </li>
                <li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>Danh sách</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book"></i>
                </div>
                <div class="menu-title">Chủ đề</div>
            </a>
            <ul>
                <li> <a href="{{ route('categories.create') }}"><i class="bx bx-right-arrow-alt"></i>Tạo chủ đề</a>
                </li>
                <li> <a href="{{ route('categories.index') }}"><i class="bx bx-right-arrow-alt"></i>Danh sách chủ đề</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Quiz</div>
            </a>
            <ul>
                <li> <a href="{{ route('quizs.create') }}"><i class="bx bx-right-arrow-alt"></i>Tạo Quiz</a>
                </li>
                <li> <a href="{{ route('quizs.index') }}"><i class="bx bx-right-arrow-alt"></i>Danh sách Quiz</a>
                </li>
                <li> <a href="{{ route('quizs.results') }}"><i class="bx bx-right-arrow-alt"></i>Danh sách kết quả</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
