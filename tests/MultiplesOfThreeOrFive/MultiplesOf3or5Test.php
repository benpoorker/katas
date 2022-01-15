<?php

namespace MultiplesOfThreeOrFive;

use PHPUnit\Framework\TestCase;

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5,
 * we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */
class MultiplesOf3or5Test extends TestCase
{
    /** @test */
    public function it_calculates_the_sum_of_multiples_of_3_or_5_below_10()
    {
        $sum = (new MultiplesCalculator(10))->calculateSum();

        // 2+3 = 5
        $this->assertEquals(23, $sum);
    }

    /** @test */
    public function it_calculates_the_sum_of_multiples_of_3_or_5_below_100()
    {
        $sum = (new MultiplesCalculator(100))->calculateSum();

        // 5+9 = 14
        // 2+3+1+8 = 14
        $this->assertEquals(2318, $sum);
    }

    /** @test */
    public function it_finds_the_sum_of_all_multiples_of_3_or_5_below_1000()
    {
        $sum = (new MultiplesCalculator(1000))->calculateSum();

        // 14+9 = 23
        // 2+3+3+1+6+8 = 23
        $this->assertEquals(233168, $sum);
    }

    /** @test */
    public function it_finds_the_sum_of_all_multiples_of_3_or_5_below_10000()
    {
        $sum = (new MultiplesCalculator(10000))->calculateSum();

        // 23+9 = 32
        // 2+3+3+3+1+6+6+8 = 32
        $this->assertEquals(23331668, $sum);
    }

    /** @test */
    public function it_finds_the_sum_of_all_multiples_of_3_or_5_below_100000()
    {
        $sum = (new MultiplesCalculator(100000))->calculateSum();

        // 32+9 = 41
        // 2+3+3+3+3+1+6+6+6+8 = 41
        $this->assertEquals(2333316668, $sum);
    }
}
