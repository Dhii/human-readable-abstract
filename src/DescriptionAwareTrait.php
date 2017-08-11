<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a description.
 *
 * @since [*next-version*]
 */
trait DescriptionAwareTrait
{
    /**
     * The description.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $description;

    /**
     * Retrieves the description for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $description The description to set.
     *
     * @return $this
     */
    protected function _setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
