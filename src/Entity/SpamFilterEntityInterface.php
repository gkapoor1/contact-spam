<?php

namespace Drupal\spam_filter\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Spam filter entity entities.
 *
 * @ingroup spam_filter
 */
interface SpamFilterEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Spam filter entity name.
   *
   * @return string
   *   Name of the Spam filter entity.
   */
  public function getName();

  /**
   * Sets the Spam filter entity name.
   *
   * @param string $name
   *   The Spam filter entity name.
   *
   * @return \Drupal\spam_filter\Entity\SpamFilterEntityInterface
   *   The called Spam filter entity entity.
   */
  public function setName($name);

  /**
   * Gets the Spam filter entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Spam filter entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Spam filter entity creation timestamp.
   *
   * @param int $timestamp
   *   The Spam filter entity creation timestamp.
   *
   * @return \Drupal\spam_filter\Entity\SpamFilterEntityInterface
   *   The called Spam filter entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Spam filter entity published status indicator.
   *
   * Unpublished Spam filter entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Spam filter entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Spam filter entity.
   *
   * @param bool $published
   *   TRUE to set this Spam filter entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\spam_filter\Entity\SpamFilterEntityInterface
   *   The called Spam filter entity entity.
   */
  public function setPublished($published);

}
