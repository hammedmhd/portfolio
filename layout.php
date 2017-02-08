<?php

$header = <<<FOOTY
<!DOCTYPE html>
<html>
	<head>
		<title>Changed</title>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, inital-scale=1.0'>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<link rel='stylesheet' href='layout.css?12.5'>
		<link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">

	</head>
	<body>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src='js/jquery-3.1.1.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script type="text/javascript" src="slick/slick/slick.min.js"></script>	
		<nav class="navbar navbar-inverse navbar-fixed-top above">
			<div class="container-fluid" id='s-padding'>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tabs" aria-expanded="false">
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					</button>
					<a href='#home' onclick='home()'class="navbar-brand">
						<i class='fa fa-code'></i>
					</a>
				</div>
				
				<div class='collapse navbar-collapse' id='tabs'>
					<ul class='nav navbar-nav navbar-right catch'>
					<li id='about'><a href='#about' onclick='scrollToAbout()'>About</a></li>
					<li id='skill'><a href='#skill' onclick='scrollToSkills()'>Skills</a></li>
					<li id='github'><a href='#github' onclick='scrollToGithub()'>Github</a></li>
					<li id='codewars'><a href='#codewars' onclick='scrollToCodewars()'>Codewars</a></li>
					<li id='projects'><a href='#projects' onclick='scrollToProjects()'>Projects</a></li>
					<li id='contact'><a href='#contact' onclick='scrollToContact()'>Contact</a></li>
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'><i class='fa fa-external-link'></i><i class='fa fa-caret-down'></i></a>
						<ul class='dropdown-menu'>
							<li><a style='color:#222222' href="https://www.codewars.com/users/hammedmhd"><img style='width:13px; height:15px' src='img/icon-codewars.png'></i> Codewars</a></li>
							<li><a style='color:#222222' href="https://github.com/mhd-hmd"><i class='fa fa-github'></i> Github</a></li>
							<li><a style='color:#222222' href="https://www.facebook.com/mhdahmed1"><i class='fa fa-facebook'></i> Facebook</a></li>
							<li><a style='color:#222222' href="#"><i class='fa fa-twitter'></i> Twitter</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<table class='display' cellspacing='0'>
			<tr>
			<td style='height:80%; padding-top:100px'><div class='front'>
			<div class='col-md-8 col-md-offset-2'>
			<p class='name'>M. Hammed</p>
			<p class='post'>Web developer & UI/UX designer</p>
			</div>
			</td></tr>
			<tr><td style='text-align:center'>
			<span onclick='scrollToAbout()' class='fa fa-arrow-circle-down white'></span>
			</td></tr>
		</table>

		<div style='height:auto' class='container-fluid'>
			<section class='row text-center about'>
				    <div class="col-md-8 col-md-offset-2">
						<h1>Hi there!</h1>
						<p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>
						I<b style='font-size:22px'>'</b>m <b style='font-size:20px'>Mohammed Hammed</b>, an end to end web developer & UI/UX designer from England.
						</p>	
						<p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>I enjoy developing dynamic and feature-rich applications, while seeking<br>the best techniques and applying <b>clean code</b>.
						</p>
						<p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>Whether you've lost your original developer, need additional resources, or looking for a brand new app, i<b style='font-size:22px'>'</b>m interested to hear your story and be of assistance to <b style='font-size:20px'>you</b>.
						</p>
					</div>
			</section>
			
			<section class='row skill'>
				<div class="col-md-8 col-md-offset-2">
				 	<div style='overflow:auto' class='col-sm-6 col-md-7 col-sm-push-2 col-md-push-0'>
					<h1 id='special'>Skills:</h1><br>
					</div>
					<div style='overflow:auto' class='col-sm-9 col-sm-push-2 col-md-10 col-md-push-1'>
						<div class='skills'>
							<img style='margin-left:10px' class='HTML5CSS3' src='img/HTML5CSS.png'>
							<img style='margin-left:5px' class='JavaScript' src='img/JavaScriptt.png'>
							<img style='margin-left:5px' class='PHP' src='img/PHP1.png'>
							<img style='margin-left:5px' class='MYSQL' src='img/MYSQLI.png'>
							<br>
							<canvas width='115px' height='60px' class='semiarc'></canvas>
							<canvas width='115px' height='60px' class='semiarc'></canvas>
						</div>
					</div>
				</div>
			</section>
			
			<section class='row github'>
				<div class='col-md-8 col-md-offset-2'>
					<div class="col-sm-6 col-md-3 text-center col-sm-push-6 col-md-push-9">
						<img style='width:150px; height:150px' src='img/github.png'/>
						<span style='margin-top:20px; font-size:30px; display:block'>Github</span>
					</div>
					<div class="col-sm-6 col-md-9 col-sm-pull-6 col-md-pull-3">
						<p style='color:rgba(0,0,0,0.6); font-size:18px'>GitHub is a web-based Git repository hosting service. 
						It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features.
						</p>
						<div class='text-center-xs'>
						<h3>Information:</h3>
							<div class='col-md-6'>
								<p class='word'><b>User:</b> mhdhmd</p>
								<p class='word'><b>Public repositories:</b> <i class='fa fa-circle-o-notch fa-spin'></i><span id='github-public_repos'></span></p>
							</div>
							<div class='col-md-6'>
								<p class='word'><b>Followers:</b> <i class='fa fa-circle-o-notch fa-spin'></i><span id='github-followers'></span></p>
								<p class='word'><b>Following:</b> <i class='fa fa-circle-o-notch fa-spin'></i><span id='github-following'></span></p>
							</div>
						</div>
					</div>
					<div class='col-xs-12'>
						<h3>Latest events: </h3>
						<ul id="github-events">
						  <li class="fa fa-circle-o-notch fa-spin fa-4x"></li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class='row codewars'>
				<div class='col-md-8 col-md-offset-2'>
					<div class='col-sm-6 col-md-3 text-center'>
						<img style='width:150px; height:150px' src='img/codewars.png'>
						<h2 style='margin-top:20px; color:white' class='col-xs-12'>Codewars</h2> 
					</div>
					<div class='col-sm-6 col-md-9'>
					<p>CodeWars is a great platform where you can improve your skills by training with others on solving real code challenges.</p>
					<p>Challenges are ranked from <img src='img/8kyu.png'> (easy, basic, fundamentals) to <img src='img/1kyu.png'> (hard, expert, compilers).</p>
					<p>All personal solutions can be found within my github repository accordingly. To access repository, <a href='#'>click here</a>. </p>
					<div class='text-center-xs'>
						<h3>My statistics:</h3>
						<div class='col-md-6'>
							<p><strong>User:</strong> <a href="#" data-tracking="http://www.codewars.com/users/mhdhmd">mhdhmd</a></p>
							<p><strong>Honor:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-honor"></span></p>
							<p><strong>Leaderboard Position:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-leaderboard"></span></p>
							<p><strong>Current rank:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-rank"></span></p>
						</div>
						<div class='col-md-6'>
							<p><strong>Score:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-score"></span></p>
							<p><strong>Katas authored:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-authored"></span></p>
							<p><strong>Katas completed:</strong> <i class="fa fa-circle-o-notch fa-spin"></i><span id="codewars-completed"></span></p>
						</div>
					</div>
					</div>
				</div>
			</section>
			
			
			<section class='row projects'>
				<div class='col-md-8 col-md-offset-2'>
					<div style='white-space:nowrap' class='col-sm-6 col-md-6 text-center'>
					<i class='fa fa-tv'></i>&nbsp;<i class='fa fa-gears'></i>
					<h2 class='font' style='color:white; font-size:30px; padding-bottom:10px'>Projects</h2>
					</div>
					<div class='col-sm-6 col-md-6 col-sm-pull-1 col-md-pull-1 text-center'>
					<h4 class='exp'>Mixture of personal and client based projects.</h4>
					</div>
					<div class='col-xs-12 text-center'>
						<div style='' class='portfolioprojects'>
							<div class='custom-thumbnail'>
								<a href='#'>
									<img class='thu' src='img/LegacyTaskingSystemThumbnail.png' alt='Legacy Tasking System'>
									<div class='caption'>
										<p class='text-center thumbcolor'>Legacy Tasking System</p>
									</div>	
								</a>
							</div>
							<div class='custom-thumbnail'>
								<a href='#'>
								<img class='thu' src='img/Inventory_system_Orders.jpg' alt='Inventory system'>
								<div class='caption'>
									<p class='text-center thumbcolor'>Inventory system</p>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class='row contact'>
				<div class='col-md-8 col-md-offset-2'>
					<div class='col-sm-6 col-sm-push-6 col-md-3 col-md-push-9 text-center'>
						<i class='fa fa-envelope-o'></i>
						<h2>Contact</h2>
					</div>
					<div class='col-sm-6 col-sm-pull-6 col-md-9 col-md-pull-3'>
					<p style='display:none' id='success'></p>
					<form id='emailAlert' method='post' action='mailMe.php'>
					<img id='loader' style='display:none' src='img/ajax-loader.gif'>
					<input class='move' type='text' name='name' id='name' placeholder='Full Name'>
					<input class='move' type='text' name='email' id='email' placeholder='Email'>
					<textarea class='move' rows='10' name='message' id='message' placeholder='Message'></textarea>
					<input type='submit' id='sendemall' name='submitMessage' value='Send'>
					<p style='margin-top:5px; font-size:13px'>or contact directly via <a href='mailto:hammedmhd@gmail.com'>hammedmhd@gmail.com</a>
					</form>
					</div>
				</div>
			</section>
			<section class='row unique' style='background-color:lightgrey'>
				<div class='col-xs-12 text-center sizing'>
					<a class='fa fa-twitter-square'></a>
					<a class='fa fa-github-square' href="https://github.com/mhd-hmd"></a>
					<a href="https://www.codewars.com/users/hammedmhd"><img style='cursor:pointer; padding-bottom:7px;' src="img/cod.png"></a>
					<a class='fa fa-facebook-square' href="https://www.facebook.com/mhdahmed1"></a>
				</div>
			</section>
			
        </div>
FOOTY;


$footer = <<<FOOTY
<script src='js/footy.js?5.15'></script>
</body>
</html>
FOOTY;
//<div class="g-recaptcha" id="recaptcha" data-sitekey="6LfiGyoTAAAAAMjVqvSHHhCa-U_u7mmqMmJo9GsO"></div>
					
?>