<?php

namespace Mumbling;

use PHPUnit\Framework\TestCase;

/**
 * Write a function that given the input below, returns the following output.
 *
 * "input" -> "output"
 * "abcd" -> "A-Bb-Ccc-Dddd"
 * "RqaEzty" -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
 * "cwAt" -> "C-Ww-Aaa-Tttt"
 */
class MumblingTest extends TestCase
{
    /** @test */
    public function it_mumbles_when_given_abcd()
    {
        $mumbling = (new Mumble)('abcd');

        $this->assertEquals('A-Bb-Ccc-Dddd', $mumbling);
    }

    /** @test */
    public function it_mumbles_when_given_RqaEzty()
    {
        $mumbling = (new Mumble)('RqaEzty');

        $this->assertEquals('R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy', $mumbling);
    }

    /** @test */
    public function it_mumbles_when_given_cwAt()
    {
        $mumbling = (new Mumble)('cwAt');

        $this->assertEquals('C-Ww-Aaa-Tttt', $mumbling);
    }
}
