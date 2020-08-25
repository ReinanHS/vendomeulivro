@extends('layouts.auth')

@section('content')
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="app-brand bg-dark">
                        <a href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ url('/img/logos/120x120-precomposed.png') }}" alt="logo do vendo meu livro">
                        <span class="brand-name">Vendo meu livro</span>
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">
                    <h4 class="text-dark mb-5">{{ __('Login') }}</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control input-lg @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 ">
                                <input id="password" placeholder="{{ __('Password') }}" minlength="8" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex my-2 justify-content-between">
                                    <div class="d-inline-block mr-3">
                                        <label class="control control-checkbox">
                                            {{ __('Remember Me') }}
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <div class="control-indicator"></div>
                                        </label>
                                    </div>
                                    <p><a class="text-blue" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
                                </div>
                                <button type="submit" class="btn btn-lg btn-dark btn-block mb-4">{{ __('Login') }}</button>
                                <p>Não tem uma conta ainda?
                                    <a class="text-blue" href="{{ url('/register') }}">Criar conta</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
