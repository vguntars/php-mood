//
var navi = $$('.box-top-navi a');
for (var i in navi) {
    navi[i].onclick = function(e) {
        event.preventDefault();
        var scrollElementID = this.getAttribute('href');
        var scrollElement = $(scrollElementID);
        if (scrollElement) {
            var distanceFromTop = scrollElement.offsetTop;
            var scrollDistanceFromTop = document.documentElement.scrollTop || document.body.scrollTop;
            var distance = distanceFromTop - scrollDistanceFromTop;
            // var navbarHeight = $('#top').offsetHeight;
            // m('Scrollēšana uzsākta')
            scroll(distance, 8, 120, 180, 6);
            // m('Scrollēšana pabeigta');
        }
    }
}


function scroll(distance_px, tOut = 0, slowStart = 0, slowStop = 0, slowKoef = 1) {
    var scro = function(dist, st) {
        window.setTimeout(function() {
            st = Math.abs(st);
            if (slowStart > 0) {
                st = slowKoef;
                slowStart -= slowKoef;
            } else {
                st = step;
            }
            if (slowStop > 0 && Math.abs(dist) - st <= slowStop) {
                st = Math.max(0, Math.abs(dist) - slowStop);
                st = (dist > 0) ? st : -st;
                window.scrollBy(0, st);
                dist -= st;
                slowStop = 0;
                st = step = slowKoef;
            }
            if (st < 1 || tOut < 1) st = Math.abs(dist)
            st = (dist > 0) ? st : -st;
            st = (dist > 0) ? Math.min(dist, st) : Math.max(dist, st);
            window.scrollBy(0, st);
            dist -= st;
            if (dist != 0) scro(dist, st)
        }, tOut)
    }
    var step = Math.max(Math.round(Math.abs(distance_px) / 50), slowKoef);
    scro(distance_px, step);
}

window.onscroll = function(e) {
    var scrollDistanceFromTop = document.documentElement.scrollTop || document.body.scrollTop;
    for (var i in navi) {
        var distanceFromTop = $(navi[i].getAttribute('href')).offsetTop;
        if (distanceFromTop - scrollDistanceFromTop < window.innerHeight / 2) changeNavi(navi[i])
    }
}

//Navigacijas elementa iezīmēšana
function changeNavi(naviElement) {
    for (var i in navi) {
        navi[i].classList.remove('hover-navi');
        if (naviElement.id != 'top-logo') naviElement.classList.add('hover-navi');
    }
}
