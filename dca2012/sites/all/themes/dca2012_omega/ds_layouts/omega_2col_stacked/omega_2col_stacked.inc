<?php

/**
 * @file
 * Display Suite Omega 2 Column layout configuration.
 */

function ds_omega_2col_stacked() {
  return array(
    'label' => t('Omega 2 Column Stacked - UI grid classes'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (example_layout.css)
     'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (example_layout.png)
     'image' => TRUE,
  );
}
