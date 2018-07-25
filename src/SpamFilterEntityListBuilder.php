<?php

namespace Drupal\spam_filter;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Spam filter entity entities.
 *
 * @ingroup spam_filter
 */
class SpamFilterEntityListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Spam filter entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\spam_filter\Entity\SpamFilterEntity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.spam_filter_entity.edit_form',
      ['spam_filter_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
