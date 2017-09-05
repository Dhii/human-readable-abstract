<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a name.
 *
 * @since [*next-version*]
 */
trait NameAwareTrait
{
    /**
     * The name.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $name;

    /**
     * Retrieves the name for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getName()
    {
        return $this->name;
    }

    /**
     * Sets the name for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $name The name to set.
     *
     * @return $this
     */
    protected function _setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
