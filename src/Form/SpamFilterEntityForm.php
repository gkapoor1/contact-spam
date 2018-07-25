<?php

namespace Drupal\spam_filter\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Spam filter entity edit forms.
 *
 * @ingroup spam_filter
 */
class SpamFilterEntityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\spam_filter\Entity\SpamFilterEntity */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Spam filter entity.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Spam filter entity.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.spam_filter_entity.canonical', ['spam_filter_entity' => $entity->id()]);
  }

}
