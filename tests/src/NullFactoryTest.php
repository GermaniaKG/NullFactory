<?php
namespace tests;

use Germania\NullFactory\NullFactory;
use \InvalidArgumentException;

class NullFactoryTest extends \PHPUnit\Framework\TestCase
{


    public function testSimple()
    {
        $default_return = "foobar";

        $sut = new NullFactory( $default_return );
        $result = $sut("Anything else");

        $this->assertEquals($default_return, $result);

    }


}

