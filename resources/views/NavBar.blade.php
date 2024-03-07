@include('Base')
<body>
	<div class="navigation">
		<div class="container">
			<div class="agileits-logo">
				<h1><a href="index.html"><span>Event</span>Planner</a></h1> 
			</div>
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
						<li class="hvr-bounce-to-bottom button"><a href="#about" class="scroll">About<span class="sr-only">(current)</span></a></li>
						<li class="hvr-bounce-to-bottom button"><a href="#gallery" class="scroll">Gallery</a></li>
						<li class="hvr-bounce-to-bottom button"><a href="#services" class="scroll">Services</a></li>				
                        @if (Route::has('login'))
                        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                            @auth
                            <li class="hvr-bounce-to-bottom button"> <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                            @else
                            <li class="hvr-bounce-to-bottom button"> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
        
                                @if (Route::has('register'))
                                <li class="hvr-bounce-to-bottom button">  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                            @endauth
                        {{-- </div> --}}
                    @endif  
					</ul>
					<div class="social-icons">
						<ul>
							<li><a href="#" class="f1"></a></li>
							<li><a href="#" class="f2"></a></li>
							<li><a href="#" class="f3"></a></li>
							<li><a href="#" class="f4"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>