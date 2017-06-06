@extends('master')

@section('content')

<div class="row center-align disp-flex">
	{{-- Edit Post --}}
	<div class="button-cont">
	<a class="btn" href="/recipes/{{ $post->id }}/edit">Edit this Post</a>
	</div>
	{{-- Delete Post--}}
	<div class="button-cont">
		<form action="/recipes/{{ $post->id}}" method="POST">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			{{ Form::hidden('id', $post->id) }}
	        {{ Form::submit('Delete This Post', ['class' => 'btn']) }}
		</form>
	</div>
</div>

<h1 class="center-align">{{ $post->title }}</h1>

<div class="center-align post-container">
	<img class="post-image" src="/images/recipes/{{ $post->image }}" alt="{{ $post->alt_text}}">
</div>

<div class="center-align block">
	{!! $post->content !!}
</div>

<small class="center-align block">Written {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
<h2 class="center-align">Comments</h2>

{{-- Only to be used if comment system --}}
{{-- @if(Auth::check())

	{!! Form::open(['url'=>'/recipes/newcomment']) !!}

	{{ Form::textarea('comment') }}

	{!! Form::submit('submit your comment!') !!}
34
	{!! Form::hidden('posts_id', $post->id) !!}

	{!! Form::close() !!}
	@if($errors->first('comment'))
		<p class="alert-danger">{{ $errors->first('comment') }}</p>
	@endif

@else 
	You must log in --}}

{{-- @endif --}}


@endsection