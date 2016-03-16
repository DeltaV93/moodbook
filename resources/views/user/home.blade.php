@extends('layouts.user_master')
@section('content')
<!-- 
	THE URL FUNCTION I WANT TO USE TO MAKE THE LINK TO THE DIFF. ENTRIES. { { url('/show', $entry->id) } }
<a href="">...</a> 

-->
<div class="container-fluid profile_header_colorbox">

	<div class="container">
		<div class="profile_header row">
			<div class="profile_header--img col-sm-4">
				<img width="220px" height="188px" src="http://media.tumblr.com/tumblr_lnenqxmj0d1qiw26m.jpg">
			</div>
			<div class="profile_header--users_info col-sm-5 ">
				<h3 class="profile_header--usersname opensans">User Name</h3>
				<p class="profile_header--user_bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					<div class="container">
						<div class="row">
							<ul class="list-unstyled list-inline">
								<li><i class="fa fa-facebook-square fa-3x"></i></li>
								<li><i class="fa fa-twitter-square fa-3x"></i></li>
								<li><i class="fa fa-instagram fa-3x"></i></li>
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
	<div class="col-md-12 entry_post_defult">

		<div class="entry_post">
			<div class="entry_post--date col-md-3">
				<p class="date__month">May</p>
				<p class="date__day light">17</p>
				<p class="date__year">2016</p>
			</div>

			<div class="entry_post--identifier col-md-5">
				<h3 class="entry_post--identifier__title light"><a href="/show">Title</a></h3>
				<p class="entry_post--identifier__opener">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et <a href="/show">...</a></p>
			</div>

			<div class="col-md-3">
				<div class="entry_post--colorbox pull-right col-md-1"></div>
			</div>

		</div>
	</div>
</div>

@endsection