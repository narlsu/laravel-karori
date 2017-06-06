@extends('master')

@section('title', 'Recipes')
@section('content')

<div class="background-image">
	<h1 class="center-align">Recipes</h1>
	{{-- Search Bar Jquery, maybe fuzzy --}}
	<div class="search-bar"></div>

	{{-- Lockout to particular roles / permissions --}}
	{{-- @if (Auth::check() && Auth::user()->hasRole('admin')) --}}
		<div class="row center-align">
			<a href="/recipes/create" class="waves-effect waves-light btn center-block">Create Recipe Post</a>
		</div>
		{{-- <a href="/recipes/{{ $post->id }}/edit">Edit this product</a> --}}
	{{-- @endif --}}
	{{-- Posts will be displayed in a loop --}}
	<div class="row">
		@foreach($allRecipePosts as $post)

			<article class="art-style col s12 m6 l4">
				<a href="/recipes/{{ $post->id }}">
					<div class="card-contain card center-align">
						<img class="image-size" src="/images/recipes/thumbnails/{{ $post->image }}" alt="{{ $post->alt_text}}">
						<h2 class="post-heading center-align">{{ $post->title }}</h2>
					</div>
				</a>
				<small>Written {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
				{{-- Who wrote the post (Probably Unnecessary) --}}
				{{-- 	<small>Written by{{ $post->users->firstname }}</small> --}}
			</article>

		@endforeach
	</div>

	{{ $allRecipePosts->links() }}
</div>

@endsection