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
                <h5 class="text-white">{{ __('Bảng lương nhân viên') }}</h5>
                <div class="d-flex justify-content-between mb-1">
                    <div class="">
                        <div class="filter-box p-0 d-inline-block align-baseline">
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả chức vụ') }}</option>
                                @for ($i = 1; $i < 5; $i++)
                                    <option value="1">{{ __('Chức vụ ') . $i }}</option>
                                @endfor
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả mức lương') }}</option>
                                <option value="0">{{ __('< 5 triệu') }}</option>
                                <option value="1">{{ __('5 triệu - 10 triệu') }}</option>
                                <option value="1">{{ __('10 triệu >') }}</option>
                            </select>
                        </div>
                        <div class="filter-button btn-group dropend align-baseline">
                            <button type="button" class="btn btn-sm btn-secondary align-baseline dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Lọc') }}<i class="fa-solid fa-filter ms-1"></i>
                            </button>
                            <ul class="dropdown-menu p-0">
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>{{ __('Tất cả chức vụ') }}</option>
                                        @for ($i = 1; $i < 5; $i++)
                                            <option value="1">{{ __('Chức vụ ') . $i }}</option>
                                        @endfor
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>{{ __('Tất cả mức lương') }}</option>
                                        <option value="0">{{ __('< 5 triệu') }}</option>
                                        <option value="1">{{ __('5 triệu - 10 triệu') }}</option>
                                        <option value="1">{{ __('10 triệu >') }}</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <input type="text"
                            class="filter-search form-control form-control-sm d-inline-block align-baseline"
                            style="width: 100px;" placeholder="Tìm kiếm ...">
                        <button class="btn btn-sm btn-outline-success d-inline-block align-baseline" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <button type="button" class="btn btn-success btn-sm px-1" style="width: 70px;" type="button"
                        data-bs-toggle="modal" data-bs-target="#addUserModal"><i
                            class="fa-solid fa-plus me-1 d-inline"></i>{{ __('Thêm') }}</button>
                </div>
                <div class="table-responsive p-0 border rounded-top" style="height: 245.6px;">
                    <table class="table table-bordered mb-0" style=" min-width: 666px;">
                        <thead>
                            <tr>
                                <th scope="col">Mã nhân viên</th>
                                <th scope="col">Tên nhân viên</th>
                                <th scope="col">Chức vụ</th>
                                <th scope="col">Lương</th>
                                <th class="text-center" scope="col">functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 15; $i++)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    @for ($j = 1; $j < 4; $j++)
                                        <td>dữ liệu{{ $j }}</td>
                                    @endfor
                                    <td class="text-center">
                                        <span><a href="{{ route('users.salaries.show-salary-user', ['id' => $i]) }}"><i
                                                    class="fa-solid fa-eye text-primary"></i></a></span>
                                        <span><i class="fa-regular fa-trash-can text-danger"></i></span>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div
                    class="container-fluid p-1  bg-secondary-subtle text-secondary border border-top-0 rounded-bottom mb-1">
                    <div class="row g-1">
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Tổng số lương nhân viên: 12') }}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="table-functions w-100">
                        <div class="menu-function-button btn-group dropend align-baseline">
                            <button type="button" class="btn btn-sm btn-outline-secondary align-baseline dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <ul class="dropdown-menu p-0">
                                <li>
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>5</option>
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">50</option>
                                        <option value="3">all</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>orther functions</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <select class="item-function-select form-select form-select-sm w-auto d-inline-block"
                            aria-label="Small select example">
                            <option selected>5</option>
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">50</option>
                            <option value="3">all</option>
                        </select>
                        <select class="item-function-select form-select form-select-sm w-auto d-inline-block"
                            aria-label="Small select example">
                            <option selected>orther functions</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="btn-group" role="group" aria-label="First group">
                        @php
                            $totalPages = 10;
                        @endphp
                        @if (request()->page > 1)
                            <a href="{{ url()->current() . '?page=' . request()->page - 1 }}" type="button"
                                class="btn btn-sm btn-outline-secondary"><span>&laquo;</span></a>
                        @endif

                        @if (request()->page > 2)
                            <a href="{{ url()->current() . '?page=1' }}" type="button"
                                class="btn-first-page btn btn-sm btn-outline-secondary"><span>{{ __('Đầu') }}</span></a>
                        @endif

                        @if (request()->page > 1)
                            <a href="{{ url()->current() . '?page=' . request()->page - 1 }}" type="button"
                                class="btn btn-sm btn-outline-secondary"><span>{{ request()->page - 1 }}</span></a>
                        @endif

                        <a href="{{ url()->current() . '?page=' . request()->page }}" type="button"
                            class="btn btn-sm btn-secondary"><span>{{ request()->page }}</span></a>

                        @if ($totalPages - request()->page > 0)
                            <a href="{{ url()->current() . '?page=' . request()->page + 1 }}" type="button"
                                class="btn btn-sm btn-outline-secondary"><span>{{ request()->page + 1 }}</span></a>
                        @endif

                        @if ($totalPages - request()->page > 1)
                            <a href="{{ url()->current() . '?page=' . $totalPages }}" type="button"
                                class="btn-last-page btn btn-sm btn-outline-secondary"><span>{{ __('Cuối') }}</span></a>
                        @endif

                        @if ($totalPages - request()->page > 0)
                            <a href="{{ url()->current() . '?page=' . request()->page + 1 }}" type="button"
                                class="btn btn-sm btn-outline-secondary"> <span>&raquo;</span> </a>
                        @endif
                    </div>
                </div>
            </section>
            <section>
                <div class="card my-1">
                    <h6 class="card-header px-1">{{ __('Bảng lương chung') }}</h6>
                    <div class="card-body p-0">
                        <div class="p-0">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Cơ bản</th>
                                        <th scope="col">Thâm niên</th>
                                        <th scope="col">Phụ cấp</th>
                                        <th scope="col">Thưởng</th>
                                        <th scope="col">Phạt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container-fluid p-1">
                            <button type="button" class="btn btn-sm btn-outline-info w-auto"><span class="me-2"><i
                                        class="fa-regular fa-clipboard text-primary"></i></span>{{ __('Xem chi tiết') }}</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
