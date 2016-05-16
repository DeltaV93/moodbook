@extends('layouts.user_master')
@section('content')
<div id="wrapper">
	<div id="sidebar-wrapper"style="background-image: linear-gradient(-180deg, lavender 0%, lightblue 51%,lightgreen 100%);" class="entry_post--colorbox">
	    <ul class="sidebar-nav">
	        <li class="sidebar-brand">{{ $photo }}</li>
	        <li class="sidebar-brand text__white"><h2>{{ $fullname }}</h2></li>
	        <li class="sidebar-brand">
	        	<i href="" class="fa fa-facebook-square" aria-hidden="true"></i>
	        	<i href="" class="fa fa-twitter-square" aria-hidden="true"></i>
	        	<i href="" class="fa fa-instagram" aria-hidden="true"></i>
	    	</li>
	        <li class="sidebar-brand">{{ $bio }}</li>
	    </ul>
	</div>

<div class="moodbook col-xs-8 col-md-offset-1 col-md-8">
@foreach ($entries as $entry)
<div class="moodbook--entry" {{--style="background-image: linear-gradient(-180deg, {{ $entry->entry_color_1 }} 0%, {{ $entry->entry_color_2 }} 51%, {{ $entry->entry_color_3 }} 100%);"--}}>
	
	<ul class="row list-unstyled">
		<li>
			<div class="moodbook--words col-xs-4 col-md-2">
				{{ $entry->created_at->format('m/d/Y')}}
			</div>				
		</li>

		<li>
			<div class="col-xs-9 col-md-11 ">
				<a class="" href="{{ url('user/show').'/'.$entry->id }}"><h2>{{ $entry->entry_title }}</h2></a>	
			</div>
		</li>
		<li>
			<div id='color' class="color col-xs-offset-10 col-xs-1 entry_post--colorbox pull right" style="background-image: linear-gradient(-180deg, {{ $entry->entry_color_1 }} 0%, {{ $entry->entry_color_2 }} 51%, {{ $entry->entry_color_3 }} 100%);">
			</div>
		</li>
	</ul>
</div>
@endforeach
</div>

</div>

@endsection