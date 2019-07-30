<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/dashboard_assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/dashboard_assets/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/css/styles.css') }}" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Custom Font-->
	<link href="{{ asset('dashboard_assets/css/font.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Clear</span>Edge</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="@yield('dashboard-page')">
				<a href="{{ url('/home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a>
			</li>

			<li class="@yield('add-logo-page')">
				<a href="{{ url('add/logo') }}"><em class="fa fa-plus">&nbsp;</em> Add Logo</a>
			</li>

			<li class="@yield('add-menu-page')">
				<a href="{{ url('add/menu') }}"><em class="fa fa-plus">&nbsp;</em> Add Menu</a>
			</li>

			<li class="@yield('add-submenu-page')">
				<a href="{{ url('add/submenu') }}"><em class="fa fa-plus">&nbsp;</em> Add Submenu</a>
			</li>

			<li class="@yield('add-page-page')">
				<a href="{{ url('add/page') }}"><em class="fa fa-plus">&nbsp;</em> Add Page</a>
			</li>

			<li class="@yield('add-banner-page')">
				<a href="{{ url('add/banner') }}"><em class="fa fa-plus">&nbsp;</em> Banner</a>
			</li>

			<li class="@yield('add-service-page')">
				<a href="{{ url('add/service') }}"><em class="fa fa-plus">&nbsp;</em> Service</a>
			</li>

			<li class="@yield('add-product-page')">
				<a href="{{ url('add/product') }}"><em class="fa fa-plus">&nbsp;</em> Add Products</a>
			</li>

			<li class="@yield('add-moreproduct-page')">
				<a href="{{ url('add/moreproduct') }}"><em class="fa fa-plus">&nbsp;</em> Add More Products</a>
			</li>

			<li class="@yield('add-support-page')">
				<a href="{{ url('add/support') }}"><em class="fa fa-plus">&nbsp;</em> Support</a>
			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Contact <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>

				<ul class="children collapse" id="sub-item-1">
					<li class="@yield('add-whyus-page')">
						<a href="{{ url('add/whyus') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Why Us
					</a></li>

					<li class="@yield('add-office-page')">
						<a href="{{ url('add/office') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Our Offices
					</a></li>

					<li class="@yield('add-city-page')">
						<a href="{{ url('add/city') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> City
					</a></li>

					<li class="@yield('add-link-page')">
						<a href="{{ url('add/link') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Link
					</a></li>

					<li class="@yield('add-sociallink-page')">
						<a href="{{ url('add/sociallink') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>Social Link
					</a></li>

					<li class="@yield('add-payment-page')">
						<a href="{{ url('add/payment') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>Payment
					</a></li>
				</ul>
			</li>

			<li class="@yield('add-footer-page')">
				<a href="{{ url('add/footer') }}"><em class="fa fa-plus">&nbsp;</em> Footer</a>
			</li>

			<li>
				<a href="{{ url('/') }}" target="_blank"><em class="fa fa-dashboard">&nbsp;</em> Visit Website</a>
			</li>


			<li><a href="{{ route('logout') }}"
				 onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();"<em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
											 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													 @csrf
											 </form>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@yield('content')

	</div>	<!--/.main-->
	<script src="{{ asset('dashboard_assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/custom.js') }}"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
		});
	};
	</script>

</body>
</html>
