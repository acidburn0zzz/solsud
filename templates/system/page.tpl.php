<div id="page-wrapper">
  <div id="page">
    <div id="header">
      <div class="section clearfix">
        <div id="sub-header">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
          <div id="solsud">
            <img src="/<?php print drupal_get_path('theme', 'solsud'); ?>/images/solidarite_sud.png" title="SOLIDARITÉ SUD" />
          </div>
          <div id="slogan">
            <?php print $site_slogan; ?>
          </div>
          <?php print render($page['header']); ?>
        </div>
        <div id="main-menu" class="navigation">
          <?php print theme('links', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </div>
        <div id="slideshow">
          <?php for ($i = 1; $i <= 12; $i++): ?>
            <?php if ($i == 1): ?>
              <img class="active" src="/<?php print drupal_get_path('theme', 'solsud'); ?>/images/<?php print $i; ?>.jpg">
            <?php endif; ?>
            <img src="/<?php print drupal_get_path('theme', 'solsud'); ?>/images/<?php print $i; ?>.jpg">
          <?php endfor; ?>
        </div>
      </div>
    </div>
    <?php if ($messages): ?>
      <div id="messages">
        <div class="section clearfix">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>
    <div id="main-wrapper" class="clearfix">
      <div id="main" class="clearfix">
        <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first" class="column sidebar">
            <div class="section">
              <?php print render($page['sidebar_first']); ?>
            </div>
          </div>
        <?php endif; ?>
        <div id="content" class="column">
          <div class="section">
            <?php if (($title && !isset($node))): ?>
              <h1 class="title" id="page-title">
                <?php print $title; ?>
              </h1>
            <?php endif; ?>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php print render($page['content']); ?>
          </div>
        </div>
        <?php if ($page['sidebar_second']): ?>
          <div id="sidebar-second" class="column sidebar">
            <div class="section">
              <?php print render($page['sidebar_second']); ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div id="footer-wrapper">
      <div class="section">
        <div id="footer" class="clearfix">
          <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
