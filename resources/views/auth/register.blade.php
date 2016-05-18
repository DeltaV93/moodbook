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
<form class="col-md-offset-2 form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {!! csrf_field() !!}
        <div class="form-group form-group--siginup">
            <div class="col-md-1 col-sm-offset-2 login--label">
                
                <label class="control-label">First:</label>
            </div>

            <div class="col-md-4 signup--sm">
                <input type="text" class="col-md-12 form-control defult--input" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
            </div>
        </div>

        <div class="form-group form-group--siginup">
            <div class="col-md-1 col-sm-offset-2 login--label">
                
                <label class="control-label">Last:</label>
            </div>

            <div class="col-md-4 signup--sm">
                <input type="text" class="col-md-12 form-control defult--input" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
            </div>
        </div>
        
            <div class="form-group form-group--siginup">
                <div class="col-md-1 col-sm-offset-2 login--label">
                    <label class="control-label">Email:</label>
                </div>

                <div class="col-md-4 signup--lg">         
                    <input type="email" class="col-md-12 form-control defult--input" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>

            </div>
            <div class="form-group form-group--siginup">
                <div class="col-md-1 col-sm-offset-2 login--label">
                    
                    <label class="control-label">Create Password:</label>
                </div>
                <div class="col-md-4 signup--lg">
                    <input type="password" class="col-md-12 form-control defult--input" placeholder="Create Password" name="password">
                </div>
            </div>
            <div class="form-group form-group--siginup">
                <div class="col-md-1 col-sm-offset-2 login--label">
                    
                    <label class="control-label">Confirm Password:</label>
                </div>
                <div class="col-md-4 signup--lg">
                    <input type="password" class="col-md-12 form-control defult--input" placeholder="Confirm Password" name="password_confirmation">
                </div>
                            
            <div class="form-group">
                <div class="col-md-2 col-md-offset-6 form-button">
                    <button type="submit" class="btn__primary ">
                        <i class="fa fa-btn fa-user"></i>Register
                    </button>
                </div>
            </div>
    </form>
@endsection
