<?php

namespace Dhii\Util\String\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Util\String\CaptionAwareTrait}.
 *
 * @since [*next-version*]
 */
class CaptionAwareTraitTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Util\String\CaptionAwareTrait';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     */
    public function createInstance()
    {
        // Create mock
        $mock = $this->getMockForTrait(
            static::TEST_SUBJECT_CLASSNAME, [],
            '',
            true,
            true,
            true,
            [] // methods
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
     * Test the caption getter and setter methods to ensure correct value assignment and retrieval.
     *
     * @since [*next-version*]
     */
    public function testGetSetCaption()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $caption = 'foobar testing string';
        $reflect->_setCaption($caption);

        $this->assertEquals($caption, $reflect->_getCaption());
    }
}
