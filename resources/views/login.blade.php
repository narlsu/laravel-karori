@extends('master')

@section('title', 'Login')
@section('content')

<div class="background-image">

	<h1>Login</h1>

	<div class="card">
		<div>
			{{-- Email --}}
			{!! Form::open() !!}
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'thisIsClass']) !!}	
		</div>

		<div>
			{{-- Password --}}
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', null, ['class' => 'thisIsClass']) !!}
		</div>
		<div>
			{{-- Submit --}}
			{!! Form::submit('Login', ['class' => 'thisIsClass']) !!}
			{!! Form::close() !!}
		</div>
		<div>
			{{-- Forgot Password? Click Here --}}
			<a href="#">Forgot Password? 
				<span class="bold">
					Click Here
				</span>
			</a>
		</div>
	</div>
</div>

@endsection