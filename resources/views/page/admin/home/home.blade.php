@extends('layout.main')
@section('content')
    <div class="border rounded">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Thiết bị</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">vật liệu</a>
            </li>
        </ul>
        <div class="container-fluid border rounded p-3">
            <section>
                <h5 class="text-white">Tên bảng</h5>
                <div class="d-flex justify-content-between mb-1">
                    <div class="">
                        <div class="filter-box p-0 d-inline-block align-baseline">
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>Lọc 1</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>Lọc 2</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select form-select-sm w-auto d-inline-block align-baseline"
                                aria-label="Small select example">
                                <option selected>Lọc 3</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
                                        <option selected>Lọc 1</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>Lọc 2</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-select form-select-sm w-100 d-inline-block"
                                        aria-label="Small select example">
                                        <option selected>Lọc 3</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-sm btn-outline-success d-inline-block align-baseline" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <button type="button" class="btn btn-success btn-sm px-1" style="width: 70px;"><i
                            class="fa-solid fa-plus me-1 d-inline"></i>{{ __('Thêm') }}</button>
                </div>
                <div class="table-responsive p-0 border rounded-top" style="height: 245.6px;">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cột 1</th>
                                <th scope="col">Cột 2</th>
                                <th class="text-center" scope="col">functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 15; $i++)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>dư liệu</td>
                                    <td>dư liệu</td>
                                    <td class="text-center">
                                        <span><i class="fa-solid fa-eye text-primary"></i></span>
                                        <span><i class="fa-regular fa-trash-can text-danger"></i></span>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="container-fluid p-1  bg-secondary-subtle text-secondary border border-top-0 rounded-bottom mb-1">
                    <div class="row g-1">
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">Tổng số: 12</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">Đang sử dụng: 12</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded">đang sửa chữa: 12</p>
                        </div>
                        <div class="col-md">
                            <p class="fw-bold bg-dark px-2 my-auto border rounded"> Đang cho mượn: 12</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="table-functions w-100">
                        <select class="form-select form-select-sm w-auto d-inline-block" aria-label="Small select example">
                            <option selected>5</option>
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">50</option>
                            <option value="3">all</option>
                        </select>
                        <select class="form-select form-select-sm w-auto d-inline-block" aria-label="Small select example">
                            <option selected>orther functions</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="btn-group" role="group" aria-label="First group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">1</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">2</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">3</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">4</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="border warehouse-equipment-statistics bg-secondary-subtle rounded mt-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="today-tab" data-bs-toggle="tab"
                                data-bs-target="#today-tab-pane" type="button" role="tab"
                                aria-controls="today-tab-pane" aria-selected="true">{{ __('Ngày hôm nay') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="month-tab" data-bs-toggle="tab"
                                data-bs-target="#month-tab-pane" type="button" role="tab"
                                aria-controls="month-tab-pane" aria-selected="false">{{ 'Tháng này' }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="year-tab" data-bs-toggle="tab" data-bs-target="#year-tab-pane"
                                type="button" role="tab" aria-controls="year-tab-pane"
                                aria-selected="false">{{ __('Năm nay') }}</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="today-tab-pane" role="tabpanel"
                            aria-labelledby="today-tab" tabindex="0">
                            <ul class="list-group">
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị') }}</a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang hoạt động') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị mới') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang sửa chữa') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị hỏng') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="month-tab-pane" role="tabpanel" aria-labelledby="month-tab"
                            tabindex="0">
                            <ul class="list-group">
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị') }}</a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang hoạt động') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị mới') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang sửa chữa') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị hỏng') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="year-tab-pane" role="tabpanel" aria-labelledby="year-tab"
                            tabindex="0">
                            <ul class="list-group">
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị') }}</a>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang hoạt động') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị mới') }}</a>
                                    <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị đang sửa chữa') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                                <li
                                    class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                    <a class="text-secondary" href="#">{{ __('Tổng số thiết bị hỏng') }}</a>
                                    <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
