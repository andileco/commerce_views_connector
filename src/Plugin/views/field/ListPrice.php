<?php

namespace Drupal\commerce_views_connector\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Displays taxonomy term names and allows converting spaces to hyphens.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("commerce_views_connector_list_price")
 */
class ListPrice extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
  }

  public function getValue(ResultRow $values, $field = NULL) {
    $entity = $this->getEntity($values);
    $values = current($entity->get('list_price')->first()->toPrice());

    return $values;
  }

  public function advancedRender(ResultRow $values) {
    $entity = $this->getEntity($values);
    $values = current($entity->get('list_price')->first()->toPrice());

    return $values;
  }

}
