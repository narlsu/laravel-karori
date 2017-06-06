@extends('master')

@section('title', 'Home')
@section('content')

<div class="background-image container center-align">
	@if (Auth::Check() && Auth::user()->hasRole('admin'))
		<h2>You are now logged in as an admin</h2>
	@endif
	<h1 class="center-align">About Us</h1>
	<div class="row">
	<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2">
		<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae, sit doloribus quasi deleniti, quidem animi fugiat autem veniam soluta vero ipsum nemo ipsa vel, vitae culpa laborum modi similique!</p>
	</div>
	</div>
	<div class="row">
	<h2 class="block center-align">How it works</h2>
	</div>
	{{-- Infographic --}}
	<img src="http://placehold.it/350x350" alt="Infographic on Karori Food Co-Op and how it works.">
	<div class="">
	<h2 class="center-align">Special Thanks</h2>
	</div>
	<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2 margin">
		<p class="flow-text">Special thanks to Graeme for letting us use his garage for fruit sorting, etc. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo est libero mollitia aperiam. Assumenda, dolore! Corporis beatae quisquam nulla, culpa incidunt delectus illum, est, quas, in itaque nisi quo excepturi!</p>
	</div>
</div>


    <div class="container">


        <div class="row">
            @if ( Auth::Check() && Auth::user()->hasRole('admin') )
                <div class="page-header">
                    <h1 class="center-align">Control Panel</h1>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">You're an Admin</div>
                        <div class="panel-body">
                            <a href="/home/admin" class="btn btn-primary btn-block">Go to Admin Tools</a>
                        </div>
                    </div>
                </div>
            @endif

            @if(Auth::Check() && Auth::user()->hasRole('meeting manager') )
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">You're a Meeting Manager</div>
                        <div class="panel-body">
                            <a href="/home/meeting" class="btn btn-primary btn-block">Go to Meeting Manager Tools</a>
                        </div>
                    </div>
                </div>
            @endif

            @if( Auth::Check() && Auth::user()->can('modify user accounts') )
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">You can Modify User Accounts</div>
                        <div class="panel-body">
                            <a href="/home/modify-accounts" class="btn btn-primary btn-block">Go Modify some Accounts</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
