@extends('layouts.app')
<title>家計簿ログイン画面</title>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="card-header text-center lead">{{ __('家計簿ログイン画面') }}</div>
=======
                <div class="card-header">{{ __('Login') }}</div>
>>>>>>> a3dc26ba4d37e7b22f203a85b46254264a401ee4
=======
                <div class="card-header text-center lead">{{ __('家計簿ログイン画面') }}</div>
>>>>>>> 854bab22770f0ff31524eb8e0308456890a3d3db

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
<<<<<<< HEAD
<<<<<<< HEAD
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
=======
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
>>>>>>> a3dc26ba4d37e7b22f203a85b46254264a401ee4
=======
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
>>>>>>> 854bab22770f0ff31524eb8e0308456890a3d3db

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
<<<<<<< HEAD
<<<<<<< HEAD
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
=======
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
>>>>>>> a3dc26ba4d37e7b22f203a85b46254264a401ee4
=======
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
>>>>>>> 854bab22770f0ff31524eb8e0308456890a3d3db

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <a class="btn btn-link" href="/register" >{{ __('New member registration here') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
