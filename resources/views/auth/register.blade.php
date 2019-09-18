@extends('layouts.app')

@section('content')
<div class="">
    <div class="call-to-action-wrapper parallax" data-parallax-speed="0.55" data-bg="/img/call-to/call-to-bg-5.jpg"
        style="background-position: center 24.45%; background-image: url(&quot;assets/img/call-to/call-to-bg-5.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class=" call-to-action-content call-to-action-content--startup">
                        <div class="row justify-content-center">
                            <div class="pt-5 mt-5">
                                <div class="pt-5 mt-5">
                                    <div class="pt-5 mt-5 try">
                                        <div class="col-md-8 pt-5 mt-5">
                                            <div class="row justify-content-center">
                                                    <div class="col-md-8 p-5" style="margin-top: 80%">
                                                        <div class="signup-form">   
                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf
                                                                <h2>Create Account</h2>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                                        @error('name')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
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
                                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-lock"></i>
                                                                            <i class="fa fa-check"></i>
                                                                        </span>
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                                    </div>
                                                                </div>        
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                                                                </div>
                                                                <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                                                            </form>
                                                            <div class="text-center">Already have an account? <a href="/login">Login here</a>.</div>
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
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8 p-5">
            <div class="signup-form">   
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2>Create Account</h2>
                    <p class="lead">It's free and hardly takes more than 30 seconds.</p>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                                <i class="fa fa-check"></i>
                            </span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                </form>
                <div class="text-center">Already have an account? <a href="/login">Login here</a>.</div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
