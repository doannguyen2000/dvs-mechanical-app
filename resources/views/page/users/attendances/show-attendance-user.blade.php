@extends('layout.main')
@section('content')
    <div class="border border-bottom-0 rounded">
        <div class="d-flex justify-content-between p-2 border-bottom">
            <h5 class="text-white">
                <span class="text-primary"> Nguyễn văn A</span>
            </h5>
            <h5>
                <a href="{{ route('users.getList') }}">
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
            </h5>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="{{ route('users.show', ['id' => request()->id]) }}"
                    class="nav-link @if (Route::currentRouteName() === 'users.show') active @endif"
                    aria-current="page">{{ __('Thông tin') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.jobs.get-list', ['id' => request()->id]) }}"
                    class="nav-link @if (strstr(Route::currentRouteName(), 'users.jobs')) active @endif">{{ __('Công việc') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.attendances.get-list', ['id' => request()->id]) }}"
                    class="nav-link @if (strstr(Route::currentRouteName(), 'users.attendances')) active @endif">{{ __('Chuyên cần') }}</a>
            </li>
        </ul>
        <div class="container-fluid p-3">
            <section>
                <div class="card mb-1">
                    <div class="card-header">{{ __('Ngày 30 - 10 -2003') }}</div>
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between p-2">
                            <span class="badge rounded-pill text-bg-info">Đã chấm công</span>
                            <span class="badge rounded-pill text-bg-info">8h - 15h</span>
                        </div>
                        <div class="container-fluid p-2">
                            <div class="card">
                                <div class="card-header p-1">
                                    Lý do nghỉ
                                </div>
                                <div class="card-body">
                                    <p>Lý do nghỉ hiển thị ở đây</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="card mb-1">
                    <div class="card-header">{{ __('Lịch làm việc ngày 30 - 10 -2003') }}</div>
                    <div class="card-body p-2">
                        <div class="list-group">
                            @for ($i = 0; $i < 3; $i++)
                                <a href="{{ route('users.jobs.show-job-user', ['id' => request()->id, 'jobId' => $i]) }}"
                                    class="list-group-item list-group-item-action list-group-item-secondary">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1 text-primary">Công việc {{ $i }}</h6>
                                        <small class="text-white">6h - 8h</small>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
