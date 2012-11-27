<div id="article-<?php print $node->nid; ?>" class="article <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($title && !$page): ?>
    <div class="header article-header">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h2<?php print $title_attributes; ?>>
          <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
        </h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>
  <?php endif; ?>


  <div<?php print $content_attributes; ?>>
    <div class="session-brief">
      <div class="session-speakers">
        <?php
        $speaker_count = count($node->field_speakers[LANGUAGE_NONE]);
        print "<h3 class='speaker'>";
        $speaker_count > 1 ? print 'Speakers:'  : print 'Speaker:';
        print "</h3>";
        foreach ($node->field_speakers[LANGUAGE_NONE] as $speaker) {
          $current_speaker = user_load($speaker['uid']);
          $speaker_photo = theme_image_style(array(
            'style_name' => 'thumbnail',
            'path' => $current_speaker->picture->uri,
            'alt' => $current_speaker->name,
            'title' => $current_speaker->name,
            'width' => 100,
            'height' => 96,
            'attributes' => array('class' => 'speaker-photo'),
            ));
          $current_user_path = 'user/' . $current_speaker->uid;
          print "<div class='session-speaker'>";
          print l($speaker_photo, $current_user_path, array('html' => TRUE));
          print l($current_speaker->name, $current_user_path);
          print "</div>";
        }
        ?>
      </div>
      <?php print render($content['body']); ?>
    </div>
    <?php print render($content['field_slides']); ?>
    <?php print render($content['field_track']); ?>
    <?php print render($content['field_experience']); ?>
    <?php print render($content['field_accepted']); ?>
  </div>
  <?php if ($flag = render($content['links']['flag'])): ?>
    <div class="menu node-links clearfix"><?php print $flag; ?></div>
  <?php endif; ?>
  <?php print render($content['comments']); ?>
</div>

