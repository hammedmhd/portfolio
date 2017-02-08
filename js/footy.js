window.onload = function draw(){
setInterval(check, 10); 
var x = document.getElementsByClassName('semiarc');
/*
for(var i = 0; i < x.length; i++){
var c = x[i].getContext("2d");

c.lineWidth = 1;
c.strokeStyle = 'red';
c.fillStyle = 'red';

c.beginPath();
c.moveTo(9,30);
c.bezierCurveTo(12,-2,55,0,58,28.5);
c.lineTo(54,28.5);
c.bezierCurveTo(52,5.5,15,3.5,13,30);
c.lineTo(9,30);
c.fill();

c.beginPath();
c.moveTo(67,30);
c.bezierCurveTo(70,-2,113,0,116,28.5);
c.lineTo(112,28.5);
c.bezierCurveTo(110,5.5,73,3.5,71,30);
c.lineTo(67,30);
c.fill();
}
*/

//for html/css section
var htm = x[0].getContext("2d");
htm.fillStyle = 'white';
htm.font = '12px Candara';
htm.fillText('95',27,27);
htm.fillText('BootStrap',8,50);
htm.fillText('80',85,27);
htm.fillText('SASS',78,50);


htm.lineWidth = 1;
htm.strokeStyle = 'red';
htm.fillStyle = 'red';
//arc 1
htm.beginPath();
htm.moveTo(9,30);
htm.bezierCurveTo(12,-2,55,1,58,25);
htm.lineTo(54,26);
htm.bezierCurveTo(52,5.5,15,3.5,13,30);
htm.lineTo(9,30);
htm.fill();
//arc 2
htm.beginPath();
htm.moveTo(67,30);
htm.bezierCurveTo(70,-2,105,4,108,12);
htm.lineTo(104,13);
htm.bezierCurveTo(102,8,73,3.5,71,30);
htm.lineTo(67,30);
htm.fill();


//JavaScript section
var htm = x[1].getContext("2d");
htm.fillStyle = 'white';
htm.font = '12px Candara';
htm.fillText('99',26,28);
htm.fillText('JQuery',15,50);
htm.fillText('99',84,28);
htm.fillText('AJAX',78,50);

htm.lineWidth = 1;
htm.strokeStyle = 'red';
htm.fillStyle = 'red';
//arc 1
htm.beginPath();
htm.moveTo(9,30);
htm.bezierCurveTo(12,-2,55,1,58,28);
htm.lineTo(54,29);
htm.bezierCurveTo(52,5.5,15,3.5,13,30);
htm.lineTo(9,30);
htm.fill();
//arc 2
htm.beginPath();
htm.moveTo(67,30);
htm.bezierCurveTo(70,-2,113,1,116,28);
htm.lineTo(112,29);
htm.bezierCurveTo(110,5.5,73,3.5,71,30);
htm.lineTo(67,30);
htm.fill();


//var ph = x[2].getContext("2d");

//var mysq = x[3].getContext("2d");




};

function check(){
	var x; 
	var y;
	var body = $('body').scrollTop();
	var i = document.getElementsByClassName('above')[0];
	var r =	document.getElementsByClassName('container-fluid')[0];	
	if(body > 200){
		i.style.opacity = '0.8';
		r.style.padding = '0px 10px 0 20px';
	}else{
		i.style.opacity = '1';
		r.style.padding = '10px 10px 10px 20px';
	}
	var display = document.getElementsByClassName('display')[0].scrollHeight;
	var skill = document.getElementsByClassName('skill')[0].scrollHeight;
	var github = document.getElementsByClassName('github')[0].scrollHeight;
	var codew = document.getElementsByClassName('codewars')[0].scrollHeight;
	var projects = document.getElementsByClassName('projects')[0].scrollHeight;
	var contact = document.getElementsByClassName('contact')[0].scrollHeight;
	var contactHeight = $('.contact').offset().top;
	var projectHeight = $('.projects').offset().top;
	var codewHeight = $('.codewars').offset().top;
	var githubHeight = $('.github').offset().top;
	var skillHeight = $('.skill').offset().top;
	var aboutHeight = $('.about').offset().top;
	var displayHeight = $('.display').offset().top;
	
	if(body >= (aboutHeight - 100)){
		//if body scroll.. edit links backgroundColor
		y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[0];
		y.className = 'highlightMe';
		y.style.color = 'white';
		if(body >= (skillHeight - 100)){
			//if more than about section remove highlight
			y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[0];
			y.className = 'unHighlightMe';
			y.style.color = 'darkgrey';
			//add new highlight
			y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[1];
			y.style.color = 'white';
			y.className = 'highlightMe';
			if(body >= (githubHeight - 100)){
				//if more than about section remove highlight
				y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[1];
				y.className = 'unHighlightMe';
				y.style.color = 'darkgrey';
				//add new highlight
				y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[2];
				y.className = 'highlightMe';
				y.style.color = 'white';
				if(body >= (codewHeight - 100)){
					//if more than about section remove highlight
					y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[2];
					y.className = 'unHighlightMe';
					y.style.color = 'darkgrey';
					//add new highlight
					y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[3];
					y.className = 'highlightMe';
					y.style.color = 'white';
					if(body >= (projectHeight - 100)){
					//if more than about section remove highlight
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[3];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
						//add new highlight
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[4];
						y.className = 'highlightMe';
						y.style.color = 'white';
					if(body >= (contactHeight - 100)){
						//if more than about section remove highlight
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[4];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
						//add new highlight
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[5];
						y.className = 'highlightMe';
						y.style.color = 'white';
					}else if(body < (contactHeight - 100)){
						// unedit links backgroundColor, and set new.
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[5];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
					}
					}else if(body < (projectHeight - 100)){
						// unedit links backgroundColor, and set new.
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[4];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
					}
					}else if(body < (codewHeight - 100)){
						// unedit links backgroundColor, and set new.
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[3];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
					}
					}else if(body < (githubHeight - 100)){
						// unedit links backgroundColor, and set new.
						y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[2];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
					}
				}else if(body < (skillHeight - 100)){
					// unedit links backgroundColor, and set new.
					y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[1];
						y.className = 'unHighlightMe';
						y.style.color = 'darkgrey';
				}
				}else if(body < (aboutHeight - 100)){
					y = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[0];
					a = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[1];
					b = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[2];
					c = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[3];
					d = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[4];
					e = document.querySelectorAll('.nav.navbar-nav.navbar-right li a')[5];
					y.className = 'unHighlightMe';
					y.style.color = 'darkgrey';
					a.className = 'unHighlightMe';
					a.style.color = 'darkgrey';
					b.className = 'unHighlightMe';
					b.style.color = 'darkgrey';
					c.className = 'unHighlightMe';
					c.style.color = 'darkgrey';
					d.className = 'unHighlightMe';
					d.style.color = 'darkgrey';
					e.className = 'unHighlightMe';
					e.style.color = 'darkgrey';
					
				}
}

