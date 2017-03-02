
    <!-- Peldošā izvēlne sākums -->
    <div class="box-top-navi">
        <div class="box-section cf">
            <a id="top-logo" href="#sakums"><img class="pic-logo-navi" src="grafika/logoV-01.png" alt="MOOD logo mazais" />
                <div class="txt-logo-navi">dizaina darbnīca</div>
            </a>
            <select id="lang-select">
              <?php echo render_langs($langs_cfg, $lang)?>
            </select>
  <div class="box-right cf">
                <ul>
                   <?php echo render_nav($menu_lang, $menu_cfg)?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Peldošā izvēlne beigas -->
