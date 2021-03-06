
<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 ">
	{!! Form::text('entry_title', null, ['class' => 'form-control editable--title', 'placeholder'=>'Untitled']) !!}
	{!! Form::hidden('entry_color_1',null , ['id' => 'entry_color_1'] ) !!}
	{!! Form::hidden('entry_color_2',null , ['id' => 'entry_color_2'] ) !!}
	{!! Form::hidden('entry_color_3',null , ['id' => 'entry_color_3'] ) !!}
</div>

<!-- <div class="col-xs-offset-2 col-md-offset-5 moodbook--edit-bar">
	<ul class="list-inline moodbook--editbar center-block">
		<li><button class="btn__primary--outline">Edit</button></a></li>
		<li><button class="btn__primary--outline">Share</button></a></li>
		<li><button class="btn__primary--outline">Delete</button></a></li>
	</ul>
</div> -->
	
<!-- <div class="colorbox">
	<div style="width: 100%; height: 241px; color: transparent; background-image: linear-gradient(-180deg, #E85D5A 0%, #33014D 100%);" class="entry_post colorbox__create col-md-4"></div>
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
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
	<div id="status" class="col-sm-10 col-sm-offset-1 text__danger">Not saved</div>
	<div class="editable--textarea">
 		<div class="col-sm-10 col-sm-offset-1">
			{!! Form::textarea('entry_body', null, ['class' => 'editable--textarea text-box col-md-12 opensans', 'id' =>'textarea', 'placeholder' => 'Enter your text here.','style'=>"width:100%"]) !!}
		</div>
	</div>
{{-- 	<div class="editable--tag_field">
		<div class="col-sm-10 col-sm-offset-1">
			{!! Form::text('tag_field', null, ['placeholder' => '#Tags']) !!}
		</div>
	</div> --}}
<!-- 
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h5 class="created--timestamp opensans light italic"> Date Created</h5>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<h6 class="edited--timestamp opensans light italic">Last edited March 22 at 12:37 am</h6>
		</div>
	</div> -->
	<div class="col-sm-2 col-sm-offset-1 pull-right">
		{!! Form::submit($submitButton, ['class' => 'btn__primary']) !!}
	</div>
</div>




