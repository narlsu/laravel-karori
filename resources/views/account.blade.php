@extends('master')

@section('title', 'Account')
@section('content')

<div class="background-image">
	<h1>Account</h1>

	<div class="card">
		<h1>Update Details</h1>\
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
