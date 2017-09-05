<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a label.
 *
 * @since [*next-version*]
 */
trait LabelAwareTrait
{
    /**
     * The label.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $label;

    /**
     * Retrieves the label for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the label for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $label The label to set.
     *
     * @return $this
     */
    protected function _setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}
