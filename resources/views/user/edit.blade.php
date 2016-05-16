@extends('layouts.user_master')
@section('content')

<div class="con-sm-6 pull-left">
	<ul class="list-unstyled">
		<li><a href="{{ URL::previous()}}">Go back </a></li>
	</ul>
</div>



<div class="row">
	<div class="form-group">

		{!! Form::model($entries, ['method' => 'PATCH', 'action' => ['EntriesController@update', $entries->id]]) !!}
				@include('user.partials.create', ['submitButton' => "Update"])

		{!! Form::close() !!}

	</div>
</div>

@endsection 