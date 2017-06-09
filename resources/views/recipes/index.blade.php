@extends('master')

@section('title', 'Recipes')
@section('content')

<div class="background-image">
	<h1 class="center-align">Recipes</h1>

	{{-- Lockout to particular roles / permissions --}}
	@if (Auth::check() && Auth::user()->hasRole('admin'))
		<div class="row center-align">
			<a href="/recipes/create" class="waves-effect waves-light btn center-block">Create Recipe Post</a>
		</div>		
	@endif
	{{-- Posts will be displayed in a loop --}}
	<div class="height-of-cont row">
		@foreach($allRecipePosts as $post)

			<article class="art-style col s12 m6 l4">
				
				<div class="card-contain center-align center-cont">	
					<div class="image-hold center-block">
						<a href="/recipes/{{ $post->id }}">
							<img class="image-size" src="/images/recipes/thumbnails/{{ $post->image }}" alt="{{ $post->alt_text}}">
							<div class="center-block">
							<h2 class="post-heading center-block">{{ $post->title }}</h2>
							<small class="centered">Written {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
							</div>
						</a>
					</div>	
				</div>
				
			</article>

		@endforeach
	</div>

	{{ $allRecipePosts->links() }}
</div>

@endsection