@extends('master')

@section('title', 'Recipes')
@section('content')

<div class="background-image">
	<h1>recipes</h1>
	{{-- Search Bar Jquery, maybe fuzzy --}}
	<div class="search-bar"></div>
	{{-- Posts will be displayed in a loop --}}
	<div class="posts-card">
		<img src="model" alt="This will come from a variable">
		<h2>These will be the post titles positioned absolutely.</h2>
	</div>

	{{-- Pagination, Show around 20 recipes --}}
</div>

@endsection