@extends('layouts.user_master')

@section('content')
<div class="row">
	<div class="form-group">
		{!! Form::open(['url' => '/user']) !!}
			@include('user.partials.create', ['submitButton' => "Add"])
			{{--@include('user.partials.errors')--}}
		{!! Form::close() !!}

	</div>
</div>
@endsection