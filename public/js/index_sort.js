//
var ItemsCatBtns = $$('#darbi .btn-menu-horizontal');
for (var i in ItemsCatBtns) {
    ItemsCatBtns[i].onclick = function(e) {
        e && e.preventDefault();
        for (var ii in ItemsCatBtns) ItemsCatBtns[ii].classList.remove('btn-menu-horizontal-active');
        this.classList.add('btn-menu-horizontal-active');
        ItemsSort(this.getAttribute('data-catid'), $('#galerija .box-slide-all'), $('#darbi .box-buttons-ring'));
    }
}

function ItemsSort(catId, slideAll, ringBtns) {
    var activeItems = [];
    for (var i = 0; i < workItems.length; i++) if (+workItems[i].catid == catId || catId < 0) activeItems.push(workItems[i]);
    //if(slideAll.offsetHeight) slideAll.style.height = slideAll.offsetHeight+'px';
    _removeAllChild(slideAll);
    _removeAllChild(ringBtns);
    //veidojam jaunus
    var divtmp = '', ii = 0;
    for (var i = 0; i < activeItems.length; i++) {
        divtmp += '<a href="#"><div class="box-foto"><div class="box-hover">\
<div class="box-ring"><span><span><span><span></span></span></span></span></div><div class="box-ringtxt">\
' + activeItems[i].title + '<span class="txt-foto">\
' + ((+activeItems[i].catid >= 0 && +activeItems[i].catid < btnCategories.length) ? btnCategories[+activeItems[i].catid] : '') + '</span></div></div>\
<img src="' + activeItems[i].image + '" alt="foto: ' + activeItems[i].image + '" /></div></a>';
        ii += 1;
        if (ii === WORK_ITEMS_DEMO_COUNT || i === activeItems.length - 1) {
            var div = document.createElement("div");
            div.classList.add('box-slide');
            div.innerHTML = divtmp;
            if (slideAll.children.length == 0) div.style.opacity=0;
            slideAll.appendChild(div);
            if (slideAll.children.length == 1) setTimeout(function(){div.style.opacity=1;}, 1);
            divtmp = '';
            ii = 0;
            var btn = document.createElement("button");
            btn.classList.add('btn-ring');
            if (ringBtns.children.length == 0) btn.classList.add('btn-ring-active');
            ringBtns.appendChild(btn);
        }
    }
    if (slideAll.children.length) setTimeout(function(){slideAll.children[0].style.opacity=1;}, 0);
    workSlideBtnsOnClick();
    return activeItems.length;
}
