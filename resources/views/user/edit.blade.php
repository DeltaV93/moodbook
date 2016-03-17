@extends('layouts.user_master')
@section('content')


<div class="">
	<div class="entry_view--icons row">

		<div class="con-sm-6 pull-left">
			<ul class="list-unstyled">
				<li>back arrow</li>
			</ul>
		</div>

		<ul class="col-sm-6 list-unstyled list-inline pull-right" style="width: 155px;">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
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