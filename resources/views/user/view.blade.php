@extends('layouts.user_master')
@section('content')
<div class="container">
	<div id="wrapper">
		<div id="sidebar-wrapper"style="background-image: linear-gradient(-180deg, {{ $entries->entry_color_1 }} 0%, {{ $entries->entry_color_2 }} 51%, {{ $entries->entry_color_3 }} 100%);" class="entry_post--colorbox">
		    <ul class="sidebar-nav">
		        <li class="sidebar-brand"></li>
		    </ul>
		</div>

		<div class="container-fluid">
			<div class="entry_view--icons row">

				<div class="con-sm-6 pull-left">
					<ul class="list-unstyled">
						<li>
							<a href="{{ url('/user') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span>
						</li>
					</ul>
				</div>

				<ul class="col-sm-6 list-unstyled list-inline pull-right glyphicons">
					<li>
						<a href=""><span class="glyphicon glyphicon-share" aria-hidden="true"></a></span>
					</li>
					<li>
						<a href=""><span class="glyphicon glyphicon-fire" aria-hidden="true"></a></span>
					</li>
					<li>
						<a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></span>
					</li>
					<li>
					<!-- FIND THE RIGHT WAY TO PUT IN URL -->
						<a href="{{url('user/edit').'/'.$entries->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a></span>
					</li>
					<li>
						<a href=""><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></a></span>
					</li>
				</ul>
			</div>		
		</div>

	{{-- expr --}}

		<div class="container">
			<div class="row date">
				<div class="col-md-6 entry_view--date pull-right">
					<p>May</p>
					<p>13</p>
					<p>2016</p>			
				</div>
			</div>
		</div>	
	<div class="container">
			<div class="row col-sm-12">
				<div class="entry_view--identifier">
					<h3 class="entry_view--identifier__title light">{{ $entries->entry_title }}</h3>	
					<h3 class="entry_view--identifier__author light">Created By</h3>	
				</div>
				<div class="col-sm-7 entry_view--identifier__body">
					<p class="light opensans">{{ $entries->entry_body }}</p>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12 entry_view--identifier__tags">
						<p class="light">{{ $entries->tag_field }}<!-- #Boggarts #lavender #ganger #krum #invisibility #half-blood-Prince #Umbridge #dragon-scale #Sirius-Black #elf #grayback --></p>
					</div>
				</div>
			</div>

		</div>
		</div>
	</div>
</div>


@endsection 