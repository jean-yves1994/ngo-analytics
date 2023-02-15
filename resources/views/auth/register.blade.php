@extends('layouts.app')

@section('styles')
 <link href="{{asset('assets/auth/images/favicon.ico')}}" rel="shortcut icon">
 <link href="{{asset('assets/auth/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/auth/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />    
@endsection

@section('content')
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="index.html" class="auth-logo">
                            <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                            <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                <div class="p-3">
                    <form method="POST" class="form-horizontal mt-3" action="{{route('register')}}">
                            @csrf
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" type="text" required placeholder="Full name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" required placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input class="form-control" name="password_confirmation" type="password" required placeholder="Retype Password">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-primary btn-lg w-100 waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-0 row">
                            <div class="col-12 mt-3 text-center">
                                Already have account? <a href="{{route('login')}}" class="text-muted">Login</a>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
@endsection

@section('name')
<script src="{{asset('assets/auth/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/auth/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('assets/auth/js/app.js')}}"></script>
    
@endsection