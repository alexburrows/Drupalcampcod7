<?php

/**
 * Implements hook_process_region().
 */
function dcavl_alpha_process_region(&$vars) {
  $theme = alpha_get_theme();
  if ($vars['elements']['#region'] == 'content') {
    $vars['messages'] = $theme->page['messages'];
  }
  if ($vars['elements']['#region'] == 'footer_breadcrumbs') {
    $vars['breadcrumb'] = $theme->page['breadcrumb'];
  }
}