@extends('layouts.user_master')
@section('content')
<!-- 
	THE URL FUNCTION I WANT TO USE TO MAKE THE LINK TO THE DIFF. ENTRIES. { { url('/show', $entry->id) } }
<a href="">...</a> 

Apple Lady Email 
ninak 'at' apple.com

-->
<div class="container-fluid profile_header_colorbox">

	<div class="container">
		<div class="profile_header row">
			<div class="profile_header--img col-lg-4 col-md-1 col-md-offset-1 col-sm-1 col-xs-1 col-xs-offset-2">
				<img width="220px" height="188px" class="img-responsive" src="http://media.tumblr.com/tumblr_lnenqxmj0d1qiw26m.jpg">
			</div>
			<div class="profile_header--users_info col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-12 col-xs-offset-1 ">
				<h3 class="profile_header--usersname opensans">User Name<span><a href="/user/setting" class="glyphicon glyphicon-cog col-sm-1 pull-right"></a></span></h3>
				<p class="profile_header--user_bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					<div class="container">
						<div class="row">
							<ul class="list-unstyled list-inline">
								<li class="img"><i class="fa fa-facebook-square fa-3x"></i></li>
								<li class="img"><i class="fa fa-twitter-square fa-3x"></i></li>
								<li class="img"><i class="fa fa-instagram fa-3x"></i></li>
							</ul>
						</div>
					</div>
			</div>
			<div class="profile_header--socia">
				
			</div>
		</div>
	</div>
</div>
<!-- end .container -->
<div class="container">
	<div class="entry_post_defult">

		<div class=" row entry_post">
			 @foreach ($entries as $entry) 
			<div class="entry_post--date col-md-3 col-xs-1">
				<p class="date__month">May</p>
				<p class="date__day light">17</p>
				<p class="date__year">2016</p>
			</div>
				{{-- expr --}}
			
			<div class="entry_post--identifier col-md-5 col-md-offset-1 col-xs-offset-3 col-xs-6">
				<h3 class="entry_post--identifier__title light"><a href="/user/show/{{ $entry->id}}">{{ $entry->entry_title }}</a></h3>
				<p class="entry_post--identifier__opener">{{$entry->body_entry }}<a href="user/show/{{ $entry->id}}">...</a></p>
				
			</div>
			
			<div class="col-md-3">
				<div class="entry_post--colorbox pull-right col-md-1"></div>
			</div>
			@endforeach
		</div>
	</div>
</div>

@endsection