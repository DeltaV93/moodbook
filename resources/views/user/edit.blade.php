@extends('layouts.user_master')
@section('content')

<aside>
</aside>
<div class="container">
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

	<div class="container">
		<div class="row">
			<div class="col-sm-12 entry_view--date pull-right">
				<p class="date__month">Month</p>
				<p class="date__day">Day</p>
				<p class="date__year">Year</p>			
			</div>
		</div>
	</div>
@include('user.partials.create')

</div>
@endsection 