<?php

namespace Dhii\Util\String\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Util\String\LabelAwareTrait}.
 *
 * @since [*next-version*]
 */
class LabelAwareTraitTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Util\String\LabelAwareTrait';

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
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInternalType(
            'object',
            $subject,
            'An instance of the test subject could not be created'
        );
    }

    /**
     * Tests the label getter and setter methods to ensure correct value assignment and retrieval.
     *
     * @since [*next-version*]
     */
    public function testGetSetLabel()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $label = 'foobar testing string';
        $reflect->_setLabel($label);

        $this->assertEquals($label, $reflect->_getLabel());
    }
}
