@extends('master')

@section('content')
<div class="row container login-margin center-align">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<h2>Sign Up</h2>
	<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align card z-depth-2 card-pad">
		<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align">
			<form role="form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}

				{{-- First Name --}}
				<div>
					<label for="firstname" class="login-label" >First Name</label>
					<input id="firstname" type="text" class="center-align" name="firstname" value="{{ old('name') }}"  autofocus>
				</div>
				{{-- last Name --}}
				<div>
					<label for="lastname" class="login-label">Last name</label>
					<input id="lastname" name="lastname" type="text" class="center-align" value="{{ old('lastname') }}"  autofocus>
				</div>
				{{-- Phone Number --}}
				<div>
					<label for="phonenumber" class="login-label">Phone Number</label>
					<input id="phonenumber" name="phonenumber" type="number" class="center-align"  autofocus>
				</div>
				{{-- Email --}}
				<div {{ $errors->has('email') ? ' has-error' : '' }}>
					<label for="email" class="login-label">E-Mail Address</label>
					<input id="name" type="text" name="email" class="center-align" value="{{ old('email') }}"  autofocus>
				</div>
				{{-- Password --}}
				<div class="">
					<label for="password" class="login-label">Password</label>
					<input id="password" type="password" class="center-align" name="password" >
				</div>
				{{-- Confirm Password --}}
				<div class="">
					<label for="password-confirm" class="login-label">Confirm Password</label>
					<input id="password-confirm" type="password" class="center-align" name="password_confirmation" >
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