@extends('layouts.user_master')
@section('content')
<div class="container">
	<div id="wrapper">
		<div id="sidebar-wrapper"style="background-image: linear-gradient(-90deg, {{ $entries->entry_color_1 }} 1%, {{ $entries->entry_color_2 }} 51%, {{ $entries->entry_color_3 }} 100%);" class="entry_post--colorbox">
		    <ul class="sidebar-nav">
		        <li class="sidebar-brand"></li>
		    </ul>
		</div>

		<div class="container-fluid">
			<div class="entry_view--icons row">

				<div class="con-sm-6 pull-left">
					<ul class="list-unstyled">
						<li>
							<a href="/user"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span>
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
						<a href="user/edit{{'/'.$entries->id}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a></span>
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
					<p class="date__month">May</p>
					<p class="date__day">13</p>
					<p class="date__year">2016</p>			
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


<!-- 

  "id": 3,
  "user_id": 3,
  "entry_title": "hey",
  "colorbox": "",
  "body_entry": "<b></b><br>",
  "tag_field": "",
  "created_at": "2016-04-04 22:43:08",
  "updated_at": "2016-04-04 22:43:08",
  "excerpt": ""
					<p class="light">Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. Half-Blood Prince Invisibility Cloak cauldron cakes, hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.</p>

					<p class="light">Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.</p>

					<p class="light">Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean with flat side of silver dagger, releases juice better than cutting. Full moon Whomping Willow three turns should do it lemon drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter. Witch Weekly, he will rise again and he will come for us, headmaster Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many would die for!</p>
				</div> -->
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