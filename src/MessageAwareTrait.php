<?php

namespace Dhii\Util\String;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Common functionality for things that are aware of a message.
 *
 * @since [*next-version*]
 */
trait MessageAwareTrait
{
    /**
     * The message.
     *
     * @since [*next-version*]
     *
     * @var string|Stringable
     */
    protected $message;

    /**
     * Retrieves the message for this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    protected function _getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message for this instance.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $message The message to set.
     *
     * @return $this
     */
    protected function _setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
