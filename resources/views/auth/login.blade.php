@extends('master')

@section('content')

<div class="container center-align">
	<div class="row login-margin">
		<h2>Login</h2>
		<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align card z-depth-2 card-pad">
			<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align">
				<form action="{{ route('login') }}" role="form" method="post">

					{{ csrf_field() }}
				
					{{-- Email --}}
					<div>
						<label for="email" class="login-label">E-Mail Address</label>
						<input class="center-align" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block red-text">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif						
					</div>
					{{-- Password --}}
					<div>
						<label for="password" class="login-label">Password</label>
						<input class="center-align" id="password" type="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block red-text">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
					{{-- Remember Me Checkbox --}}
					<div>
						<p class="center-align checkbox-login">
					        <input class="center-align" type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }} />
					        <label for="test5"><span class="login-label">Remember Me</span></label>
				        </p>
					</div>
					{{-- Submit --}}
					<div class="center-align">
						<button type="submit" class="waves-effect waves-light btn center-align button-padding">Login</button>
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
</div>

@endsection