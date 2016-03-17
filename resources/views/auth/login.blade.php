@extends('layouts.master')

@section('content')
<div class="container text-center login--form">

    <h2 class="login--welcome">Welcome Back</h2>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="col-md-12 form-group form-group--login">
                <div class="col-md-1 col-sm-offset-2 login--label">                        
                    <label class="">E-Mail Address</label>
                </div>
                <div class="col-md-5 col-sm-offset-1">
                    <input type="email" class="form-control defult--input" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="col-md-12 form-group form-group--login">
                <div class="col-md-1 col-sm-offset-2 login--label"> 
                    <label class="">Password</label>
                </div>

                <div class="col-md-5 col-sm-offset-1">            
                    <input type="password" class="col-md-12 form-control defult--input" name="password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-7">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-defult form-control defult--input defult--button">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>
            </div>
        </form>

    </div>

</div>

@endsection