function home(){
	$('body').animate({scrollTop: $('.display').offset().top }, 1100, function(){
		x = document.querySelectorAll('.nav.navbar-nav.navbar-right li a');
		var i = 0;
		for(i; i < 6; i++){
			x[i].backgroundColor = '#222222';
		}
			
		
		
	});
	
}

function scrollToAbout(){
	$('body').animate({scrollTop: ($('.about').offset().top) - 50}, 1100);
}

function scrollToGithub(){ // not in use either of em except above 2.
	$('body').animate({scrollTop: ($('.github').offset().top) - 50}, 1100);
}

function scrollToCodewars(){
	$('body').animate({scrollTop: ($('.codewars').offset().top) - 50}, 1100);
}

function scrollToProjects(){
$('body').animate({scrollTop: ($('.projects').offset().top) - 50}, 1100);
}

function scrollToContact(){
$('body').animate({scrollTop: ($('.contact').offset().top) - 50}, 1100);
}

function scrollToSkills(){
$('body').animate({scrollTop: ($('.skill').offset().top) - 50}, 1100);
}

function mobilemenu(){
	if($('#mobile').is(':visible')){
	$('#mobile').slideUp();
	} else {
	$('#mobile').slideDown();
	}
}

var count = 0;
function dropMenu(){
	if(count == 0){
	var turn = 0;
	var output = document.getElementById('menub');
	var timer = setInterval(checker, 1);
	function checker(){
		if(turn == 90){
			clearInterval(timer);
			count++;
		}else{
			turn++;
			output.style.transform = 'rotate(' + turn + 'deg)';
		}
	}
	}else if(count == 1){
		var turn = 90;
		var output = document.getElementById('menub');
		var timer = setInterval(checker, 1);
		function checker(){
			if(turn == 0){
				clearInterval(timer);
				count = 0;
			}else{
				turn--;
				output.style.transform = 'rotate(' + turn + 'deg)';
			}
		}
	}
}

var c = 0;
function dropMenu2(){
	if(c == 0){
	var turn = 0;
	var output = document.getElementById('menub2');
	var timer = setInterval(checker, 1);
	function checker(){
		if(turn == 90){
			clearInterval(timer);
			c++;
		}else{
			turn++;
			output.style.transform = 'rotate(' + turn + 'deg)';
		}
	}
	}else if(c == 1){
		var turn = 90;
		var output = document.getElementById('menub2');
		var timer = setInterval(checker, 1);
		function checker(){
			if(turn == 0){
				clearInterval(timer);
				c = 0;
			}else{
				turn--;
				output.style.transform = 'rotate(' + turn + 'deg)';
			}
		}
	}
}

$(document).ready(function(){
	$('.portfolioprojects').slick({
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
		/* {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  infinite: true,
			  dots: true
			}
			}, //if pic 3 is available adjust accordingly.*/
		  {
			breakpoint: 900,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  },
		  {
			breakpoint: 600,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1
			}
		  }
		]
	});
});


// $('#emailAlert').on('click', function (e) {
  //  e.preventDefault();

    //$('#emailAlert').hide(200);
  //});
  
  $('nav a').on('click', function (event) {
	  event.preventDefault();
  });
  
  
  $('#emailAlert').submit(function (e) {
    e.preventDefault();
	$('#loader').show(10);
    var email = {
      name: $('#name').val(),
      email: $('#email').val(),
      message: $('#message').val()
    };

    $.ajax({
		type: 'POST',
		url: $('#emailAlert').attr('action'),
		data: email,
	})
	
	.done(function(response){
		$('#name').val('');
		$('#email').val('');
		$('#message').val('');
		$('#loader').hide(10);
		var success = document.getElementById('success');
		success.innerHTML = response;
		$('#emailAlert').hide(10);
		success = $('#success');
		success.fadeIn();
		if(document.getElementById('success').childNodes[0].innerHTML == 'Opps... looks like you missed out some details. please re-enter details and submit.'){
			$('#emailAlert').fadeIn();
		}
    });
  });