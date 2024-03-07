@include('Base')
<body>
	<div class="navigation">
		<div class="agileits-logo">
			<h1><a><span><img src="{{ asset('helps/images/ttt.png') }}" style="width: 10%;" alt=""></span>EVENTO</a></h1> 
		</div>
		<div class="container">
			
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bounce-to-bottom button">
							<x-nav-link :href="route('welcome')" >
								{{ __('Home') }}
							</x-nav-link></li>
						<li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('events.index')" >
							{{ __('events') }}
						</x-nav-link></li>
                        @if (Route::has('login'))
                        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                            @auth
                            {{-- <li class="hvr-bounce-to-bottom button"> <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li> --}}
                            @else
                            <li class="hvr-bounce-to-bottom button"> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
        
                                @if (Route::has('register'))
                                <li class="hvr-bounce-to-bottom button">  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                            @endauth
                       
                    @endif 
					@role('Admin')
					<li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('Admin')" >
							{{ __('Admin') }}
						</x-nav-link>
					</li>	
					{{-- <li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('users.index')" >
							{{ __('Gestion of users') }}
						</x-nav-link> --}}
					{{-- </li> --}}
					{{-- <li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('all-categories')" >
							{{ __('Categories') }}
						</x-nav-link>
					</li>		  --}}
					@endrole
					@role('Organisateur')
					<li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('Organisateur')" >
							{{ __('Organisateur') }}
						</x-nav-link>
					</li>
					<li class="hvr-bounce-to-bottom button">
						<x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
					</li>
					@endrole
					@role('User')
					<li class="hvr-bounce-to-bottom button">
						<x-nav-link :href="route('tickets')" >
							{{ __('tickets') }}
						</x-nav-link>
					</li>
					@endrole
					</ul>
					<div class="social-icons">
						@if (Auth::check())
						<div style="float: right; margin-right: 10px;">
							<form id="logout-form" method="POST" action="{{ route('logout') }}">
								@csrf
								<button type="submit" style="background-color: #da1a1a; /* Green */
															border: none;
															color: white;
															padding: 10px 20px;
															text-align: center;
															text-decoration: none;
															display: inline-block;
															font-size: 16px;
															margin: 4px 2px;
															transition-duration: 0.4s;
															cursor: pointer;
															border-radius: 12px;">
									{{ __('Log Out') }}
								</button>
							</form>
						</div>
					@endif
					
					</div>
					<div class="clearfix"></div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<style>
		.pagination-container {
			/* text-align: center; */
			margin-top: 20px; 
			margin-bottom: 20px; 
		}
	</style>
	