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
                <div class="row g-3">
                    <div class="col-sm-5 col-lg-4 col-xxl-3">
                        <div class="div-avatar-box border rounded h-100 p-2">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/adminAvatar.jpg') }}"
                                    class="w-100 rounded mx-auto d-block" alt="...">
                                <button class="btn btn-sm btn-outline-primary position-absolute top-0 end-0">
                                    <i class="fa-solid fa-camera "></i>
                                </button>

                                <input class="d-none" type="file">
                            </div>
                            <div class="border rounded p-2 pb-auto mt-1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item py-0">{{ __('Họ Tên: ') }}
                                        <span>{{ __('Nguyễn Văn A') }}</span>
                                    </li>
                                    <li class="list-group-item py-0">{{ __('Chức vụ: ') }}
                                        <span>{{ __('Admin') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-8 col-xxl-9">
                        <div class="div-info-box border rounded h-100 p-2">
                            <form class="d-flex flex-column h-100 ">
                                <div class="row rounded text-body mb-3">
                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputFirstName" class="form-label">{{ __('Tên') }}</label>
                                        <input type="text" class="form-control form-control-sm" name="name"
                                            id="inputFirstName" placeholder="Tên ...">
                                    </div>

                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputlastName" class="form-label">{{ __('Họ đệm') }}</label>
                                        <input type="text" class="form-control form-control-sm" name="name"
                                            id="inputlastName" placeholder="Họ đệm ...">
                                    </div>
                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputName" class="form-label">{{ __('Tên tài khoản') }}</label>
                                        <input type="text" class="form-control form-control-sm" name="name"
                                            id="inputName" placeholder="Tên tài khoản ...">
                                    </div>
                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputEmail" class="form-label">{{ __('Email') }}</label>
                                        <input type="email" class="form-control form-control-sm" name="email"
                                            id="inputEmail" placeholder="Địa chỉ email">
                                    </div>
                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputRole" class="form-label">{{ __('Vai trò') }}</label>
                                        <select id="inputRole" name="role_code" class="form-select form-select-sm">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 col-xxl-4">
                                        <label for="inputCitizenID" class="form-label">{{ __('Số CMT/CCCD') }}</label>
                                        <input type="text" class="form-control form-control-sm" id="inputCitizenID"
                                            placeholder="Số thẻ chứng minh thư/căn cước công dân ...">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDepartment" class="form-label">{{ __('Đội công tác') }}</label>
                                        <input type="text" class="form-control form-control-sm" id="inputDepartment"
                                            placeholder="Đội công tác">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="inputProvince" class="form-label">{{ __('Tỉnh') }}</label>
                                        <select id="inputProvince" class="form-select form-select-sm">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="inputDistrict" class="form-label">{{ __('Huyện') }}</label>
                                        <select id="inputDistrict" class="form-select form-select-sm">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4">
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
                                </div>
                                <div class="mt-auto">
                                    <div class="info-setting">
                                        <button type="button" class="btn btn-sm btn-primary w-auto"><span
                                                class="me-2"><i
                                                    class="fa-regular fa-pen-to-square"></i></span>{{ __('Sửa thông tin') }}</button>
                                    </div>
                                    <div class="infor-save d-none">
                                        <button type="button" class="btn btn-sm btn-secondary me-2"
                                            data-bs-dismiss="modal">{{ __('Quay lại') }}</button>
                                        <button type="submit"
                                            class="btn btn-sm btn-primary">{{ __('Lưu') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
