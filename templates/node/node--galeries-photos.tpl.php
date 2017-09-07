<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <h1 class="title" id="page-title">
      <?php print $title; ?>
    </h1>
    <?php print render($content); ?>
  </div>
</div>
