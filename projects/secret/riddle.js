$(document).ready(function() {

	var questions = [
		'69 jagatud 3-ga',
		'Eelmisele vastusele liita 3',
		'Eelmine vastus jagada 2-ga',
		'Eelmine vastus korrutada 10-ga',
		'Eelmine vastus korrutada 1.25-ga ning jäta see meelde',
		'64.2 korda 2.5',
		'Esimese osa vastusest lahutada eelmise küsimuse vastus'

	];

	var answer = [
		'23',
		'26',
		'13',
		'130',
		'162.5',
		'160.5',
		'2'
	]

	var achievements = {
		1: {
			heading: 'Age clicker',
			desc: "You have clicked as many times as your age"
		},
		2: {
			heading: 'Quick maths',
			desc: "You have completed this very simple maths quiz to unlock next hint "
		},
		3: {
			heading: 'Love',
			desc: "19.06.2017 is 44 added up, that's the exact amount You have clicked"
		},
		4: {
			heading: 'Shop',
			desc: "You have unlocked the shop"
		}
	}


	var stuff = $('.question-container')[0].childElementCount;
	var count = 0;
	var counter = localStorage.getItem("clicks");
	var color = 0;
	var header = localStorage.getItem("header");


	$.each(questions, function (i) {
		$('.riddle-question').append('<h2 id="q'+ i +'">' + questions[i] + '</h2>');
	})

	$('.riddle-question h2').hide();
	$('.riddle-hint').hide();
	$('#click-count').hide();
	$('.shop').hide();

	function populateAnswer() {
		if(localStorage.visited == 'yes' ) {
			count = 8;
			$('#desc').text("You've been here before, did You just want to see the hint again or are you here for something else?");
		} else {
			count++;
			for (var i = 0; i < stuff; i++) {
				var randomAnswer = Math.floor((Math.random() * 300) + 1);
				if(count == 7) {
					$('#' + (i + 1)).text(Math.floor((Math.random() * 20) + 1));
				} else if(count == 5 || count == 6)  {
					$('#' + (i + 1)).text(Math.floor((Math.random() * 300) + 1) + 0.5);
				} else {
					$('#' + (i + 1)).text(randomAnswer);
				}
			}
			$('#q' + (count - 1) + '').show();
			$('#q' + (count - 2) + '').hide();
		}
		if(count == 1) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 2) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 3) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 4) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 5) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 6) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if(count == 7) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else {
			if (localStorage.getItem("visited") === null) {
				$('#desc').text("Congratulations You've unlocked the hint");
				achievement(2);
				localStorage.setItem("visited", "yes");
			}
			$('.question-container').fadeOut();
			$('.riddle-hint').text('Three boxes are presented to you: The box with zombies, the box with zumos and the box with creatures. The answer to the questions is the box you seek.');
			$('.riddle-hint').fadeIn();
		}
	}




	/*Clicker game*/
	$('#header').click(function () {
		clickFunction();
		localStorage.setItem("clicks", counter);
	})

	function clickFunction(e) {
		if (e === 0) {
			if (localStorage.getItem("clicks") === null) {
				counter == 0;
			} else {
				counter == localStorage.getItem("clicks");
			}
		}
		counter++
		$('#click-count').text(counter);
		if (localStorage.getItem("header") != null) {
			$('#header').text(localStorage.getItem("header"));
		}
		if (localStorage.getItem("clicksVisible") != null) {
			$('#click-count').text(counter).delay(300).fadeIn(1200);
		}
		if (localStorage.getItem("shopUnlocked") != null) {
			$('.shop').delay(300).fadeIn(1200);
		}
		if(counter == 10) {
			$('#header').text('Hello my baby');
			localStorage.setItem("header", 'Hello my baby');
		} else if (counter == 22) {
			achievement(1);
			localStorage.setItem("header", 'Keep going');
			$('#header').text('Keep going');
			$('.fun').text('Are you having fun yet? :D')
		} else if (counter >= 35 && counter < 44) {
			if(color < 1) {
				color = color + 0.1;
			} else {
				color = 1;
			}
			$('#header').css({
				'background-color': 'rgba(255,0,0, '+ color +')'
			})
		} else if (counter == 44) {
			$('#header').css('color', 'white');
			$('#header').text('I love You!');
			localStorage.setItem("header", 'I love You!');
			localStorage.setItem("clicksVisible", 'yes');
			$('#click-count').text(counter).delay(300).fadeIn(1200);
			achievement(3);
			$('.riddle-hint').text('test').delay(300).fadeIn(1200);
		} else if (counter == 100) {
			localStorage.setItem("shopUnlocked", 'yes');
			$('.shop').delay(300).fadeIn(1200);
			achievement(4);
		}
	}

	$('.question-container button').click(function () {
		if(($(this).text()) == answer[count - 1]) {
			populateAnswer();
			$(this).css({
				'background' : 'green'
			})
			$('.question-container button').removeAttr( "style" );
		} else {
			$(this).css({
				'box-shadow' : '0px 5px 20px 0px rgb(243, 8, 8)',
				'background' : 'red'
			})
		}
	})

	$('.achievement-page').click(function () {
		populateAchievements();
		$('.achievement-page').toggleClass('achievements-open');
	})

	function achievement(e) {
		if(e === undefined) {
			if(localStorage.getItem("achievements") === 'unlocked') {
				$('.achievement-page').fadeIn();
			}
			return;
		} else {
			if(localStorage.getItem("achievements") === null) {
				localStorage.setItem("achievements", "unlocked");
				$('.achievement-page').fadeIn();
			}
			if(localStorage.getItem('achievement' + e) === null) {
				$('.achievement').empty().append('<h3 style="margin-top: 12px; margin-bottom: 6px;">'+ achievements[e].heading +'</h3>','<p style="margin-top: 0px">'+ achievements[e].desc +'</p>');
				$('.achievement').slideDown().delay(3000).slideUp();
				localStorage.setItem('achievement' +  e, 'achievement' +  e);
				populateAchievements();
			}
		}
	}

	function populateAchievements(e) {
		if (e == 0) {
			for ( var i = 1, len = Object.keys(achievements).length; i <= len; ++i ) {
				if($('.achievementS' + i).length < 1) {
					$('.achievement-container').prepend('<div class="achievement-p achievementS' + i + '"><h3 style="margin-top: 12px; margin-bottom: 6px;">' + achievements[i].heading.replace(/\w/g, "?") + '</h3><p style="margin-top: 0px; margin-bottom: 8px;">' + achievements[i].desc.replace(/\w/g, "?") + '</p></div>');
				}
			}
		} else {
			for ( var i = 0, len = localStorage.length; i < len; ++i ) {
				if(localStorage.getItem('achievement' + i) != null) {
					if($('.achievement' + i).length < 1) {
						$('.achievementS' + i).fadeOut().remove();
						$('.achievement-container').append('<div class="achievement-p achievement'+ i +'"><h3 style="margin-top: 12px; margin-bottom: 6px;">'+ achievements[i].heading +'</h3><p style="margin-top: 0px; margin-bottom: 8px;">'+ achievements[i].desc +'</p></div>').fadeIn;
					}
				}
			}
		}
	}

	function init() {
		populateAchievements(0);
		populateAnswer();
		achievement();
		clickFunction();
	}

	init();
});