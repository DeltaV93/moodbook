@extends('layouts.user_master')

@section('content')
<div class="row">
<h1>Adding Editor</h1>
	<div class="form-group">
		{!! Form::open(['url' => '/user']) !!}
			@include('user.partials.create', ['submitButton' => "Add"])
			{{--@include('user.partials.errors')--}}
		{!! Form::close() !!}

	</div>
</div>
@endsection