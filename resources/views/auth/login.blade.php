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
        <form  class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="col-md-12 form-group form-group--login">
                <div class="col-md-1 col-sm-offset-3 login--label">
                    <label class="">Email:</label>
                </div>
                <div class="col-md-5">
                    <input type="email" class="form-control defult--input" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="col-md-12 form-group form-group--login">
                <div class="col-md-1 col-sm-offset-3 login--label"> 
                    <label class="">Password</label>
                </div>

                <div class="col-md-5">            
                    <input type="password" class="col-md-12 form-control defult--input" name="password">
                </div>

            </div>

            <p class="light italic opensans">Need to sign up? <a href="/register"> Click here</a></p>
            <a class="btn btn-link light italic opensans" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
<!--             <p class="light italic opensans login--signup">LOGIN WITH FACEBOOK <a href="redirect/facebook"> Click here</a></p>
            <p class="light italic opensans login--signup">LOGIN WITH twitter <a href="redirect/twitter"> Click here</a></p> -->

            <div class="form-group">
                <div class="col-md-2 col-md-offset-7">
                    <button type="submit" class=" btn__primary">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>                
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-7">

                </div>
            </div>

            <div class="form-group">
<!--                 <div class="col-md-2 col-md-offset-7">
                    <button type="submit" class=" btn__primary">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>

                    
                </div> -->
            </div>
        </form>

    </div>

</div>

@endsection
