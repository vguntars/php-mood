<!-- Zaļais 3.bloks sākums-->
<div id="komanda" class="box-team">
    <div class="box-section cf">
        <h3>Mūsu komanda</h3>
        <div class="box-txt-team">
            <p>
                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec
                tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu
                felis dapibus condimentum sit amet a augue.
            </p>
        </div>
        <div class="box-buttons-ring">
            <script>
                var btnCount = 0
                btnCount = parseInt(teamItems.length / TEAM_ITEMS_DEMO_COUNT)
                if (teamItems.length % TEAM_ITEMS_DEMO_COUNT) btnCount++
                    createBtnRing(btnCount)
            </script>
        </div>
        <div class="box-slide-all">
            <script>
                var ii = 0;
                for (var i = 0; i < teamItems.length; i++) {
                    if (ii === 0) document.write('<div class="box-slide">')
                    ii += 1
                    document.write(
                        '<div class="box-descrption">\
<div class="box-foto"><div class="box-fotohover">\
<span class="txt-foto1">Proin gravida nibh vel velit auctor aliquet</span>\
<span class="txt-foto2">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</span>\
<div class="box-socicons">\
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>\
<a href="#"><i class="fa fa-facebook"  style="font-size: 24px" aria-hidden="true"></i></a>\
<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></div></div>\
<img src="' + teamItems[i].image + '" alt="foto ' + teamItems[i].name + ' (' + teamItems[i].office + ')" /></div>\
<span class="txt-name">' + teamItems[i].name + '</span>\
<span class="txt-office">' + teamItems[i].office + '</span></div>')
                    if (ii === TEAM_ITEMS_DEMO_COUNT || i === teamItems.length - 1) {
                        document.write('</div>');
                        ii = 0;
                    }
                }
            </script>
        </div>
    </div>
</div>
<!-- Zaļais 3.bloks beigas -->
