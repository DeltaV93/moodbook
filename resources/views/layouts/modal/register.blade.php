@extends('layouts.master')
@section('content')




	
	{!! Form::open() !!}
		<div class="col-md-6 form-group form-group--siginup">

			<div class="col-md-3 col-sm-offset-4 login--label">
				{!! Form::label('first_name', 'First Name:') !!}	
			</div>

			<div class="col-md-5 signup--sm">
				{!! Form::text('first_name', null, ['class' => 'col-md-12 form-control defult--input', 'placeholder' => 'First Name']) !!}
			</div>
		</div>

		<div class="col-md-6 form-group form-group--siginup">
			<div class="col-md-3 login--label">
				{!! Form::label('last_name', 'Last Name:') !!}
			</div>

			<div class="col-md-5 signup--sm">
				{!! Form::text('last_name', null, ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Last Name']) !!}
			</div>
		</div>
<!--  -->
		<div class="col-md-12 form-group form-group--siginup">
			<div class="col-md-1 col-sm-offset-2 login--label">
				{!! Form::label('email', 'Email:') !!}
			</div>
			<div class="col-md-6 col-sm-offset-1 signup--lg">
				{!! Form::email('email', null, ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Email']) !!}
			</div>
		</div>
<!--  -->
		<div class="col-md-12 form-group form-group--siginup">
			<div class="col-md-1 col-sm-offset-2 login--label">		
				{!! Form::label('password', 'Create Password:') !!}
			</div>
			<div class="col-md-6 col-sm-offset-1 signup--lg">
				{!! Form::password('password', ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Create Password']) !!}
			</div>
		</div>
		
		<div class="col-md-12 form-group form-group--siginup">
			<div class="col-md-1 col-sm-offset-2 login--label">		
				{!! Form::label('password', 'Confirm Password:') !!}
			</div>
			<div class="col-md-6 col-sm-offset-1 signup--lg">
				{!! Form::password('password', ['class' => 'col-md-12 form-control defult--input','placeholder' => 'Confirm Password']) !!}
			</div>
		</div>

			<p class="opensans light italic text-center">Need to login in? <a href="/login"> Click here</a></p>

		<div class=" col-md-2 col-md-offset-8 form-button">
			{!! Form::submit('Next', ['class' => 'btn btn-defult defult--input form-control']) !!}
		</div>
	{!! Form::close() !!}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
	
<!-- <div class="container">
	<h6>Need a faster sign up? Try connecting a accountwith on of you other accounts.</h6>

	{!! Form::submit('Facebook', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Twitter', ['class' => 'btn btn-default form-control']) !!}
	{!! Form::submit('Gmail', ['class' => 'btn btn-default form-control']) !!}
</div> -->

@endsection 