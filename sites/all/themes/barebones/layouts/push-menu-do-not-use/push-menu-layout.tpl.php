<!-- Overall page container -->
<div class="container">
  <div id="mp-pusher" class="mp-pusher">
    <?php
    // the slideout menu is created in the page.preprocess.inc modules, if
    // successful than output it
    if (array_key_exists('slideout_menu', $variables) && $variables['slideout_menu'] != NULL) {
        print($variables['slideout_menu']);
    }
    ?>

    <!-- Position fixed of Navigation -->
    <div class="scroller">
      <div class="scroller-inner">
        <div <?php print $attributes; ?>>
          <header class="l-header" role="banner">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
              <?php endif; ?>
              <?php if ($site_name || $site_slogan): ?>
                <?php if ($site_name): ?>
                  <h1 class="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </h1>
                <?php endif; ?>

                <?php if ($site_slogan): ?>
                  <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
                <?php endif; ?>
              <?php endif; ?>
            <div id="off-canvas" class="l-off-canvas">
              <a id="trigger" class="menu-trigger" href="#">
                <div class="menu-image" title="Click here to expose menu to the left"></div>
              </a>
            </div>
          </header>

          <div class="l-main">
            <div class="l-content" role="main">
              <?php print render($page['highlighted']); ?>
              <?php print $breadcrumb; ?>
              <a id="main-content"></a>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                <h1><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php print $messages; ?>
              <?php print render($tabs); ?>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
            </div>

            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>
          </div>

          <footer class="l-footer" role="contentinfo">
            <?php print render($page['footer']); ?>
          </footer>
        </div>
      <!-- close the "scroller-inner" wrapper -->
    </div>
    <!-- Close the "scroller" wrapper -->
    </div>
  <!-- Close the push wrapper "mp-pusher" -->
  </div>
<!-- Close the overall page "container" wrapper -->
</div>
<script src="http://www.omega-barebones.com/sites/all/themes/barebones/js/classie.js"></script>
<script src="http://www.omega-barebones.com/sites/all/themes/barebones/js/mlpushmenu.js"></script>
<script>
  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
</script>
