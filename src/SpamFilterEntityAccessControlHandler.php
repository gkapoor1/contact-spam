<?php

namespace Drupal\spam_filter;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Spam filter entity entity.
 *
 * @see \Drupal\spam_filter\Entity\SpamFilterEntity.
 */
class SpamFilterEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\spam_filter\Entity\SpamFilterEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished spam filter entity entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published spam filter entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit spam filter entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete spam filter entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add spam filter entity entities');
  }

}
