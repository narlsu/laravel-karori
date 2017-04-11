@extends('master')

@section('title', 'Sign Up')
@section('content')

<div class="background-image">

	<h1>Sign Up</h1>

	<div class="card">
		<div>
			{!! Form::open() !!}
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'thisIsClass']) !!}	
		</div>
		{{-- First Name --}}
		<div>
			{!! Form::label('firstname', 'Name') !!}
			{!! Form::text('firstname', null, ['class' => 'thisIsClass']) !!}
		</div>	
		{{-- Last Name --}}
		<div>
			{!! Form::label('lastname', 'Last Name') !!}
			{!! Form::text('lastname', null, ['class' => 'thisIsClass']) !!}
		</div>
		{{-- Phone Number --}}
		<div>
			{!! Form::label('Phone Number', 'Last Name') !!}
			{!! Form::number('Phone Number', 'phonenumber', ['class' => 'thisIsClass']) !!}
		</div>
		{{-- Password --}}
		<div>
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', null, ['class' => 'thisIsClass']) !!}
		</div>
		{{-- Confirm Password --}}
			<div>
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', null, ['class' => 'thisIsClass']) !!}
		</div>
		{{-- Agree to TOS --}}


		{{-- Google Recaptcha --}}
		{{-- Submit --}}
		<div>
			{!! Form::submit('Sign Up', ['class' => 'thisIsClass']) !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection