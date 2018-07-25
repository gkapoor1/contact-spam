<?php

/**
 * @file
 * Contains spam_filter_entity.page.inc.
 *
 * Page callback for Spam filter entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Spam filter entity templates.
 *
 * Default template: spam_filter_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_spam_filter_entity(array &$variables) {
  // Fetch SpamFilterEntity Entity Object.
  $spam_filter_entity = $variables['elements']['#spam_filter_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
