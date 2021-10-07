@extends('layouts.home.app')

@section('title')

@section('content')

<section class="content-playlist mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 list-playlist">
                    <div class="row">
                        <div class="container">
                            <div class="col-md-12 ">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12 mt-2">
                                        <div class="card  mt-10" style="width: 30rem;">
                                            <div class="card-header text-white" style="background-color: #000080";><h4>AKTIVASI AKUN</h4></div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{ url('students') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-user-graduate"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="npm_mhs" type="text" class="form-control" name="npm_mhs" autofocus placeholder="NPM Mahasiswa">
                                                            </div>
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fas fa-key"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="token_mhs" type="text" class="form-control" name="token_mhs" autofocus placeholder="Token Mahasiswa">
                                                            </div>
                                                        </div>
                                    
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn btn-lg btn-round btn-primary">LOGIN</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                
            </div>
        </div>
    </div>

</section>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
            </div>
        </div>
    </div>
</div> -->


@endsection