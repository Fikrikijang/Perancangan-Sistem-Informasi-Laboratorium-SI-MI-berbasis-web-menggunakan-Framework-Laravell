@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          

          <div class="card card-primary">
            <div class="card-header text-white text-center" style="background-color: #000083"><h4>{{ __('LOGIN') }}</h4></div>
                <div class="login-brand">
                    <img src="{{url("frontend/assets/img/logolab1.png")}}" alt="logo" width="200" class="" style="display: block; margin: auto;">
                </div>
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" tabindex="1" required="" autofocus="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="password" class="control-label">{{ __('Password') }}</label>
                  </div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"  type="checkbox"  id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('MASUK') }}
                  </button>
                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>
              </form>
              <div class="simple-footer text-center">
                Copyright © Ilabsimi 2020 - Ade Fikriatul Ilmi
              </div>
            </div>
          </div>
          
        </div>
      </div>
</div>
@endsection
