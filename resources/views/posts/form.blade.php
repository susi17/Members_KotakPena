	<div class="col-xs-12">
		<div class="form-group">
			<strong>Name : </strong>
			{!! Form::text('title', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
		<strong>Division : </strong>
			{!! Form::textarea('body', null, ['placeholder' => 'Division', 'class' => 'form-control', 'style' => 'height:150px']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href=" {{ route('posts.index') }} ">Back</a>
		<button type="submit" class="btn btn-xs btn-primary" name="button" >Submit</button>
	</div>	
</div>