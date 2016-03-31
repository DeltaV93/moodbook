@extends('layouts.user_master')

@section('content')
<div class="row">

	<div class="form-group">
		{!! Form::open(['url' => '/user' ]) !!}
			@include('user.partials.create', ['submitButton' => "Add"])
			{{--@include('user.partials.errors')--}}
		{!! Form::close() !!}

	</div>
</div>
		{!! HTML::script('js/toolbar.js') !!}
        {!! HTML::script('js/advanced_and_extended.js') !!}
        {!! HTML::script('js/editor.js') !!}
@endsection