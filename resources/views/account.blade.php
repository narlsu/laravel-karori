@extends('master')

@section('title', 'Account')
@section('content')

<div class="background-image">
	<h1 class="center-align">Account</h1>
	<p class="center-align">Welcome to the Karori food Co-op! Be sure to check to check out the Crate page where you sign up and manage your food crate for this week!</p>

	<div class="card">
		<h1>Update Details</h1>
		{{-- Email --}}
		{{-- Phone Number --}}
		{{-- First Name --}}
		{{-- Last Name --}}
		{{-- Update Details Button --}}
	</div>
	<div class="card">
		<h1>Update Password</h1>
		{{-- Current Password --}}
		{{-- New Password --}}
		{{-- Confirm Password --}}
		{{-- Update Password Button --}}
	</div>
	<div class="card">
		<h1>Delete Account</h1>
			<p>Please note that there is no 
			undoing this option. Your account and all its details will be permanently deleted.
			</p>
			{{-- Delete Account Button --}}
	</div>
</div>
@endsection
