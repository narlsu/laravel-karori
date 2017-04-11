@extends('master')

@section('title', 'Your Crate')
@section('content')

<div class="background-image">
	<div class="card">
		{!! Form::open() !!}

		{{-- Checked Crate --}}
		{!! Form::label('checkedcrate', 'You are currently signed up for a produce crate.') !!}
		{!! Form::checkbox('checkedcrate', 'value', true) !!}		
	</div>

	<div class="card">

		{{-- Unchecked Crate --}}
		{!! Form::label('uncheckedcrate', "Don't want a crate this week? Tick this one.") !!}
		{!! Form::checkbox('uncheckedcrate', 'value') !!}
	</div>

	<div class="card">
		{{-- Custom Crate --}}
		{!! Form::label('customcrate', 'Want a custom crate? Tick the box & Fill out the form below, with the type of produce you would like and we will get back to you.') !!}
		{!! Form::checkbox('customcrate', 'value') !!}

		{{-- Custom Crate Textarea --}}
		{!! Form::textarea('customcratedetails','null',['placeholder' => 'Custom Produce here.']) !!}
		{{-- Submit Button --}}
		{!! Form::submit('submitcrate', ['class' => 'thisIsClass']) !!}

		{!! Form::close() !!}
	</div>
</div>

@endsection
