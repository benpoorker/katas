<?php

namespace SplitStrings;

use PHPUnit\Framework\TestCase;

/**
 * Description: Complete the solution so that it splits the string into pairs of two characters.
 * If the string contains an odd number of characters then it should replace the missing second
 * character of the final pair with an underscore ('_').
 *
 * Examples:
 * solution('abc') // should return ['ab', 'c_']
 * solution('abcdef') // should return ['ab', 'cd', 'ef']
 */
class SplitStringsTest extends TestCase
{
    public function testBasicTests() {
        $splitStrings = (new SplitStrings);

        $this->assertEquals(["ab", "cd", "ef"], $splitStrings("abcdef"));
        $this->assertEquals(["ab", "cd", "ef", "g_"], $splitStrings("abcdefg"));
        $this->assertEquals([], $splitStrings(""));
    }
}
