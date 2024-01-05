@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body mt-4 mb-4 mx-2">
                    <div class="col-md-12 mx-2 col-12">
                        <img src="{{ asset('img/logo-color.png') }}" alt="" width="150" class="img-fluid">
                        <br>
                        <span>Selamat Datang pada Sistem Absensi</span>
                        <br>
                        <span style="font-weight: bold">( PT. GlobalNet Infinity )</span>
                    </div>

                    @if (session('message'))
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-danger alert-dismissable mb-0"><button type="button" class="close"
                                data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif

                    <div class="card-body mt-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', Session::get('username')) }}" placeholder="Masukan username.." autofocus>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan password.." autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block">
                                    <i class="fa fa-unlock"></i> {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

                <div id="loading"></div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom bg-white p-3">
        <div class="text-center">
            Powered by <a href="#" class="font-weight-bold text-secondary" target="_blank">PT. GlobalNet
                Infinity</a>.
        </div>
    </footer>
</div>
@endsection
