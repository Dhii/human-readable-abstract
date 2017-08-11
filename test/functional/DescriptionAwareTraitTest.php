<?php

namespace Dhii\Util\String\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Util\String\DescriptionAwareTrait}.
 *
 * @since [*next-version*]
 */
class DescriptionAwareTraitTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Util\String\DescriptionAwareTrait';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     */
    public function createInstance()
    {
        // Create mock
        $mock = $this->getMockForTrait(
            static::TEST_SUBJECT_CLASSNAME,
            [],
            '',
            true,
            true,
            true,
            []
        );

        return $mock;
    }

    /**
     * Tests the description getter and setter methods to ensure correct value assignment and retrieval.
     *
     * @since [*next-version*]
     */
    public function testGetSetDescription()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $desc = 'foobar testing string';
        $reflect->_setDescription($desc);

        $this->assertEquals($desc, $reflect->_getDescription());
    }
}
