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
                <a href="{{ route('users.getAttendance', ['id' => request()->id]) }}"
                    class="nav-link @if (Route::currentRouteName() === 'users.getAttendance') active @endif">{{ __('Chuyên cần') }}</a>
            </li>
        </ul>
        <div class="container-fluid p-3">
            <section>
                <div class="card mb-1 ">
                    <div class="d-flex justify-content-between card-header px-1">
                        <h6 class="m-0 p-0">Thông tin chi tiết: {{ __('Công việc ') . request()->jobId }}</h6>
                        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 me-2">
                            <i class="fa-solid fa-laptop-file border rounded p-1 m-0 bg-dark"></i>
                        </a>
                    </div>
                    <div class="card-body row p-2">
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Tên công việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Công việc ') . request()->jobId }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Loại công việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Loại công việc ') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Người thực hiên công việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Người Thực hiện') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Người chỉ đạo công việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Người Chỉ đạo') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Thời gian việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Thời gian làm việc ') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Địa điểm làm việc') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Địa điểm làm việc ') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Trạng thái') }}</label>
                            <input type="text" class="form-control form-control-sm text-success" id=""
                                value="{{ __('Đã hoàn thành') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Vị trí đảm nhận') }}</label>
                            <input type="text" class="form-control form-control-sm text-success" id=""
                                value="{{ __('Vị trí đảm nhận') }}" readonly>
                        </div>
                        <div class="col-12 mb-1">
                            <label for="exampleFormControlTextarea1" class="form-label">{{ __('Ghi chú') }}</label>
                            <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" readonly></textarea>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
