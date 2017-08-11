<?php


namespace Dhii\Util\String\FuncTest;

use Xpmock\TestCase;
use Dhii\Util\String\TitleAwareTrait;

/**
 * Tests {@see \Dhii\Util\String\TitleAwareTrait}.
 *
 * @since [*next-version*]
 */
class TitleAwareTraitTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Util\String\TitleAwareTrait';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     */
    public function createInstance()
    {
        // Create mock
        $mock = $this->getMockForTrait(
            static::TEST_SUBJECT_CLASSNAME,  [],
            '',
            true,
            true,
            true,
            [] // methods
        );

        return $mock;
    }

    /**
     * Tests the title getter and setter methods to ensure correct value assignment and retrieval.
     *
     * @since [*next-version*]
     */
    public function testGetSetDescription()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $title = 'foobar testing string';
        $reflect->_setTitle($title);

        $this->assertEquals($title, $reflect->_getTitle());
    }
}
