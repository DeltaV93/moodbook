@extends('layouts.master')

@section('content')
<div class="container ">
    <h2 class="login--welcome text-center">Hey new friend!</h2>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}
                <div class="col-md-6 form-group form-group--siginup">
                    <div class="col-md-3 col-sm-offset-4 login--label">
                        
                        <label class="col-md-4 control-label">Frist Name:</label>
                    </div>

                    <div class="col-md-5 signup--sm">
                        <input type="text" class="col-md-12 form-control defult--input" name="first_name" value="{{ old('first_name') }}">
                    </div>
                </div>
                    <div class="col-md-6 form-group form-group--siginup">
                        <div class="col-md-3 login--label">
                            
                            <label class="col-md-4 control-label">Last Name:</label>
                        </div>

                        <div class="col-md-5 signup--sm">
                            <input type="text" class="col-md-12 form-control defult--input" name="last_name" value="{{ old('last_name') }}">
                        </div>
                    </div>
                    <div class="col-md-12 form-group form-group--siginup">
                        <div class="col-md-1 col-sm-offset-2 login--label">
                            
                            <label class="col-md-4 control-label">Email:</label>
                        </div>
                        <div class="col-md-6 col-sm-offset-1 signup--lg">         
                            <input type="email" class="col-md-12 form-control defult--input" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-md-12 form-group form-group--siginup">
                        <div class="col-md-1 col-sm-offset-2 login--label">
                            
                            <label class="col-md-4 control-label">Create Password:</label>
                        </div>
                        <div class="col-md-6 col-sm-offset-1 signup--lg">
                            <input type="password" class="col-md-12 form-control defult--input" name="password">
                        </div>
                    </div>
                    <div class="col-md-12 form-group form-group--siginup">
                        <div class="col-md-1 col-sm-offset-2 login--label">
                            
                            <label class="col-md-4 control-label">Confirm Password:</label>
                        </div>
                        <div class="col-md-6 col-sm-offset-1 signup--lg">
                            <input type="password" class="col-md-12 form-control defult--input" name="password_confirmation">
                        </div>
                                    
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-8 form-button">
                            <button type="submit" class="btn btn-defult defult--input form-control">
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
<p class="light italic opensans login--signup">LOGIN WITH FACEBOOK <a href="redirect/facebook"> Click here</a></p>
<p class="light italic opensans login--signup">LOGIN WITH twitter <a href="redirect/twitter"> Click here</a></p>
    </form>
@endsection
