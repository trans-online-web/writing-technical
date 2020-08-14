@extends('layouts.app')

@section('content')
<div class="call-to-action-wrapper parallax" data-parallax-speed="0.55" data-bg="/img/call-to/call-to-bg-5.jpg"
    style="background-position: center 24.45%; background-image: url(&quot;assets/img/call-to/call-to-bg-5.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class=" call-to-action-content call-to-action-content--startup">
                    <div class="row justify-content-center">
                        <div class="pt-5 mt-5">
                            <div class="pt-5 mt-5">
                                <div class="pt-5 mt-5">
                                    <div class="col-md-8 pt-5 mt-5">
                                        <div class="signup-form">
                                            <form method="POST" action="{{ route('log') }}">
                                                @csrf
                                                <h2>Login</h2>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8">
                                                        @if (Route::has('password.request'))
                                                            <a class="btn-link" href="{{ route('password.request') }}">
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
