
<div class="row">
	<div class="form-group">
		{!! Form::open() !!}
		<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 ">
			{!! Form::text('entry_title', null, ['class' => 'form-control editable--title', 'placeholder'=>'Untilted']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>

	
<div class="colorbox">
	<div style="width: 100%; height: 241px; color: transparent; background-image: linear-gradient(-180deg, #E85D5A 0%, #33014D 100%);" class="entry_post--colorbox__create col-md-4"></div>
</div>




<div class="container">
	<div class="editable--textarea">
		{!! Form::open(['method' => 'GET'], ['class' => 'form-group row']) !!}
		<div class="col-sm-12">
			{!! Form::textarea('bodyEntry', null, ['class' => 'editable--textarea text-box col-md-12 opensans', 'placeholder' => 'Enter your text here.']) !!}
		</div>
	</div>
	<div class="editable--tag_field">
		<div class="col-sm-12">
			{!! Form::text('tagField', null, ['placeholder' => '#Tags']) !!}
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
				{!! Form::button('save', ['class' => 'btn btn-defult']) !!}
			</div>
		{!! Form::close() !!}
</div>