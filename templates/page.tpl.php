<div id="page-wrapper"><div id="page">

  <div id="header"><div class="section clearfix">

    <div id="sub-header">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      
      <div id="solsud">
        <img src="/sites/all/themes/solsud/images/solidarite_sud.png" title="SOLIDARITÉ SUD" />
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
      <img class="active" src="/sites/all/themes/solsud/images/1.jpg">
      <img src="/sites/all/themes/solsud/images/2.jpg">
      <img src="/sites/all/themes/solsud/images/3.jpg">
      <img src="/sites/all/themes/solsud/images/4.jpg">
      <img src="/sites/all/themes/solsud/images/5.jpg">
      <img src="/sites/all/themes/solsud/images/6.jpg">
      <img src="/sites/all/themes/solsud/images/7.jpg">
      <img src="/sites/all/themes/solsud/images/8.jpg">
      <img src="/sites/all/themes/solsud/images/9.jpg">
      <img src="/sites/all/themes/solsud/images/10.jpg">
      <img src="/sites/all/themes/solsud/images/11.jpg">
      <img src="/sites/all/themes/solsud/images/12.jpg">
    </div>

  </div></div>

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div>
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div>
    <?php endif; ?>

    <div id="content" class="column"><div class="section">

      <?php if (($title && !isset($node)) || $node->type != 'page'): ?>
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

    </div></div>

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div>
    <?php endif; ?>

  </div></div>

  <div id="footer-wrapper"><div class="section">
    <div id="footer" class="clearfix">
      <?php print render($page['footer']); ?>
    </div> <!-- /#footer -->
  </div></div>

</div></div>
