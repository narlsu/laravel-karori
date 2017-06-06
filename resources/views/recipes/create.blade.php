@extends('master')

@section('content')

<h1 class="center-align">Write a new Blog Post</h1>

{!! Form::open(['url'=>'recipes', 'files' => 'true']) !!}

<div>
	{!! Form::label('title', 'Title', array('class' => 'block center-align')) !!}
	{!! Form::text('title', null, ['placeholder'=>'Recipes Title here.', 'class' => 'center-align']) !!}

	@if($errors->first('title'))
		<p class="red-text">{{ $errors->first('title') }}</p>
	@endif
</div>

<div>
	{!! Form::label('content', 'Your Blog Post: ') !!}
	{!! Form::textarea('content') !!}
</div>
	@if($errors->first('content'))
		<p class="red-text">{{ $errors->first('content') }}</p>
	@endif

<div class="file-field input-field">
    <div class="btn">
        <span>File</span>
            <label for="image" class="no-display"></label>
            {!! Form::file('image') !!}
    </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
    	</div>
    @if($errors->first('image'))
		<p class="red-text">{{ $errors->first('image') }}</p>
	@endif
</div>
<div>
	<label for="alt_text">This is alternative text please write a description about the image</label>
	{!! Form::text('alt_text') !!}
</div>

    @if($errors->first('alt_text'))
		<p class="red-text">{{ $errors->first('alt_text') }}</p>
	@endif
	<div class="center-align">
		<input type="submit" class="btn" value="edit new recipes">
	</div>
{!! Form::close() !!}


@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'content' );
</script>
@endsection