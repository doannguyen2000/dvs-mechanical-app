<nav class="navbar bg-body-tertiary rounded mb-2">
    <div class="d-flex justify-content-between w-100 px-3">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div>
            {{-- Phản hồi --}}
            <div class="btn-group">
                <button type="button" class="btn btn-warning position-relative rounded-5 me-3"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-headset"></i> <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">{{ __('Phản hồi') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('Phản hồi') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('Phản hồi') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('Phản hồi') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('Phản hồi') }}</a></li>
                </ul>
            </div>

            {{-- Thông báo --}}
            <div class="btn-group">
                <button type="button" class="btn btn-primary position-relative rounded-5 me-3"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bell"></i> <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">{{ __('thông báo') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('thông báo') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('thông báo') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('thông báo') }}</a></li>
                    <li><a class="dropdown-item" href="#">{{ __('thông báo') }}</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <img src="{{ asset('assets/images/adminAvatar.jpg') }}" class="border border-primary-subtle rounded-5"
                    style="width: 37px;height: 37px;" alt="..." data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                class="fa-solid fa-right-from-bracket me-1"></i><span
                                class="text-danger">{{ __('Logout') }}</span></a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>
