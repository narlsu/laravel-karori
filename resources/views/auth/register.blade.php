@extends('master')

@section('content')
<div class="row container login-margin center-align">
	<h2>Sign Up</h2>
	<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align card z-depth-2 card-pad">
		<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align">
			<form role="form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}

				{{-- First Name --}}
				<div>
					<label for="firstname" class="login-label" >First Name</label>
					<input id="firstname" type="text" class="center-align" name="name" value="{{ old('name') }}" required autofocus>
				</div>
				{{-- last Name --}}
				<div>
					<label for="lastname" class="login-label">Last name</label>
					<input id="lastname" type="text" class="center-align" value="{{ old('name') }}" required autofocus>
				</div>
				{{-- Phone Number --}}
				<div>
					<label for="phonenumber" class="login-label">Phone Number</label>
					<input id="phonenumber" type="number" class="center-align" value="{{ old('name') }} " required autofocus>
				</div>
				{{-- Email --}}
				<div class="">
					<label for="email" class="login-label">E-Mail Address</label>
					<input id="name" type="text" name="name" class="center-align" value="{{ old('name') }}" required autofocus>
				</div>
				{{-- Password --}}
				<div class="">
					<label for="password" class="login-label">Password</label>
					<input id="password" type="password" class="center-align" name="password" required>
				</div>
				{{-- Confirm Password --}}
				<div class="">
					<label for="password-confirm" class="login-label">Confirm Password</label>
					<input id="password-confirm" type="password" class="center-align" name="password_confirmation" required>
				</div>
				{{-- Submit --}}
				<div>
					<button type="submit" class="btn waves-effect waves-light btn center-align button-padding">
						Register
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection