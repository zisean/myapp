<!DOCTYPE html>
<html lang="en">
<head>
	<title>Travelife Club</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/division">Travelife Club</a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Divisions <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/division">View Divisions</a></li>
							<li><a href="/division/create">Create New Division</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Members <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/member">View Members</a></li>
							<li><a href="/member/create">Create New Member</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Groups <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/group">View Groups</a></li>
							<li><a href="/group/create">Create New Group</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	@yield('content')
</body>
</html>