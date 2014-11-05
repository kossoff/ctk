<?php

/**
 * Implements hook_panels_layouts()
 */
$plugin = array(
  'title' => t('Foundation: 2 column row, golden ratio'),
  'category' => t('Foundation: 2'),
  'icon' => 'ctk_2col.png',
  'theme' => 'ctk_2col',
  'regions' => array(
    'left' => t('Left'),
    'right' => t('Right')
  ),
);
