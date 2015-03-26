<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function ctk_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function ctk_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function ctk_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function ctk_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

//function ctk_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function ctk_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function ctk_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function ctk_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function ctk_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function ctk_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $classes = (is_array($form['actions']['submit']['#attributes']['class']))
//      ? $form['actions']['submit']['#attributes']['class']
//      : array();
//    $classes = array_merge($classes, array('secondary', 'button', 'radius'));
//    $form['actions']['submit']['#attributes']['class'] = $classes;
//  }
//}

/**
 * Implements hook_form_FORM_ID_alter()
 * Example of using foundation sexy buttons on comment form
 */
//function ctk_form_comment_form_alter(&$form, &$form_state) {
  // Sexy preview buttons
//  $classes = (is_array($form['actions']['preview']['#attributes']['class']))
//    ? $form['actions']['preview']['#attributes']['class']
//    : array();
//  $classes = array_merge($classes, array('secondary', 'button', 'radius'));
//  $form['actions']['preview']['#attributes']['class'] = $classes;
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function ctk_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function ctk_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}

function ctk_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline inline-list">' : '<ul class="links">';
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<label class="field-label">' . $variables['label'] . '</label>';
  }
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="label radius secondary taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';
  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '">' . $output . '</div>';
  return $output;
}

function prev_next_link ( $nid, $type ) {
  $link = array (
          'url' => '',
          'title' => 'Нет',
          );

  switch ($type) {
    case 'next':
      $result = db_query("SELECT nid, title FROM {node} WHERE nid > :nid AND type != 'page' AND status = 1 ORDER BY nid ASC LIMIT 1", array(':nid' => $nid));
      break;

    case 'prev':
      $result = db_query("SELECT nid, title FROM {node} WHERE nid < :nid AND type != 'page' AND status = 1 ORDER BY nid DESC LIMIT 1", array(':nid' => $nid));
      break;

    default:
      return FALSE;
  }

  foreach ($result as $result_node) {
    if ( $result_node ) {
      $link_alias = drupal_lookup_path('alias', 'node/' . $result_node->nid);

      if ( $link_alias ) {
        $link = array (
          'url' => '/' . $link_alias,
          'title' => $result_node->title,
          );
      } else {
        $link = array (
          'url' => '/node/' . $result_node->nid,
          'title' => $result_node->title,
          );
      }
    }
  }

  return $link;
}

// code from http://p2k.ru/archives/61
function number_to_roman ($value) {
  if ( $value < 0 )
    return "";

  if ( !$value )
    return "0";

  $thousands = (int) ( $value / 1000) ;
  $value    -= $thousands * 1000;
  $result    = str_repeat ( "M", $thousands );

  $table = array (
    900 => "CM",
    500 => "D",
    400 => "CD",
    100 => "C",
    90  => "XC",
    50  => "L",
    40  => "XL",
    10  => "X",
    9   => "IX",
    5   => "V",
    4   => "IV",
    1   => "I"
    );

  while($value) {
    foreach ( $table as $part => $fragment )
      if ( $part <= $value )
        break;

    $amount    = (int) ( $value / $part );
    $value    -= $part * $amount;
    $result   .= str_repeat ( $fragment, $amount );
  }

  return $result;
}

function ctk_form_alter(&$form, &$form_state, $form_id) {
  // drupal_set_message('<pre>' . print_r($form, TRUE) . '</pre>');

  $form['keys_1']['#attributes']['placeholder'] = t('Поиск по сайту');
  $form['keys_2']['#attributes']['placeholder'] = t('Поиск по сайту');
  $form['keys_2']['#attributes']['class'][] = '';
  $form['submit_1']['#attributes']['class'][] = 'element-invisible';
  $form['submit_2']['#attributes']['class'][] = 'element-invisible';
}
