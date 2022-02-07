<?php

class TwoToOne
{
    public function longest(string $a, string $b): string
    {
        return count_chars($a . $b, 3);
    }
}