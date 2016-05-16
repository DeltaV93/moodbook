
<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 ">
	{!! Form::text('entry_title', null, ['class' => 'form-control editable--title', 'placeholder'=>'Untilted']) !!}
</div>

<div class="col-md-offset-5 moodbook--edit-bar">
	<ul class="list-inline ">
		<li><button class="btn__primary--outline">Edit</li>
		<li><button class="btn__primary--outline">Share</li>
		<li><button class="btn__primary--outline">Delete</li>
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
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
	<div class="editable--textarea">
 		<div class="col-sm-12">
			{!! Form::textarea('entry_body', null, ['class' => 'editable--textarea text-box col-md-12 opensans', 'id' =>'textarea', 'placeholder' => 'Enter your text here.','style'=>"width:100%"]) !!}
		</div>
	</div>
	<div class="editable--tag_field">
		<div class="col-sm-12">
			{!! Form::text('tag_field', null, ['placeholder' => '#Tags']) !!}
		</div>
	</div>

		<div class="row">
			<div class="col-sm-12">
				<h5 class="created--timestamp opensans light italic"> Date Created</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-9">
				<h6 class="edited--timestamp opensans light italic">Last edited March 22 at 12:37 am</h6>
			</div>
	</div>
			<div class="col-sm-2 pull-right">
				{!! Form::submit($submitButton, ['class' => 'btn__primary']) !!}
				
			</div>


<!-- <a class="btn-primary btn save_btn">CATS NOW</a> -->


