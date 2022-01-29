<?php

namespace SplitStrings;

class SplitStrings
{
    public function __invoke(string $string): array
    {
        $splitString = strlen($string) ? str_split($string, 2) : [];

        if (strlen(end($splitString)) === 1) {
            $end = count($splitString) -1;
            $splitString[$end] = $splitString[$end] .= '_';
        }

        return $splitString;
    }
}