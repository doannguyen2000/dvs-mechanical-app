@extends('layout.main')
@section('content')
    <div class="rounded">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link @if (Route::currentRouteName() === 'users.get-list') active @endif" aria-current="page"
                    href="{{ route('users.get-list') }}">{{ __('Tài khoản') }}</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link @if (strstr(Route::currentRouteName(), 'users.salaries')) active @endif"
                    href="{{ route('users.salaries.get-list') }}">{{ __('Tiền lương') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Trạng thái') }}</a>
            </li>
        </ul>
        <div class="container-fluid p-3">
        <section>
                <div class="card mb-1 ">
                    <div class="d-flex justify-content-between card-header px-1">
                        <h6 class="m-0 p-0">Chi tiết bảng lương</h6>
                        <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 me-2">
                            <i class="fa-solid fa-laptop-file border rounded p-1 m-0 bg-dark"></i>
                        </a>
                    </div>
                    <div class="card-body row p-2">
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Mã tài khoản') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Mã tài khoản') }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Tên nhân viên') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Nhân viên ') . request()->jobId }}" readonly>
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label for="" class="form-label">{{ __('Chức vụ') }}</label>
                            <input type="text" class="form-control form-control-sm" id=""
                                value="{{ __('Chức vụ') }}" readonly>
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
