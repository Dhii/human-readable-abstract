<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a caption.
 *
 * @since [*next-version*]
 */
trait CaptionAwareTrait
{
    /**
     * The caption.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $caption;

    /**
     * Retrieves the caption for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getCaption()
    {
        return $this->caption;
    }

    /**
     * Sets the caption for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $caption The caption to set.
     *
     * @return $this
     */
    protected function _setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }
}
