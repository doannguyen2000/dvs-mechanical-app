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
                <div class="card mb-1 " style="height: 165px;">
                    <h6 class="card-header px-1">{{ __('Ngày hôm nay') }}</h6>
                    <div class="card-body p-0" style="height: 139.8px;">
                        <div class="d-flex justify-content-between p-2 border-bottom">
                            <span class="badge rounded-pill text-bg-info">Đã chấm công</span>
                            <span class="badge rounded-pill text-bg-info">Đang làm việc</span>
                        </div>
                        <div class="container-fluid p-1 bg-secondary-subtle text-secondary border-bottom mb-1">
                            <div class="row g-1">
                                <div class="col-md">
                                    <p class="fw-bold bg-dark px-2 my-auto border rounded">
                                        {{ __('Tổng số ngày đi làm: 12') }}</p>
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold bg-dark px-2 my-auto border rounded">
                                        {{ __('Tổng số ngày nghỉ: 12') }}</p>
                                </div>
                                <div class="col-md">
                                    <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Tháng này: 12') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="d-flex justify-content-between mb-1">
                    <div class="">
                        <div class="filter-box p-0 d-inline-block align-baseline">
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả trạng thái') }}</option>
                                <option value="0">{{ __('Không lý do') }}</option>
                                <option value="1">{{ __('Có lý do') }}</option>
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả trạng thái') }}</option>
                                <option value="0">{{ __('Đi làm') }}</option>
                                <option value="1">{{ __('Không đi làm') }}</option>
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
                                        <option selected>{{ __('Tất cả trạng thái') }}</option>
                                        <option value="0">{{ __('Không lý do') }}</option>
                                        <option value="1">{{ __('Có lý do') }}</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>{{ __('Tất cả trạng thái') }}</option>
                                        <option value="0">{{ __('Đi làm') }}</option>
                                        <option value="1">{{ __('Không đi làm') }}</option>
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
                </div>
                <div class="table-responsive p-0 border rounded-top" style="height: 245.6px;">
                    <table class="table table-bordered mb-0" style=" min-width: 666px;">
                        <thead>
                            <tr>
                                <th scope="col">Mã code</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Trạng thái đi làm</th>
                                <th scope="col">Lý do nghỉ</th>
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
                                        <span><i class="fa-solid fa-eye text-primary"></i></span>
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
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Tổng số: 12') }}</p>
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

        </div>
    </div>

@endsection
