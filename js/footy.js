window.onload = function draw(){
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

$(document).ready(function(){
	setInterval(colorMe, 10000);
	$('.fa.fa-terminal').css('color','red');

	var s = $('.popup');
	var o = $('.inside');
	var d = $('.display');
	d.fadeIn('slow');
	s.animate({width: 'toggle'}, function(){
		o.fadeIn('slow');
	});
	setTimeout(function(){
		o.fadeOut('slow', function(){
			s.animate({width: 'toggle'});
		});
	}, 7000);

	setInterval(checkcontinous, 100);
});


// $('#emailAlert').on('click', function (e) {
  //  e.preventDefault();

    //$('#emailAlert').hide(200);
  //});
  
 // $('nav .linkme a').on('click', function (event) {
	//  event.preventDefault();
  //});
  
  $('.fa.fa-terminal').on('click', function (event) {
	  event.preventDefault();
	  var i = document.querySelectorAll('.nav.navbar-nav.navbar-right li a');
	  for(j = 0; j < 6; j++){
	  	i[j].style.backgroundColor = 'black';
	  }
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

var color = ['red','orange','darkblue','green','darkmagenta','darkcyan','darkorchid','red'];
	var num = 0;
	function colorMe(){
		if(num == color.length){
			num = 0;
		}else {	
			$('.display').fadeTo(1000, 0.1,function(){
				$('.display').css('background', 'radial-gradient(' + color[num] + ', black)');
				$('.fa.fa-terminal').css('color', color[num]);
					$('.nav.navbar-nav.navbar-right li a').mouseover(function(){
						$(this).css('color', color[num]);
					});
					$('.nav.navbar-nav.navbar-right li a').mouseout(function(){
						$(this).css('color', 'darkgrey');
					});
				$('.display').fadeTo(1000, 1);
			});
		num++;
		}
	}
	

	function checkcontinous(){
		var i = document.querySelectorAll('.nav.navbar-nav.navbar-right li a');
		if($('.dis.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
		}else if($('.abo.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[0].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}else if($('.skill.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[1].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}else if($('.git.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[2].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}else if($('.code.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[3].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}else if($('.pro.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[4].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}else if($('.con.item.active').is(':visible')){
			for(var j = 0; j < 6; j++){ 
				i[j].style.backgroundColor = 'black';
			}
			i[5].style.backgroundColor = 'rgba(255,255,255, 0.1)';
		}
	}
