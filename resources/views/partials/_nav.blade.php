	<div class="navbar-fixed">
		<nav>
			<div  class="nav-wrapper">
				<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
				<div>
					<a href="/" class="brand-logo"><img class="moblogo" src="/images/mobilelogo.png"></a>
				</div>
				<ul  class="right hide-on-med-and-down">
					<li><a href="/">Home</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="{{ url('/recipes') }}">Recipes</a></li>

					@if (Auth::guest())
					<li><a href="{{ url('/register') }}">Sign Up</a></li>
					<li><a href="{{ url('/login') }}">Login</a></li>
					@else
					<li><a href="{{ url('/account')}}">Account</a></li>
					<li><a href="{{ url('/admin')}}">Admin</a></li>
					<li>
	                    <a href="{{ url('logout') }}"
	                        onclick="event.preventDefault();
	                                 document.getElementById('logout-form').submit();">
	                        Logout
	                    </a>
                    </li>
                    @endif


				</ul>
			</div>
		</nav>
	</div>
		<ul class="side-nav" id="mobile">
			<li><a href="/">Home</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="{{ url('/recipes') }}">Recipes</a></li>
			@if (Auth::guest())
			<li><a href="{{ url('/register') }}">Sign Up</a></li>
			<li><a href="{{ url('/login') }}">Login</a></li>
			@else
			<li>
                    <a href="{{ url('logout') }}"
                        onclick="
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </li>
            @endif

		</ul>