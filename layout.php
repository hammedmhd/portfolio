<?php

$header = <<<FOOTY
<!DOCTYPE html>
<html>
	<head>
		<title>Hammed</title>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta name="title" content="Mohammed Hammed">
		<meta name="description" content="Mohammed Hammed is a Web developer & UI/UX designer  from England. This website includes his projects, portfolio and contact information.">
		<meta property="og:title" content="Mohammed Hammed's website">
		<meta property="og:url" content="http://hammedmhd.pe.hu">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Mohammed Hammed is a Web developer & UI/UX designer from England. This website includes his projects, portfolio and contact information.">
		<link rel="shortcut icon" href="img/eee.ico" type="image/x-icon">
		<link rel='stylesheet' href='css/bootstrap.css?0.2'>
		<link rel='stylesheet' href='layout.css?16.7'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">

	</head>
	<body>
		<script src='js/jquery-3.1.1.js'></script>
		<script src='js/bootstrap.min.js'></script>	
				<nav class="navbar navbar-inverse" id="s-padding">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tabs" aria-expanded="false">
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					</button>
					<a data-target="#slide" data-slide-to="0" class="navbar-brand">
						<i class='fa fa-terminal'></i>
					</a>
				</div>
				<div class='collapse navbar-collapse' id='tabs'>
					<ul class='nav navbar-nav navbar-right catch'>
					<li class='linkme' id='about'><a data-target="#slide" data-slide-to="1">About</a></li>
					<li class='linkme' id='skill'><a data-target="#slide" data-slide-to="2">Skills</a></li>
					<li class='linkme' id='github'><a data-target="#slide" data-slide-to="3">Github</a></li>
					<li class='linkme' id='codewars'><a data-target="#slide" data-slide-to="4">Codewars</a></li>
					<li class='linkme' id='projects'><a data-target="#slide" data-slide-to="5">Projects</a></li>
					<li class='linkme' id='contact'><a data-target="#slide" data-slide-to="6">Contact</a></li>
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'><i class='fa fa-external-link'></i><i class='fa fa-caret-down'></i></a>
						<ul class='dropdown-menu'>
							<li><a target="_blank" href="https://www.codewars.com/users/hammedmhd"><img style='width:13px; height:15px' src='img/icon-codewars.png'></i> Codewars</a></li>
							<li><a target="_blank" href="https://github.com/mhd-hmd"><i class='fa fa-github'></i> Github</a></li>
							<li><a target="_blank" href="https://www.facebook.com/mhdahmed1"><i class='fa fa-facebook'></i> Facebook</a></li>
							<li><a target="_blank" href='https://twitter.com/hammedmhd'><i class='fa fa-twitter'></i> Twitter</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</nav>
		<div class="fill">
		<div id="slide" class="carousel slide">
		<div class="carousel-inner" role="listbox">
			 <ol class="carousel-indicators">
	          <li data-target="#slide" data-slide-to="0" class="active"></li>
	          <li data-target="#slide" data-slide-to="1"></li>
	          <li data-target="#slide" data-slide-to="2"></li>
			  <li data-target="#slide" data-slide-to="3"></li>
	          <li data-target="#slide" data-slide-to="4"></li>
			  <li data-target="#slide" data-slide-to="5"></li>
	          <li data-target="#slide" data-slide-to="6"></li>
	        </ol>
			<div class="dis item active">
				<section class="row text-center display" alt="First Slide">
					<div class='col-md-8 col-md-offset-2'>
						<p class='name'>M. Hammed</p>
						<p class='post'>Web developer & UI/UX designer</p>
					</div>
				</section>
			</div>
		<div class="abo item">
			<section class='row text-center about'>
				    <div class="col-md-8 col-md-offset-2">
						<h1>Hi there!</h1>
						<br><br><p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>
						I<b style='font-size:22px'>'</b>m <b style='font-size:20px'>Mohammed Hammed</b>, an end to end web developer & UI/UX designer from England.
						</p>	
						<p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>I enjoy developing SPA, dynamic and feature-rich applications, while seeking<br>the best techniques and applying <b>clean code</b>.
						</p>
						<p style='color:rgba(0,0,0,0.6); font-size:18px; text-align:center'>Whether you've lost your original developer, need additional resources, or looking for a brand new app, i<b style='font-size:22px'>'</b>m interested to hear your story and be of assistance to <b style='font-size:20px'>you</b>.
						</p>
					</div>
			</section>
		</div>
		<div class="skill item">
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
		</div>
		<div class="git item">
			<section class='row github'>
				<div class='col-md-8 col-md-offset-2'>
					<div class="col-sm-6 col-md-3 text-center col-sm-push-6 col-md-push-9">
						<img style='width:150px; height:150px' src='img/github.png'/>
						<span style='margin-top:20px; font-size:30px; display:block'>Github</span>
					</div>
					<div class="col-sm-6 col-md-9 col-sm-pull-6 col-md-pull-3">
						<p style='color:rgba(0,0,0,0.6); font-size:18px'>GitHub is a web-based Git repository hosting service. 
						It provides all of the distributed revision control and source code management (SCM) functionality of Git while also adding its own features.
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
			</div>
			<div class="code item">
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
			</div>
			<div class="pro item">
			<section class='row projects'>
				<div class='col-xs-8 col-xs-offset-2'>
					<div style='white-space:nowrap' class='col-sm-6 col-md-6 col-sm-push-7 col-md-push-7 text-center'>
					<i class='fa fa-tv'></i>&nbsp;<i class='fa fa-gears'></i>
					<h2 class='font' style='color:white; font-size:30px; padding-bottom:10px'>Projects</h2>
					</div>
					<div class='text-center col-md-6 col-sm-6 col-sm-pull-6 col-md-pull-6'>
					<h4 class='exp'>Mixture of personal and client-based projects.</h4>
					</div>
					<div class='col-sm-6 col-md-6 col-md-pull-6 col-sm-pull-6 text-center adjust'>
					<div class='w3-card-4'>
								<div class='w3-container'>
									<img class='thu' src='img/LegacyTaskingSystemThumbnail.png' alt='Legacy Tasking System'>
									<div class='caption'>
									<a href='https://github.com/mhd-hmd/LTS/archive/master.zip'>
									<p class='text-center thumbcolor'><span class='fa fa-download'></span> Legacy Tasking System</p>
									</a>
									</div>
								</div>
					</div>
					<div class='w3-card-4 spaceme'>
							<div class='w3-container'>
								<img class='thu' src='img/Inventory_system_Orders.jpg' alt='Inventory system'>
								<div class='caption'>
								<a href='https://github.com/mhd-hmd/Inventory/archive/master.zip'>
								<p class='text-center thumbcolor'><span class='fa fa-download'></span> Inventory system</p>
								</a>
								</div>
							</div>
					</div>
					</div>
				</div>
			</section>
			</div>
			<div class="con item">
			<section class='row contact'>
				<div class='col-md-8 col-md-offset-2'>
					<div class='col-sm-6 col-sm-push-6 col-md-3 col-md-push-9 text-center'>
						<i class='fa fa-envelope-o'></i>
						<h2>Contact</h2>
					</div>
					<div class='col-sm-6 col-sm-pull-4 col-md-9 col-md-pull-3'>
					<p style='display:none' id='success'></p>
					<form id='emailAlert' method='post' action='mailMe.php' autocomplete='off'>
					<img id='loader' style='display:none' src='img/ajax-loader.gif'>
					<input class='move' type='text' name='name' id='name' placeholder='Name'>
					<input class='move' type='text' name='email' id='email' placeholder='Email'>
					<textarea class='move' rows='10' name='message' id='message' placeholder='Message'></textarea>
					<input type='submit' id='sendemall' name='submitMessage' value='Send'>
					<p style='margin-top:5px; font-size:13px'>or contact directly via <a href='mailto:hammedmhd@gmail.com'>hammedmhd@gmail.com</a>
					</form>
					</div>
				</div>
			</section>
			</div>
		</div>
		<a class="left carousel-control" href="#slide" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#slide" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
		</div>
		</div>
FOOTY;


$footer = <<<FOOTY
<script src='js/footy.js?7.5'></script>
<script>
$(document).bind('keyup', function(e) {
	        if(e.which == 39){
	        $('.carousel').carousel('next');	
	        }else if(e.which == 37){
	        $('.carousel').carousel('prev');
	    }
});
</script>
</body>
</html>
FOOTY;
//<div class="g-recaptcha" id="recaptcha" data-sitekey="6LfiGyoTAAAAAMjVqvSHHhCa-U_u7mmqMmJo9GsO"></div>
/*
		<p class='popup'><span class='inside'>Website ongoing maintenance.</span></p>




for carousel slide autoplay data-ride="carousel"
*/				
?>