@extends('master')

@section('content')

<div class="container center-align">
	<div class="row">
		<h2>Login</h2>
		<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align">
			<form action="{{ route('login') }}" method="post">

				{{ csrf_field() }}
			
				{{-- Email --}}
				<div>
					<label for="email">E-Mail Address</label>
					<input class="center-align" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
				</div>
				{{-- Password --}}
				<div>
					<label for="password">Password</label>
					<input class="center-align" id="password" type="password" name="password" required>
				</div>
				{{-- Remember Me Checkbox --}}
				<div>
					<p class="center-align">
				        <input class="center-align" type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }} />
				        <label for="test5">Remember Me</label>
			        </p>
				</div>
				{{-- Submit --}}
				<div class="center-align">
					<button type="submit" class="waves-effect waves-light btn center-align">Login</button>
				</div>
				{{-- Password reset --}}
				<div class="">
			        <a class="center-align" href="{{ route('password.request') }}">
						Forgot Your Password? <b>Click here.</b>
			        </a>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection