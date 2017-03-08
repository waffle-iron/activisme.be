<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activisme | Tom Manhaeghe </title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Opulent a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

		<link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.min.css') }}"	 type="text/css" media="all">
		<link rel="stylesheet" href="{{ base_url('assets/css/style.css') }}" 			 type="text/css" media="all">
		<link rel="stylesheet" href="{{ base_url('assets/css/font-awesome.min.css') }}"	 type="text/css" media="all">
		<link rel="stylesheet" href="{{ base_url('assets/css/chocolat.css') }}"			 type="text/css" media="all">
		<link rel="stylesheet" href="{{ base_url('assets/css/owl.carousel.css') }}"		 type="text/css" media="all">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css" media="all">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"	type="text/css" media="all">
	</head>
	<body>
		<div class="header" id="agilehome">
			<img src="{{ base_url('assets/images/header.jpg') }}" alt="Opulent">

			<h1>ACTIVISME_BE</h1>
			<h2> - <span>TOM MANHAEGHE</span> - </h2>

			<div class="navigation">

				<div class="nav-grids">
					<div class="ch-grid">
						<div class="col-md-2 nav-grid nav-grid1">
							<div class="ch-item ch-img-1">
								<div class="ch-info-wrap">
									<div class="ch-info">
										<div class="ch-info-front ch-img-1"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
										<div class="ch-info-back">
											<h3><a class="scroll" href="index.html">HOME</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 nav-grid nav-grid2">
							<div class="ch-item ch-img-2">
								<div class="ch-info-wrap">
									<div class="ch-info">
										<div class="ch-info-front ch-img-1"><i class="fa fa-male" aria-hidden="true"></i></div>
										<div class="ch-info-back">
											<h3><a class="scroll" href="register.html">registeer</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 nav-grid nav-grid5">
							<div class="ch-item ch-img-5">
								<div class="ch-info-wrap">
									<div class="ch-info">
										<div class="ch-info-front ch-img-1"><i class="fa fa-users" aria-hidden="true"></i></div>
										<div class="ch-info-back">
											<h3><a class="scroll" href="login.html">Log In</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 nav-grid nav-grid6">
							<div class="ch-item ch-img-6">
								<div class="ch-info-wrap">
									<div class="ch-info">
										<div class="ch-info-front ch-img-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<div class="ch-info-back">
											<h3><a class="scroll cont" href="mailto:info@activisme.be">CONTACT</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="aitsresumewthree" id="aitsresumewthree">
			<div class="container">
                @if (! empty($this->session->flashdata('class')) && ! empty($this->session->flashdata('message')))
                    <div class="{{ $this->session->flashdata('class') }} alert-dismissable fade in" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ $this->session->flashdata('message') }}
                    </div>
                @endif

				<h3>Log In</h3>
				<p></p>

				<div align="center">
					<form class="" action="{{ base_url('authencation/verify') }}" method="post">
                        <table width="300" border="0">
    						<tr>
    							<td>Email :</td>
    							<td><input type="email" name="email" placeholder="Email" required="" name="Email"></td>
    						</tr>
    						<tr>
    							<td>Paswoord :</td>
    							<td><input type="password" name="password" placeholder="Password" name="Password"></td>
    						</tr>
    						<tr>
    							<td>Log In</td>
    							<td><input type="submit" value="Login"></td>
    						</tr>
    					</table>
					</form>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="copyright slideanim">
					<p>&copy; 2017 Activisme.be. All Rights Reserved </p>
				</div>
			</div>
		</div>

        <a href="#" id="toTop" class="stuoyal3w stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>

 		<script type="text/javascript" src="{{ base_url('assets/js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/easyResponsiveTabs.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/waypoints.min.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/counterup.min.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/bars.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/jquery.filterizr.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/controls.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ base_url('assets/js/easing.js') }}"></script>
        <script type="text/javascript" src="{{ base_url('assets/js/jquery.chocolat.js') }}"></script>
        <script type="text/javascript" src="{{ base_url('assets/js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ base_url('assets/js/app.js') }}"></script>
    </body>
</html>