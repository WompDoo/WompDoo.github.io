var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({triggerElement: "#one", duration: 1300, offset:180})
    .setTween(".firstLayer img", {top: 700})
    .addIndicators({name: "boot"}) // add indicators (requires plugin)
    .addTo(controller);
var scene = new ScrollMagic.Scene({triggerElement: "#one", duration: 1300, offset:170})
    .setTween(".secondLayer img", {top: 600})
    .addIndicators({name: "8"}) // add indicators (requires plugin)
    .addTo(controller);
var scene = new ScrollMagic.Scene({triggerElement: "#one", duration: 1300, offset:100})
    .setTween(".thirdLayer img", {top: 400})
    .addIndicators({name: "8"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 100})
    .setTween(".fist img", {left: 1330, top: 1610, className: "+=fistRotate"}) // trigger a TweenMax.to tween
    .addIndicators({name: "1 (duration: 100)"}) // add indicators (requires plugin)
    .addTo(controller);


var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", offset: 100})
    .setTween(".kuusk img", {className: "+=kuuskRotate"}) // trigger a TweenMax.to tween
    .addIndicators({name: "2 (duration: 400)"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#three", duration: 1000, offset: 475})
    .setPin("#three, #four, #five, #six", {pushFollowers: false})
    .addIndicators({name: "3 (duration: 1000)"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#three", duration: 1000, offset: 500})
    .setTween(".machine img", {left: -2300}) // trigger a TweenMax.to tween
    .addIndicators({name: "4 (duration: 1000)"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#three", duration: 1, offset: 765})
    .setTween(".kuuskSideways img", {opacity: 0}) // trigger a TweenMax.to tween
    .addIndicators({name: "5"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#three", duration: 1, offset: 765})
    .setTween(".conveyorLogs", {opacity: 1}) // trigger a TweenMax.to tween
    .addIndicators({name: "6"}) // add indicators (requires plugin)
    .addTo(controller);



// build scene
/*var scene = new ScrollMagic.Scene({triggerElement: "#four", duration: 1000, offset: 150})
    .setTween(".logsLeft img", {top: 4300})
    .addIndicators({name: "7"}) // add indicators (requires plugin)
    .addTo(controller);*/

/*var scene = new ScrollMagic.Scene({triggerElement: "#four", duration: 1000})
    .setTween(".logsRight img", {top: 4300})
    .addIndicators({name: "7"}) // add indicators (requires plugin)
    .addTo(controller);*/


var scene = new ScrollMagic.Scene({triggerElement: "#six", duration: 1300, offset: -500})
    .setTween(".fallingLogsLeft img", {top: 500})
    .addIndicators({name: "7"}) // add indicators (requires plugin)
    .addTo(controller);

var scene = new ScrollMagic.Scene({triggerElement: "#six", duration: 1300, offset: -500})
    .setTween(".fallingLogsRight img", {top: 500})
    .addIndicators({name: "7"}) // add indicators (requires plugin)
    .addTo(controller);



var tween1 = TweenMax.fromTo(".logsLeft img", 1,
    {top: 3000},
    {top: 3700, repeat: -1}
);

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#four", duration: 1000})
    .setTween(tween1)
    .addIndicators({name: "loop"}) // add indicators (requires plugin)
    .addTo(controller);


var tween2 = TweenMax.fromTo(".logsRight img", 1,
    {top: 3800},
    {top: 4000, repeat: -1}
);

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#four", duration: 1000})
    .setTween(tween2)
    .addIndicators({name: "loop"}) // add indicators (requires plugin)
    .addTo(controller);

var tween3 = TweenMax.fromTo(".logsLeft1 img", 1,
    {top: 4200},
    {top: 4350, repeat: -1}
);

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#four", duration: 1000})
    .setTween(tween3)
    .addIndicators({name: "loop"}) // add indicators (requires plugin)
    .addTo(controller);


/*
var scene = new ScrollMagic.Scene({triggerElement: "#four"})
    .setTween("#holder4 div", {className: "+=city"})
    .addIndicators({name: "5"}) // add indicators (requires plugin)
    .addTo(controller);
*/



// build scene
/*var scene = new ScrollMagic.Scene({triggerElement: "#trigger1"})
// trigger a velocity opaticy animation
    .setVelocity(".fist", {rotateZ: '90deg'}, {duration: 200})
    .addIndicators() // add indicators (requires plugin)
    .addTo(controller);*/


/*
var controller = new ScrollMagic.Controller();

$(function () { // wait for document ready
    // build tween
    var tween = new TimelineMax ()
        .add([
            TweenMax.to("#one .firstLayer", 1, {backgroundPosition: "-40% 0", ease: Linear.easeNone}),
            TweenMax.to("#one .secondLayer", 1, {backgroundPosition: "-500% 0", ease: Linear.easeNone}),
            TweenMax.to("#one .thirdLayer", 1, {backgroundPosition: "-225% 0", ease: Linear.easeNone})
        ]);

    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: "#one", duration: 2000, offset: 450})
        .setTween(tween)
        .setPin("#one")
        .addTo(controller);
});
*/


/*var wh = window.innerHeight,
    $iphone = $('.iphone'),
    $firstLayer = $('.firstLayer'),
    $innerS1 = $('.innerS1'),
    $innerS2 = $('.innerS2'),
    $innerS3 = $('.innerS3'),
    $innerS4 = $('.innerS4'),
    $screenHat = $('.screenHat'),
    $screenHat1 = $('.screenHat1'),
    $screenA = $('.screenA'),
    $screenB = $('.screenB'),
    $screenC = $('.screenC');

// init
var ctrl = new ScrollMagic.Controller({
    globalSceneOptions: {
        triggerHook: 'onLeave'
    }
});*/

// Create scene
/*$("section").each(function() {

    new ScrollMagic.Scene({
        triggerElement: this,
        duration: '50%'
    })
        .setPin(this)
        .addTo(ctrl);

});

// iPhone intro animation Tween
/!*
var iphoneIntro = TweenMax.from($iphone, 1, {
    yPercent: 50,
    xPercent: 100,
    ease: Cubic.easeOut
});
*!/

// iPhone intro animation Timeline
var iphoneIntroTl = new TimelineMax();
iphoneIntroTl
    /!*.from($iphone, 1, {yPercent: 50,xPercent: 100, ease: Power4.easeInOut})
    .to($innerS1, 0.5, {opacity: 0, yPercent: -5, scale: 0.98}, '0');*!/

// iPhone back to stylesheet position
new ScrollMagic.Scene({
    duration: '70%'
})
    .setTween(iphoneIntroTl)
    .triggerElement($('body')[0])
    .addTo(ctrl);

// Animate the hat up, letter A in and fade in content of section 2
var iphoneContentHat = new TimelineMax();
iphoneContentHat
    .fromTo($screenHat, 1, {autoAlpha: 1}, {autoAlpha: 0}, '1')
    .fromTo($screenHat1, 1, {xPercent: -20, autoAlpha: 0}, {autoAlpha: 1}, '1')
    .to($iphone, 1, {xPercent: 70}, '-=0.3');

new ScrollMagic.Scene({
    offset: wh*0.6,
    triggerElement: $('body')[0],
    duration: '80%'
})
    .setTween(iphoneContentHat)
    .addIndicators()
    .addTo(ctrl);

// Animate letter A out, letter B in and fade in content of section 3
var iphoneContent1Tl = new TimelineMax();
iphoneContent1Tl
    .to($screenA, 0.3, {yPercent: -30, autoAlpha: 0, ease: Power4.easeInOut})
    .fromTo($screenB, 1, {yPercent: 20, autoAlpha: 0}, {yPercent: 0, autoAlpha: 1, ease: Power4.easeInOut})
    .from($innerS3, 1, {autoAlpha: 0}, '-=0.7');

new ScrollMagic.Scene({
    triggerElement: $('.innerS2 h2')[0],
    duration: '50%'
})
    .setTween(iphoneContent1Tl)
    .addTo(ctrl);

// Animate letter B out, letter C in and fade in content of section 4
var iphoneContent2Tl = new TimelineMax();
iphoneContent2Tl
    .to($screenB, 0.3, {yPercent: -30, autoAlpha: 0, ease: Power4.easeInOut})
    .fromTo($screenC, 1, {yPercent: 20, autoAlpha: 0}, {yPercent: 0, autoAlpha: 1, ease: Power4.easeInOut})
    .from($innerS4, 1, {autoAlpha: 0}, '-=0.7');

new ScrollMagic.Scene({
    triggerElement: $('.innerS3 h2')[0],
    duration: '50%'
})
    .setTween(iphoneContent2Tl)
    .addTo(ctrl);*/


/*
var tween = new TimelineMax ()
    .add([
        TweenMax.to("#holder .firstLayer", 1, {backgroundPosition: "-40% 0", ease: Linear.easeNone}),
        TweenMax.to("#holder .secondLayer", 1, {backgroundPosition: "-500% 0", ease: Linear.easeNone}),
        TweenMax.to("#holder .ThirdLayer", 1, {backgroundPosition: "-225% 0", ease: Linear.easeNone})
    ]);

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#holder", duration: $(window).width()})
    .setTween(tween)
    .addTo(ctrl);*/
