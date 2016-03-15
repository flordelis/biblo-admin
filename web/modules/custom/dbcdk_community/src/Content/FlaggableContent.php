<?php

/**
 * @file
 * FlaggableContent class definition.
 */

namespace Drupal\dbcdk_community\Content;

use DBCDK\CommunityServices\Model\Flag;

/**
 * A piece of community content with 0 or more flags attached.
 *
 * Users can flag content to bring it to attention of the moderators
 * of the site. Objects of this class represent pieces of such content
 * with attached flags.
 */
class FlaggableContent {

  /**
   * The object representing the piece of content which can be flagged.
   *
   * @var object $object
   */
  protected $object;

  /**
   * The flags attached to the content.
   *
   * @var Flag[] $flags
   */
  protected $flags = [];

  /**
   * FlaggableContent constructor.
   *
   * @param object $object
   *   The flaggable object.
   */
  public function __construct($object) {
    $this->object = $object;
  }

  /**
   * Function to check equality of two FlaggableContent objects.
   *
   * @param FlaggableContent $other
   *   The object to compare against.
   *
   * @return bool
   *   Whether the two objects are considered equal.
   */
  public function equals(FlaggableContent $other) {
    return $this->object == $other->object;
  }

  /**
   * Attach a flag to this piece of content.
   *
   * @param Flag $flag
   *   The flag to attach.
   *
   * @return FlaggableContent
   *   Return the current object.
   */
  public function addFlag(Flag $flag) {
    $this->flags[] = $flag;
    usort($this->flags, function(Flag $a, Flag $b) {
      return $a->getTimeFlagged()->getTimestamp() - $b->getTimeFlagged()->getTimestamp();
    });
    return $this;
  }

  /**
   * Attach multiple flags to this piece of content.
   *
   * @param Flag[] $flags
   *   The flags to attach.
   *
   * @return FlaggableContent
   *   Return the current object.
   */
  public function addFlags(array $flags) {
    array_walk($flags, function(Flag $flag) {
      $this->addFlag($flag);
    });
    return $this;
  }

  /**
   * Get all flags attached to this piece of content.
   *
   * @return Flag[]
   *   All attached flags.
   */
  public function getFlags() {
    return $this->flags;
  }

  /**
   * Get the content for the piece of content.
   *
   * @return string
   *   The actual flagged content.
   */
  public function getContent() {
    $content = '';
    if (method_exists($this->object, 'getTitle')) {
      $content .= $this->object->getTitle() . ': ';
    }
    $content .= $this->object->getContent();
    return $content;
  }

  /**
   * Get the most recent flag attached to this piece of content.
   *
   * Most recent is the time where the flag was created.
   *
   * @return Flag
   *   The most recent flag.
   */
  public function getLatestFlag() {
    $flags = array_reverse($this->flags);
    return array_shift($flags);
  }

}