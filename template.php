<?php

/**
 * Implements template_preprocess_page().
 */
function solsud_preprocess_page($variables) {
  drupal_add_css('http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700', array('type' => 'external'));
  drupal_add_js(drupal_get_path('theme', 'solsud') . '/js/dropdown.js', array('type' => 'file', 'scope' => 'footer'));
  drupal_add_js(drupal_get_path('theme', 'solsud') . '/js/slideshow.js', array('type' => 'file', 'scope' => 'footer'));
  if (!$variables['is_front']) {
    drupal_add_js(drupal_get_path('theme', 'solsud') . '/js/sidebar.js', array('type' => 'file', 'scope' => 'footer'));
  }
}

/**
 * Implements theme_links().
 */
function solsud_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
    $tree = menu_tree('main-menu');
    return drupal_render($tree);
  }
  return theme_links($variables);
}

/**
 * Implements hook_css_alter().
 */
function solsud_css_alter(&$css) {
  unset($css[drupal_get_path('module','system') . '/system.menus.css']);
  unset($css[drupal_get_path('module','system') . '/system.theme.css']);
}
