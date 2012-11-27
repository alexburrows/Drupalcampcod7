<aside<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="grid-<?php print $columns; ?>"><?php print $breadcrumb; ?></div>
    <?php endif; ?> 
    <?php print $content; ?>
  </div>
</aside>