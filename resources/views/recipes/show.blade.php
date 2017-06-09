@extends('master')

@section('content')

	<div class="row min-width center-align disp-flex">
		
		@if (Auth::check() && Auth::user()->hasRole('admin'))

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
		@endif
	</div>

	
		<h1 class="center-align flow-text">{{ $post->title }}</h1>

		<div class="center-align post-container">
			<img class="post-image" src="/images/recipes/{{ $post->image }}" alt="{{ $post->alt_text}}">
		</div>
		<div class="content-pad">
			<div class="center-align block">
				{!! $post->content !!}
			</div>
	
		<small class="center-align block">Written {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
	</div>

@endsection