@extends('master')

@section('title', 'Wishlist')
@section('content')
<div class="background">
	<h1>Wishlist</h1>
	<div class="card">
		<p>Any exotic fruits or produce you would like to have in your crates? Tell us what you think would be a great additon to the produce crates below.</p>
	</div>
	<div class="card">
		{!! Form::open() !!}
		{{-- Wishlist Textarea --}}
		{!! Form::textarea('wishlist','null',['placeholder' => 'Awesome additions go here.']) !!}
		{{-- Submit Button --}}
		{!! Form::submit('wishlistsubmit', ['class' => 'thisIsClass']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection