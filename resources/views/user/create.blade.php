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
	@section('scripts')
		<script>
		$(document).ready(function () {			
			var editor = new wysihtml5.Editor("textarea", { // id of textarea element
			  toolbar: "toolbar", // id of toolbar element
			  parserRules: wysihtml5ParserRules // defined in parser rules set 
			});
		});	
			
		</script>	
	@endsection
@endsection