@extends('layouts.user_master')
@section('content')

<div class="containter-fluid" style="background-image: linear-gradient(-180deg, {{ $entries->entry_color_1 }} 0%, {{ $entries->entry_color_2 }} 51%, {{ $entries->entry_color_3 }} 100%);">
		<h1 class="text-left text__white editable--title__view" style="background-image: linear-gradient(-180deg, {{ $entries->entry_color_1 }} 0%, {{ $entries->entry_color_2 }} 51%, {{ $entries->entry_color_3 }} 100%);">{{ $entries->entry_title }}</h1>
</div>

<div class="col-xs-offset-2 col-md-offset-5 moodbook--edit-bar">
	<ul class="list-inline ">
		<li><a href="{{ url('user/edit').'/'.$entries->id }}"><button class="btn__primary--outline">Edit</button></a></li>
		<li><a href="{{ url('user/share') }}"><button class="btn__primary--outline">Share</button></a></li>
		<li><a href="{{ url('user/destroy').'/'.$entries->id }}"><button class="btn__primary--outline">Delete</button></a></li>
	</ul>
</div>


	
<!-- <div class="colorbox">
	<div style="width: 100%; height: 241px; color: transparent; background-image: linear-gradient(-180deg, #E85D5A 0%, #33014D 100%);" class="entry_post--colorbox__create col-md-4"></div>
</div> -->

<!--   -->
<!-- <div id="toolbar">
  <a data-wysihtml5-command="bold">bold</a>
  <a data-wysihtml5-command="italic">italic</a>
  <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">H1</a>
  <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p">P</a>
</div> -->
<!-- <form id="">
    <textarea id="textarea" placeholder="Enter your text ..." autofocus></textarea>
</form> -->


<div class="container">
 
	<div class="editable--textarea">
 		<div class="col-sm-12">
 			<p class="light opensans">{!! $entries->entry_body !!}</p>
		</div>
	</div>



		<div class="row">
			<div class="col-sm-12">
				<h5 class="created--timestamp opensans light italic"> {{ $entries->created_at->format('m/d/Y') }}</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-9">
				<h6 class="edited--timestamp opensans light italic">Last edited {{ $entries->updated_at->format('m/d/Y H:i') }}</h6>
			</div>
	</div>


<!-- <a class="btn-primary btn save_btn">CATS NOW</a> -->



@endsection 