<?php

namespace Multiples;

class MultiplesCalculator
{
    private int $limit;

    private array $multiplesOfThree;

    private array $multiplesOfFive;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
        $this->multiplesOfThree = $this->calculateMultiples(3);
        $this->multiplesOfFive = $this->calculateMultiples(5);
    }

    public function calculateSum(): int
    {
        $multiples = array_merge($this->multiplesOfThree, $this->multiplesOfFive);

        $matches = array_intersect($this->multiplesOfThree, $this->multiplesOfFive);

        return array_sum($multiples) - array_sum($matches);
    }

    private function calculateMultiples(int $multiplier): array
    {
        $multiples = [];

        for ($i = $this->limit; $i > 0; $i--) {
            if ($i * $multiplier < $this->limit) {
                $multiples[] = $i * $multiplier;
            }
        }

        return $multiples;
    }
}