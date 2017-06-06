@extends('master')

@section('content')
<div class="row center-align">
	<h1 class="center-align">Edit Blog Post</h1>
</div>
<img src="/images/recipes/{{ $post->image }}" alt="">

{!! Form::model($post, ['url' => '/recipes/'. $post->id , 'files' =>'true' ]) !!}
	{!! method_field('PUT')!!}

	<div>
		<label for="name">Recipe title</label>
		{!! Form::text('title') !!}
	</div>

	<div>
		<label for="content">Recipe Description</label>
		{!! Form::textarea('content', null ) !!}
	</div>

<div class="file-field input-field">
        <div class="btn">
            <span>File</span>
	            {!! Form::label('image') !!}
	            {!! Form::file('image') !!}
           </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
</div>
<div>
	<label for="alt_text"></label>
	{!! Form::text('alt_text') !!}


	<input type="submit" class="btn" value="edit new recipes">
</div>
</form>
<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>
@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'content' );
</script>
@endsection

