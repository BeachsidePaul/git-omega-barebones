<?php
/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Barebones theme.
 * Add unique class (mlid) to all menu items with the Menu title as class.
*/

function barebones_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $class_string = '';
  $name_id = strtolower(strip_tags($element['#title']));
// remove colons and anything past colons
  if (strpos($name_id, ':')) $name_id = substr ($name_id, 0, strpos($name_id, ':'));
//Preserve alphanumerics, everything else goes away
  $pattern = '/[^a-z]+/ ';
  $name_id = preg_replace($pattern, '', $name_id);
  $class_string  = 'menu-' . $element['#original_link']['mlid'] . ' ' . $name_id . ' ';
  $class_string .= 'level-' . $element['#original_link']['depth'];
  $element['#attributes']['class'][] = $class_string;
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function barebones_pager($variables) {
  dpm($variables);
  dpm($hook);
  $variables['tags'][0] = 'testpcc';
}
