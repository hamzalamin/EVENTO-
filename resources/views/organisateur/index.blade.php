{{-- <x-Organisateur-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-Organisateur-layout> --}}

<!DOCTYPE HTML>
<html>
<head>

<link href="{{ asset('helps/cssscsss/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('helps/cssscsss/style.css') }}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{ asset('helps/cssscsss/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ asset('helps/jssss/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('helps/jssss/modernizr.custom.js') }}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="{{ asset('helps/cssscsss/animate.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('helps/jssss/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="{{ asset('helps/jssss/Chart.js') }}"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="{{ asset('helps/cssscsss/clndr.css') }}" type="text/css" />
<script src="{{ asset('helps/jssss/underscore-min.js') }}" type="text/javascript"></script>
<script src= "{{ asset('helps/js/moment-2.2.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('helps/jssss/clndr.js') }}" type="text/javascript"></script>
<script src="{{ asset('helps/jssss/site.js') }}" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="{{ asset('helps/jssss/metisMenu.min.js') }}"></script>
<script src="{{ asset('helps/jssss/custom.js') }}"></script>
<link href="{{ asset('helps/cssscsss/custom.css') }}" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
    
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
                            @role('Organisateur')
							<x-nav-link :href="route('organizer.events')" >
                                {{ __('Gestion Of events') }}
                            </x-nav-link>
                                <x-nav-link :href="route('user.reservations')" >
                                {{ __('Gestion Of Reservations') }}
                            </x-nav-link></a>
                            @endrole
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			@include('NavBar')
			
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<!-- <div class="col-md-4 widget"> -->
					<!-- </div> -->
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>YOUR EVENTS</h5>
							<h4> NUMBER</h4>
						</div>
						@if (isset($eventCount))
						<div class="stats-right">
							<label> {{ $eventCount }}</label>
						</div>
						@endif
						
						<div class="clearfix"> </div>	
					</div>
					
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
				
				<div class="row">
					
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>PRODUCT</th>
									<th>PROGRESS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Lorem ipsum</td>
									<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Aliquam</td>
									<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Lorem ipsum</td>
									<td><h5  class="down">40% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Aliquam</td>
									<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Lorem ipsum</td>
									<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Aliquam</td>
									<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			
				
			
			</div>
		</div>

	</div>
	<!-- Classie -->
		<script src="jssss/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="jssss/jquery.nicescroll.js"></script>
	<script src="jssss/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="jssss/bootstrap.js"> </script>
</body>
</html>
