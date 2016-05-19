@extends('layouts.user_master')
@section('content')
<div id="wrapper">
	<div id="sidebar-wrapper"style="background-image: linear-gradient(-180deg, lavender 0%, lightblue 51%,lightgreen 100%);" class="entry_post--colorbox">
	    <ul class="sidebar-nav">
	        <li class="sidebar-brand col-sm-12"><img class="img-responsive mbook--profile-img" src="{{ $photo }}"></li>
	        <li class="sidebar-brand mbook--profile-name col-sm-12 text__white"><h2>{{ $fullname }}</h2></li>
	        <li class="sidebar-brand">
<!-- 	        	<i href="" class="fa fa-facebook-square" aria-hidden="true"></i>
	        	<i href="" class="fa fa-twitter-square" aria-hidden="true"></i> -->
	        	<!-- <i href="" class="fa fa-instagram" aria-hidden="true"></i> -->
	    	</li>
	        <li class="sidebar-brand col-sm-11 text-center "><p>{{ $bio }}</p></li>
	    </ul>
	</div>

<div class="moodbook col-xs-offset-2 col-xs-8 col-md-offset-1 col-md-8">
@foreach ($entries as $entry)
<div class=" entry_post_defult col-sm-12">
	<div class="mbook-entry">

		<div class="">
			<div class="entry_post--colorbox  pull-right" style="background-image: linear-gradient(-180deg, {{ $entry->entry_color_1 }} 0%, {{ $entry->entry_color_2 }} 51%, {{ $entry->entry_color_3 }} 100%);">
			</div>
		</div>

		<div class="col-xs-8 col-sm-8 mbook--words">
		<!-- <div class="col-xs-12 col-sm-8"> -->
			{{ $entry->created_at->format('m/d/Y')}}
			<a class="" href="{{ url('user/show').'/'.$entry->id }}"><h2>{{ $entry->entry_title }}</h2></a>			
		</div>	

	</div>

</div>
@endforeach

</div>

</div>

@endsection