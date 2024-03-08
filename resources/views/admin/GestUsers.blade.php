
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
    

	
		<!--left-fixed -navigation-->
		
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			@include('NavBar')
			
		</div>
<div class="col-md-8 stats-info stats-last widget-shadow" style="margin: 15%">
    <table class="table stats-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>States</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

