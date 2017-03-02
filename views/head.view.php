<!-- Sarkanais 1.bloks sākums -->
<div id="sakums" class="box-head">
    <div class="box-section cf">


        <div class="box-buttons-ring">
            <script>
                createBtnRing(headBackgrounds.length);
            </script>
        </div>
        <div class="box-logo-head">
            <img src="grafika/logoH-01.png" alt="MOOD logo lielais" />
        </div>
        <div class="box-txt-head">
            <p>
              <?php echo $head_lang['text'];?>
            </p>
        </div>
        <div class="box-socicons-head">
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="box-slide-all">
        <script>
            for (var i = 0; i < headBackgrounds.length; i++) {
                document.write('<div class="box-slide" style="background-image: url(' + headBackgrounds[i].image + ');\
background-color: rgba(' + headBackgrounds[i].toneRGB + ', 1)">\
<div class="box-slide-tone"  style="background-color: rgba(' + headBackgrounds[i].toneRGB + ', .3)">\
</div></div>')
            }
        </script>
    </div>
</div>
<!-- Sarkanais 1.bloks beigas -->
