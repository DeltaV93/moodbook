@extends('layouts.user_master')
@section('content')

<div class="container">

	<h2 class="login--welcome">Setting</h2>
		{!! Form::open() !!}
		
			<div class="col-md-6 form-group form-group--siginup">

				<div class="col-md-4 col-sm-offset-2 settings--label">
					{!! Form::label('first_name', 'First Name:') !!}	
				</div>

				<div class="col-md-9 col-md-offset-2 signup--md">
					{!! Form::text('first_name', null, ['class' => 'col-md-12 form-control defult--input', 'placeholder' => 'First Name']) !!}
				</div>
			</div>

			<div class="col-md-6 form-group form-group--siginup">
				<div class="col-md-4 col-sm-offset-1 settings--label">
					{!! Form::label('last_name', 'Last Name:') !!}
				</div>

				<div class="col-md-9 col-md-offset-1 signup--md">
					{!! Form::text('last_name', null, ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Last Name']) !!}
				</div>
			</div>

			<div class="col-md-6 form-group form-group--siginup">

				<div class="col-md-4 col-sm-offset-2 settings--label">
					{!! Form::label('email', 'Email:') !!}
				</div>

				<div class="col-md-9 col-md-offset-2 signup--md">
					{!! Form::email('email', null, ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Email']) !!}
				</div>

			</div>

			<div class="col-md-6 form-group form-group--siginup">

				<div class="col-md-4 col-sm-offset-1 settings--label">
					{!! Form::label('user_photo', 'Photo:') !!}
				</div>

				<div class="col-md-9 col-md-offset-1">
					<div class="col-md-3">
						{!! Form::file('email', null, ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Email']) !!}
					</div>
					<div class="col-md-3 col-md-offset-5">
						<img class="setting--upload-img" src="http://media.tumblr.com/tumblr_lnenqxmj0d1qiw26m.jpg" alt="">
					</div>
				</div>

			</div>

			<div class="col-md-6 form-group form-group--siginup">

				<div class="col-md-5 col-sm-offset-2 settings--label">
					{!! Form::label('password', 'Create Password:') !!}
				</div>

				<div class="col-md-9 col-md-offset-2 signup--md">
					{!! Form::password('password', ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Create Password']) !!}
				</div>

			</div>

			<div class="col-md-6 form-group form-group--siginup">

				<div class="col-md-5 col-sm-offset-2 settings--label">
					{!! Form::label('password', 'Confirm Password:') !!}
				</div>

				<div class="col-md-9 col-md-offset-2 signup--md">
					{!! Form::password('password', ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Confirm Password']) !!}
				</div>

			</div>

			<div class=" col-md-2 col-md-offset-10 form-button form-button--settings">
				{!! Form::submit('Next', ['class' => 'btn btn-defult defult--input form-control']) !!}
			</div>
		{!! Form::close() !!}

</div>


	
<!-- <div class="container">
	<h6>Need a faster sign up? Try connecting a accountwith on of you other accounts.</h6>

	{!! Form::submit('Facebook', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Twitter', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Gmail', ['class' => 'btn btn-default form-control']) !!}
</div> -->

@endsection 

