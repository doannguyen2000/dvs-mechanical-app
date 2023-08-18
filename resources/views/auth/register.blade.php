@extends('layout.main')
@section('content')
    <div class="container mt-5" style="width: 560px;">
        <div class="card">
            <div class="card-header">
                <h3>{{ __('Đăng kí') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Tên tài khoản') }}</label>
                        <input type="text"
                            class="form-control @if ($errors->has('name')) border border-danger-subtle @endif"
                            id="name" name="name" placeholder="name">
                        @if ($errors->has('email'))
                            <div id="passwordHelpBlock" class="form-text text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email"
                            class="form-control @if ($errors->has('email')) border border-danger-subtle @endif"
                            id="email" name="email" placeholder="name@example.com">
                        @if ($errors->has('email'))
                            <div id="passwordHelpBlock" class="form-text text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                        <input type="password"
                            class="form-control @if ($errors->has('password')) border border-danger-subtle @endif"
                            id="password" name="password" placeholder="*******">
                        @if ($errors->has('password'))
                            <div id="passwordHelpBlock" class="form-text text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="rePassword" class="form-label">{{ __('Xác nhận mật khẩu') }}</label>
                        <input type="password"
                            class="form-control @if ($errors->has('rePassword')) border border-danger-subtle @endif"
                            id="rePassword" name="password_confirmation" placeholder="*******">
                        @if ($errors->has('rePassword'))
                            <div id="passwordHelpBlock" class="form-text text-danger">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Đăng kí') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
