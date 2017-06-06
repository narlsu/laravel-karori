@extends('master')

@section('title', 'Your Crate')
@section('content')

<div class="background-image">
	<div class="card">
		{!! Form::open() !!}

		{{-- Checked Crate --}}
		<p class="center-align checkbox-login">
	        <input class="center-align" type="checkbox" id="weekly_crate" name="weekly_crate" value="1" {{ old('remember') ? 'checked' : '' }} />
	        <label for="weekly_crate"><span class="login-label">Weekly Crate</span></label>
		</p>


		{{-- Custom Crate --}}
{{-- 		{!! Form::label('custom_crate', 'Want a custom crate? Tick the box & Fill out the form below, with the type of produce you would like and we will get back to you.') !!} --}}

		<p class="center-align checkbox-login">
	        <input class="center-align" type="checkbox" id="custom_crate" name="custom_crate" value="1" {{ old('remember') ? 'checked' : '' }} />
	        <label for="custom_crate"><span class="login-label">Custom Crate</span></label>
		</p>

		{{-- Custom Crate Textarea --}}
		{!! Form::textarea('custom_crate_text','',['placeholder' => 'Please describe what custom produce you would like.']) !!}
		{{-- Submit Button --}}
		<div class="row center-align">
		{!! Form::submit('Submit Crate', ['class' => 'btn']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection
