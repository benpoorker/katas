<?php

namespace TwoToOne;

use PHPUnit\Framework\TestCase;
use TwoToOne;

/**
 * Take 2 strings s1 and s2 including only letters from a to z.
 * Return a new sorted string, the longest possible, containing distinct letters
 * - each taken only once - coming from s1 or s2.
 */
class TwoToOneTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $twoToOne = new TwoToOne;

        $this->revTest($twoToOne->longest("aretheyhere", "yestheyarehere"), "aehrsty");
        $this->revTest($twoToOne->longest("loopingisfunbutdangerous", "lessdangerousthancoding"), "abcdefghilnoprstu");
        $this->revTest($twoToOne->longest("inmanylanguages", "theresapairoffunctions"), "acefghilmnoprstuy");
        $this->revTest($twoToOne->longest("lordsofthefallen", "gamekult"), "adefghklmnorstu");
    }
}
