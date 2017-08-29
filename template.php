<?php

/**
 * @file
 * template.php
 */

/*
 * When viewing a node in 'full' mode, show contextual links. The navigation
 * tabs are hidden by CSS.
 */
function smith_node_view_alter(&$build) {
  if ($build['#view_mode'] == 'full' && $build['#entity_type'] == 'node' && isset($build['#node']) && !empty($build['#node']->nid)) {
    $build['#contextual_links']['node'] = array('node', array($build['#node']->nid));
  }
}

/*
 * An implementation of theme_entity_property()
 */
function smith_entity_property($variables) {
  return cbf_entity_property($variables);
}

