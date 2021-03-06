<?php

namespace Drupal\dbcdk_community_content\Normalizer\Widget;

use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\dbcdk_community_content\FieldNormalizer\ColorFieldNormalizer;
use Drupal\dbcdk_community_content\FieldNormalizer\StringItemFieldNormalizer;
use Drupal\dbcdk_community_content\FieldNormalizer\FileFieldNormalizer;

/**
 * Normalizer for colored header widget.
 *
 * @see https://github.com/DBCDK/biblo/tree/master/src/client/components/WidgetContainer/widgets/ColoredHeaderWidget
 */
class ColoredHeaderWidgetNormalizer extends DefaultWidgetNormalizer {

  /**
   * {@inheritdoc}
   */
  protected function getSupportedBundle() {
    return 'colored_header';
  }

  /**
   * {@inheritdoc}
   */
  protected function getWidgetName() {
    return 'ColoredHeaderWidget';
  }

  /**
   * {@inheritdoc}
   */
  protected function getWidgetConfig(FieldableEntityInterface $object) {
    $stringNormalizer = new StringItemFieldNormalizer();
    $config = [
      'title' => $stringNormalizer->normalize($object->get('field_title')->first()),
      'text' => $stringNormalizer->normalize($object->get('field_text')->first()),
    ];
    $image_field = $object->get('field_image');
    if (!$image_field->isEmpty()) {
      $config['imageSrc'] = (new FileFieldNormalizer($this->fileStorage))->normalize($image_field->first());
    }

    return $config + parent::getWidgetConfig($object);
  }

}
