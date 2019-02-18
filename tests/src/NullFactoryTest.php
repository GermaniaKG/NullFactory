<?php
namespace tests;

use Germania\NullFactory\NullFactory;
use \InvalidArgumentException;

class NullFactoryTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @dataProvider provideVariousDefaultReturns
     */
    public function testSimple( $default_return )
    {

        $sut = new NullFactory( $default_return );
        $result = $sut("Anything else");

        $this->assertEquals($default_return, $result);

    }


    public function provideVariousDefaultReturns()
    {
        return array(
            [ "foobar" ],
            [ 99 ],
            [ array("foo", "bar")],
            [ null ],
            [ false ],
            [ true ],
            [ 0 ]
        );
    }

}

