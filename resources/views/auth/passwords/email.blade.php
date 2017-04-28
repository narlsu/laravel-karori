@extends('master')

@section('content')

<div class="row container login-margin center-align">
	<h2>Reset Password</h2>
	{{-- Error Message --}}
	<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align card z-depth-2 card-pad">
		<div class="col s10 push-s1 m8 push-m2 l8 push-m2 center-align">
		    @if (session('status'))
		        <div class="alert alert-success">
		            {{ session('status') }}
		        </div>
		    @endif

			<form role="form" method="POST" action="{{ route('password.email') }}">
				{{ csrf_field() }}

				{{-- Email Reset --}}
				<div>
					<label for="email" class="login-label">E-Mail Address</label>
					<input id="email" type="email" class="center-align" name="email" value="{{ old('email') }}" required>
				</div>
				@if ($errors->has('email'))
		            <span class="help-block">
		                <strong>{{ $errors->first('email') }}</strong>
		            </span>
		        @endif
				{{-- Button --}}
		        <button type="submit" class="btn waves-effect waves-light btn center-align button-padding">
		            Send Password Reset Link
		        </button>

			</form>
		</div>
	</div>
</div>
@endsection
