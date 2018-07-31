<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>H7 RD Tool Portal</title>
	<link rel="stylesheet" type="text/css" href='{{url("/css/bootstrap.min.css")}}'>
	<link rel="stylesheet" type="text/css" href='{{url("/css/my.css")}}'>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="{{url('/project')}}">Hiero7 RD Tool</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{url('/project')}}">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{url('/project')}}">Project</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{url('/learn')}}">Learning</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>

    <footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">
				&copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
				Hiero7 RD-P &nbsp; Editor:Leo
			</p>
		</div>
	</footer>

    <script src='{{url("/js/jquery.min.js")}}'></script>
    <script src='{{url("/js/bootstrap.bundle.min.js")}}'></script>
</body>
</html>