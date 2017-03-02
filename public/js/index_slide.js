//galvas fons
var headSlideBtns = $$('#sakums .box-buttons-ring button')
var headSlides = $$('#sakums .box-slide');
var optionBtns = $$('.box-top-navi select option');
for (var i in headSlideBtns) {
    headSlideBtns[i].onclick = function(e) {
        e && e.preventDefault();
        var idx = headSlideBtns.indexOf(this);
        slideTo(idx, headSlideBtns, headSlides, true);
        $('.box-top-navi').style.backgroundColor = 'rgba(' + headBackgrounds[idx].toneRGB + ', .9)';
        for (var ii in optionBtns) optionBtns[ii].style.backgroundColor = 'rgb(' + headBackgrounds[idx].toneRGB + ')';
    }
}

//fotogalerija
function workSlideBtnsOnClick() {
    var workSlideBtns = $$('#darbi .box-buttons-ring button')
    var workSlides = $$('#galerija .box-slide')
    for (var i in workSlideBtns) {
        workSlideBtns[i].onclick = function(e) {
            e && e.preventDefault();
            slideTo(workSlideBtns.indexOf(this), workSlideBtns, workSlides);
        }
    }
}
//darbinieku bildes
var teamSlideBtns = $$('#komanda .box-buttons-ring button')
var teamSlides = $$('#komanda .box-slide')
for (var i in teamSlideBtns) {
    teamSlideBtns[i].onclick = function(e) {
        e && e.preventDefault();
        slideTo(teamSlideBtns.indexOf(this), teamSlideBtns, teamSlides);
    }
}
//
function slideTo(index = 0, btns = [], slides = [], toY = false) {
    if (index >= 0 && index < btns.length && slides.length > 0) {
        for (var i in btns) btns[i].classList.remove('btn-ring-active')
        btns[index].classList.add('btn-ring-active');
        for (var i in slides) slides[i].style.transform = ((toY) ? 'translateY(' : 'translateX(') + (-100 * index) + '%)'
    }
}
//
