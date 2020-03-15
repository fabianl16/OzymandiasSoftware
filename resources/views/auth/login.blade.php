@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="https://amar.vote/assets/img/amarVotebd.png" class="w-75" alt="Logo"> </span><br/>
                        <span class="logo_title mt-5"> @lang('Login')</span>
        </div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>                       
                    </div>
                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder=@lang('Email addres') value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder=@lang('Password')>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value=@lang('Login') class="btn btn-outline-danger float-right login_btn">
                </div>
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

            </form>
        </div>
    </div>
</div>
@endsection
