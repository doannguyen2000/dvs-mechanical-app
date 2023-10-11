@extends('layout.main')
@section('content')
    <div class="rounded">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">{{ __('Tài khoản') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Tiền lương') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Trạng thái') }}</a>
            </li>
        </ul>
        <div class="container-fluid p-3">
            <section>
                <h5 class="text-white">{{ __('Quản lý tài khoản') }}</h5>
                <div class="d-flex justify-content-between mb-1">
                    <div class="">
                        <div class="filter-box p-0 d-inline-block align-baseline">
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả vai trò') }}</option>
                                @for ($i = 0; $i < 5; $i++)
                                    <option value="1">{{ __('Vai Trò') . $i }}</option>
                                @endfor
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả trạng thái') }}</option>
                                <option value="0">{{ __('Online') }}</option>
                                <option value="1">{{ __('Offline') }}</option>
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>{{ __('Tất cả hoạt động') }}</option>
                                <option value="0">{{ __('Đang làm việc') }}</option>
                                <option value="1">{{ __('Nghỉ việc') }}</option>
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
                                        <option selected>{{ __('Tất cả vai trò') }}</option>
                                        @for ($i = 0; $i < 5; $i++)
                                            <option value="1">{{ __('Vai Trò') . $i }}</option>
                                        @endfor
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>{{ __('Tất cả trạng thái') }}</option>
                                        <option value="0">{{ __('Online') }}</option>
                                        <option value="1">{{ __('Offline') }}</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>{{ __('Tất cả hoạt động') }}</option>
                                        <option value="0">{{ __('Đang làm việc') }}</option>
                                        <option value="1">{{ __('Nghỉ việc') }}</option>
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
                                <th scope="col">Mã code</th>
                                <th scope="col">Hình đại diện</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">vai trò</th>
                                <th scope="col">Trạng thái</th>
                                <th class="text-center" scope="col">functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 15; $i++)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    @for ($j = 1; $j < 6; $j++)
                                        <td>dữ liệu{{ $j }}</td>
                                    @endfor
                                    <td class="text-center">
                                        <span><a href="{{ route('users.show', ['id' => $i]) }}"><i
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
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Tổng số: 12') }}</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Online: 12') }}</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('đang làm việc: 12') }}</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">{{ __('Đã nghỉ việc: 12') }}</p>
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
                <div class=" warehouse-equipment-statistics bg-secondary-subtle rounded mt-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="today-tab" data-bs-toggle="tab"
                                data-bs-target="#today-tab-pane" type="button" role="tab"
                                aria-controls="today-tab-pane" aria-selected="true">{{ __('Ngày hôm nay') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="today-tab-pane" role="tabpanel"
                            aria-labelledby="today-tab" tabindex="0">
                            <ul class="list-group">
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số tài khoản') }}</a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary"
                                        href="#">{{ __('Tổng số Tài khoản đang online') }}</a>
                                    <span class="badge bg-success rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số tài khoản offline') }}</a>
                                    <span class="badge bg-secondary rounded-pill">2</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered text-light-emphasis">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="addUserModalLabel">{{ __('Thêm tài khoản') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-body">
                    <form class="row g-2">
                        <div class="col-12 mt-0">
                            <label for="inputName" class="form-label">{{ __('Tên tài khoản') }}</label>
                            <input type="text" class="form-control form-control-sm" name="name" id="inputName"
                                placeholder="Tên tài khoản ...">
                        </div>
                        <div class="col-6">
                            <label for="inputEmail" class="form-label">{{ __('Email') }}</label>
                            <input type="email" class="form-control form-control-sm" name="email" id="inputEmail"
                                placeholder="Địa chỉ email">
                        </div>
                        <div class="col-6">
                            <label for="inputPassword" class="form-label">{{ __('Mật khẩu') }}</label>
                            <input type="password" class="form-control form-control-sm" id="inputPassword"
                                placeholder="Mật khẩu gồm 6-13 kí tự">
                        </div>
                        <div class="col-12">
                            <label for="inputRole" class="form-label">{{ __('Vai trò') }}</label>
                            <select id="inputRole" name="role_code" class="form-select form-select-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inputProvince" class="form-label">{{ __('Tỉnh') }}</label>
                            <select id="inputProvince" class="form-select form-select-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inputDistrict" class="form-label">{{ __('Huyện') }}</label>
                            <select id="inputDistrict" class="form-select form-select-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inputWard" class="form-label">{{ __('Xã') }}</label>
                            <select id="inputWard" class="form-select form-select-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">{{ __('Địa chỉ cụ thể') }}</label>
                            <input type="text" class="form-control form-control-sm" id="inputAddress"
                                placeholder="Thôn, xã, số nhà, đường, ...">
                        </div>

                        <div class="col-12 mt-3">
                            <button type="button" class="btn btn-sm btn-secondary me-2"
                                data-bs-dismiss="modal">{{ __('Quay lại') }}</button>
                            <button type="button" class="btn btn-sm btn-primary">{{ __('Thêm') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
