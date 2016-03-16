@extends('layouts.master')
@section('content')

<div class="container text-center login--form">

	<h2 class="login--welcome">Welcome Back</h2>
	<div class="container">
		{!! Form::open() !!}
			<div class="col-md-12 form-group form-group--login">

				<div class="col-md-1 col-sm-offset-2 login--label">
					{!! Form::label('username', 'Username:') !!}
				</div>

				<div class="col-md-5 col-sm-offset-1">
					{!! Form::text('username', null, ['class' => ' form-control defult--input','placeholder' => 'User']) !!}
				</div>

			</div>

			<div class="col-md-12 form-group form-group--login">
				<div class="col-md-1 col-sm-offset-2 login--label">		
					{!! Form::label('password', 'Password:') !!}
				</div>

				<div class="col-md-5 col-sm-offset-1">
					{!! Form::password('password', ['class' => 'col-md-12 form-control defult--input', 'placeholder' => 'Password']) !!}
				</div>

			</div>

			<p class="light italic opensans login--signup">Need to sign up? <a href="/register"> Click here</a></p>
			<div class="col-md-2 col-md-offset-7">
			{!! Form::submit('Login', ['class' => 'btn btn-defult form-control defult--input defult--button']) !!}
			</div>
		{!! Form::close() !!}
	</div>
</div>
	
<!-- <div class="container text-center">
	<h6 class="login--alt-forms opensans">Need a faster login?  Try connecting a accountwith on of you other accounts.</h6>

	{!! Form::submit('Facebook', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Twitter', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Gmail', ['class' => 'btn btn-default form-control']) !!}
</div> -->
@endsection