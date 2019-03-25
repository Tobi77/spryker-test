<?php

namespace PyzTest\Zed\HelloWorld\Business;

use Codeception\Test\Unit;
use Generated\Shared\DataBuilder\HelloWorldBuilder;

/**
 * @group PyzTest
 * @group Zed
 * @group StringReverser
 * @group Business
 * @group Facade
 * @group StringReverserFacadeTest
 * Add your own group annotations below this line
 */
class StringReverserFacadeTest extends Unit
{
    /**
     * @var \PyzTest\Zed\HelloWorld\HelloWorldBusinessTester
     */
    protected $tester;

    /**
     * @return void
     */
    public function testStringIsRevertedCorrectly()
    {
        //Arrange
        $stringReverserTransfer = (new HelloWorldBuilder([
            'originalString' => 'Hello Spryker!'
        ]))->build();

        //Act
        $stringReverserFacade = $this->tester->getLocator()->helloWorld()->facade();
        $stringReverserResultTransfer = $stringReverserFacade->reverseString($stringReverserTransfer);

        //Assert
        $this->assertEquals(
            '!rekyrpS olleH',
            $stringReverserResultTransfer->getReversedString()
        );
    }
}
