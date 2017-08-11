<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a title.
 *
 * @since [*next-version*]
 */
trait TitleAwareTrait
{
    /**
     * The title.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $title;

    /**
     * Retrieves the title for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $title The title to set.
     *
     * @return $this
     */
    protected function _setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
