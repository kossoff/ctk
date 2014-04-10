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

function ctk_prevnext($nid) {
  $prev = db_query("SELECT nid, title FROM {node} WHERE nid < :nid AND type != 'page' AND status = 1 ORDER BY nid DESC LIMIT 1", array(':nid' => $nid));
  $next = db_query("SELECT nid, title FROM {node} WHERE nid > :nid AND type != 'page' AND status = 1 ORDER BY nid ASC LIMIT 1", array(':nid' => $nid));

  $prev_link = FALSE;
  $next_link = FALSE;

  foreach ($prev as $prev_node) {
    $prev_alias = drupal_lookup_path('alias', 'node' . $prev_node->nid);

    if($prev_alias) {
      $prev_link = "<a href='/" . $prev_alias . "' title='previous'>" .$prev_node->title. "</a>";
    } else {
      $prev_link = "<a href='/node/" . $prev_node->nid . "' title='previous'>" .$prev_node->title. "</a>";
    }
  }

  foreach ($next as $next_node) {
    $next_alias = drupal_lookup_path('alias', 'node/' . $next_node->nid);

    if($next_alias) {
      $next_link = '<a href="/' . $next_alias . '" title="next">' .$next_node->title. '</a>';
    } else {
      $next_link = "<a href='/node/" . $next_node->nid . "' title='next'>" . $next_node->title . "</a>";
    }
  }

  $output = '<div id="prevnext_nodes" class="row">';
  if($prev_link) $output .= '<div class="large-6 columns"><i class="fi-arrow-left"></i> ' . t('Previous article: ') . $prev_link .'</div>';
  if($next_link) $output .= '<div class="large-6 columns">' . t('Next article: ') . $next_link .' <i class="fi-arrow-right"></i></div>';
  $output .= '</div>';

  return $output;
}

function ctk_form_alter(&$form, &$form_state, $form_id) {
//  drupal_set_message('<pre>' . print_r($form, TRUE) . '</pre>');

  $form['keys_1']['#attributes']['placeholder'] = t('Поиск по сайту');
  $form['keys_1']['#attributes']['class'][] = 'hide-for-touch';
  $form['submit_1']['#attributes']['class'][] = 'element-invisible';
}

function ctk_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  $form['search_api_views_fulltext'] = array(
    '#type' => 'textfield',
    //'#title' => t('Textbox title'),
    '#attributes' => array(
      'placeholder' => t('Например: Математика'),
      'class' => array('ctools-auto-submit-exclude'),
    ),
  );
}
