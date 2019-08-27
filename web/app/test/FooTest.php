<?php

namespace WeDevTest\WeDev;

use WeDev\WeDev\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testGetName()
    {
        $foo = new Foo();
        $this->assertEquals($foo->getName(), 'Nginx PHP MySQL');
    }
}
