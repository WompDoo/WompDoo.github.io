$(document).ready(function () {

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

	var items = {
		1: {
			heading: 'Alternate Reality Goggles',
			desc: "Who knows what You might find?",
			price: 2000000
		},
		2: {
			heading: 'Click Upgrade',
			desc: "Upgrades your clicks",
			price: 10
		},
		3: {
			heading: 'Autoclicker',
			desc: "Clicks for you",
			price: 10
		},
		4: {
			heading: 'Autoclicker upgrade',
			desc: "Upgrades the autoclicker to click more often",
			price: 10
		}
	}

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

	var boughtItems = [];

	var stuff = $('.question-container')[0].childElementCount;
	var count = 0;
	var counter = localStorage.getItem("clicks");
	var header = localStorage.getItem("header");
	var price = localStorage.getItem("clickPrice");
	var shopItem = '';
	var multiplier = 1;
	var click = localStorage.getItem("click");
	var autoClickInterval = localStorage.getItem("autoClickInterval");
	var autoClickCount = localStorage.getItem("autoClickCount");


	$.each(questions, function (i) {
		$('.riddle-question').append('<h2 id="q' + i + '">' + questions[i] + '</h2>');
	})

	$('.riddle-question h2').hide();
	$('.riddle-hint').hide();
	$('#click-count').hide();
	$('.shop').hide();

	function populateAnswer() {
		if (localStorage.visited == 'yes') {
			count = 8;
			$('#desc').text("You've been here before, did You just want to see the hint again or are you here for something else?");
		} else {
			count++;
			for (var i = 0; i < stuff; i++) {
				var randomAnswer = Math.floor((Math.random() * 300) + 1);
				if (count == 7) {
					$('#' + (i + 1)).text(Math.floor((Math.random() * 20) + 1));
				} else if (count == 5 || count == 6) {
					$('#' + (i + 1)).text(Math.floor((Math.random() * 300) + 1) + 0.5);
				} else {
					$('#' + (i + 1)).text(randomAnswer);
				}
			}
			$('#q' + (count - 1) + '').show();
			$('#q' + (count - 2) + '').hide();
		}
		if (count == 1) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 2) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 3) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 4) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 5) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 6) {
			$('#' + Math.floor((Math.random() * 4) + 1)).text(answer[count - 1]);
		} else if (count == 7) {
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
	};


	/*Clicker game*/
	$('#header').click(function () {
		clickFunction();
		/*localStorage.setItem("clicks", counter);*/
	})

	$('.shop').click(function () {
		$('.shop-container').toggleClass('shop-open');
		$(this).toggleClass('shop-open-change');
		$('#shop-click-count').text(counter);
		for (var i = 0, len = Object.keys(items).length; i < len; ++i) {
			price = items[i + 1].price;
			if (i == 1 && localStorage.getItem("clickPrice") != null) {
				price = localStorage.getItem("clickPrice");
			}
			if (i == 2 && localStorage.getItem("clickPrice2") != null) {
				price = localStorage.getItem("clickPrice2");
			}
			if (i == 3 && localStorage.getItem("clickPrice3") != null) {
				price = localStorage.getItem("clickPrice3");
			}
			if(localStorage.BoughtItems != null && boughtItems > 0 && boughtItems == (i + 1)) {
				for (var e = 0, v = boughtItems.length; e < v; ++e) {
					price = 'Bought';
				}
			}
			if ($('.item-' + i).length < 1) {
				$('.shop-items-container').append('<div class="item item-' + i + '"><div class="item-picture"></div><h3 class="item-heading">' + items[i + 1].heading + '</h3><p class="item-desc">' + items[i + 1].desc + '</p><div id="item-' + i + '" class="item-price">' + price + '</div></div>')
			}
		}
	});

	$(document).on('click', '.item-price', function(){
		shopItem = this.id;
		price = $(this).text();
		shopping(shopItem, price);
	});

	function shopping(shopItem, price) {
		if(counter >= price) {
			counter = counter - price;
			localStorage.setItem("clicks", counter);
			$('#shop-click-count').text(counter);
			$('#click-count').text(counter);
		} else if (price == 'Bought') {
			return;
		} else {
			$('.alert-box').text('Not enough munies');
			$('.alert-box').css("display", "flex").hide().fadeIn().delay(1000).fadeOut('slow');
			return;
		}

		switch (shopItem) {
			case 'item-0':
				localStorage.setItem('BoughtItems', '1');
				boughtItems.push('1');
				$('#item-0').text('Bought');
				alternateReality();
				break;
			case 'item-1':
				price = price * 10;
				$('#item-1').text(price);
				localStorage.setItem("clickPrice", price);
				multiplier++;
				click = parseInt(click) * multiplier;
				localStorage.setItem("click", click);
				break;
			case 'item-2' :
				price = parseInt(price) + 1000 ;
				$('#item-2').text(price);
				localStorage.setItem("clickPrice2", price);
				localStorage.setItem("autoClicksUnlocked", 'yes');
				if(localStorage.getItem("autoClickCount") !=  null) {
					autoClickCount = 1;
				} else {
					autoClickCount = autoClickCount * 2;
				}
				localStorage.setItem("autoClickCount", autoClickCount);
				autoClicks();
				break;
			case 'item-3' :
				if(autoClickInterval == 500) {
					$('#item-0').text('Bought');
					localStorage.setItem("clickPrice3", 'Bought');
					return;
				}
				price = parseInt(price) + 10000 ;
				$('#item-3').text(price);
				localStorage.setItem("clickPrice3", price);
				if(autoClickInterval == 500) {
					$('#item-0').text('Bought');
					return;
				}
				autoClickInterval = parseInt(autoClickInterval) - 100 ;
				localStorage.setItem("autoClickInterval", autoClickInterval);


		}
	};


	function clickFunction(e) {
		if (e === 0) {
			if (localStorage.getItem("clicks") == null) {
				counter = 0;
				localStorage.setItem("clicks", counter);
				click = 1;
				localStorage.setItem("click", click);
				autoClickCount = 0;
				localStorage.setItem("autoClickCount", autoClickCount);
				autoClickInterval = 3000;
				localStorage.setItem("autoClickInterval", autoClickInterval);
			} else {
				counter = localStorage.getItem("clicks");
			}
		}
		counter = parseInt(counter) + parseInt(click);
		localStorage.setItem("clicks", counter);
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
		if (counter == 10) {
			$('#header').text('Hello my baby');
			localStorage.setItem("header", 'Hello my baby');
		} else if (counter == 22) {
			achievement(1);
			localStorage.setItem("header", 'Keep going');
			$('#header').text('Keep going');
			$('.fun').text('Are you having fun yet? :D')
		} else if (counter == 44) {
			$('#header').text('I love You!');
			localStorage.setItem("header", 'I love You!');
			localStorage.setItem("clicksVisible", 'yes');
			$('#click-count').text(counter).delay(300).fadeIn(1200);
			achievement(3);
			$('.riddle-hint').text('You have unlocked another hint. You have to check the downstairs storage room, grab my keys').delay(300).fadeIn(1200);
		} else if (counter == 100) {
			localStorage.setItem("shopUnlocked", 'yes');
			$('.shop').delay(300).fadeIn(1200);
			achievement(4);
		}
	};

	$('.question-container button').click(function () {
		if (($(this).text()) == answer[count - 1]) {
			populateAnswer();
			$(this).css({
				'background': 'green'
			})
			$('.question-container button').removeAttr("style");
		} else {
			$(this).css({
				'box-shadow': '0px 5px 20px 0px rgb(243, 8, 8)',
				'background': 'red'
			})
		}
	});

	$('.achievement-page').click(function () {
		populateAchievements();
		$('.achievement-page').toggleClass('achievements-open');
	});

	function achievement(e) {
		if (e === undefined) {
			if (localStorage.getItem("achievements") === 'unlocked') {
				$('.achievement-page').fadeIn();
			}
			return;
		} else {
			if (localStorage.getItem("achievements") === null) {
				localStorage.setItem("achievements", "unlocked");
				$('.achievement-page').fadeIn();
			}
			if (localStorage.getItem('achievement' + e) === null) {
				$('.achievement').empty().append('<h3 style="margin-top: 12px; margin-bottom: 6px;">' + achievements[e].heading + '</h3>', '<p style="margin-top: 0px">' + achievements[e].desc + '</p>');
				$('.achievement').slideDown().delay(3000).slideUp();
				localStorage.setItem('achievement' + e, 'achievement' + e);
				populateAchievements();
			}
		}
	};

	function populateAchievements(e) {
		if (e == 0) {
			for (var i = 1, len = Object.keys(achievements).length; i <= len; ++i) {
				if ($('.achievementS' + i).length < 1) {
					$('.achievement-container').prepend('<div class="achievement-p achievementS' + i + '"><h3 style="margin-top: 12px; margin-bottom: 6px;">' + achievements[i].heading.replace(/\w/g, "?") + '</h3><p style="margin-top: 0px; margin-bottom: 8px;">' + achievements[i].desc.replace(/\w/g, "?") + '</p></div>');
				}
			}
		} else {
			for (var i = 0, len = localStorage.length; i < len; ++i) {
				if (localStorage.getItem('achievement' + i) != null) {
					if ($('.achievement' + i).length < 1) {
						$('.achievementS' + i).fadeOut().remove();
						$('.achievement-container').append('<div class="achievement-p achievement' + i + '"><h3 style="margin-top: 12px; margin-bottom: 6px;">' + achievements[i].heading + '</h3><p style="margin-top: 0px; margin-bottom: 8px;">' + achievements[i].desc + '</p></div>').fadeIn;
					}
				}
			}
		}
	};
	
	function alternateReality() {
		$('.AR').fadeIn();
	}

	$('.AR').click(function () {
		$('body').toggleClass('body-AR');
		$('.hidden-text').fadeToggle('slow');
	})
	
	function checkBoughtItems() {
		if (localStorage.getItem('BoughtItems') != null) {
			boughtItems.push(localStorage.getItem('BoughtItems'));
			alternateReality()
		}
		if (localStorage.getItem('autoClicksUnlocked') != null) {
			autoClicks(parseInt(localStorage.getItem('autoClickCount')));
		}

	}

	var interval = null;
	function autoClicks() {
		clearInterval(interval);
		interval = setInterval(function(){
			counter = parseInt(counter) + parseInt(autoClickCount);
			$('#clicks-per-second').text('' + autoClickCount + '/' + autoClickInterval/1000 + 's');
			$('#click-count').text(counter);
			localStorage.setItem("clicks", counter);
		}, autoClickInterval);
	}


	var word = "muffin";
	var input = "";
	document.body.addEventListener('keypress',function(ev){
		input += String.fromCharCode(ev.keyCode);
		if(input == word){
			$('.alert-box').text('Check Your own bedside drawer, I love You!');
			$('.alert-box').css("display", "flex").hide().fadeIn().delay(10000).fadeOut('slow');
			input = "";
		}
	});

	$('.alert-box').click( function () {
		$('.alert-box').fadeOut();
	});
// reset input when pressing esc
	document.body.addEventListener('keyup',function(ev){
		if(ev.keyCode == 27) input = "";
	});

	function init() {
		populateAchievements(0);
		populateAnswer();
		achievement();
		clickFunction(0);
		checkBoughtItems();
	}

	init();
});