@extends('layout.main')
@section('content')
    <div class="container mt-5" style="width: 560px;">
        <div class="card">
            <div class="card-header">
                <h3>{{ __('Đăng nhập') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                {{ 'Nhớ mật khẩu' }}
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Đăng nhập') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
