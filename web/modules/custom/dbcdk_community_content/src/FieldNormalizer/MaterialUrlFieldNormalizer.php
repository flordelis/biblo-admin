<?php

namespace Drupal\dbcdk_community_content\FieldNormalizer;

use Drupal\Core\Field\FieldItemBase;

/**
 * Normalize the output for a StringItem field containing urls with material ids.
 */
class MaterialUrlFieldNormalizer implements FieldNormalizerInterface {

  /**
   * {@inheritdoc}
   */
  public function normalize(FieldItemBase $field) {
    $url = $field->get('value')->getString();
    //Matches strings of the format https://somehost.dk/something/870970-basis:24438368
    if (preg_match('@/([0-9]*-.*:[^/.]*)@i', $url, $matches)) {
      return $matches[1];
    }
    
    return '';
  }

}
