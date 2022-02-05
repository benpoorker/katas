<?php

class DetectPangram
{
    public function __invoke(string $string): bool
    {
        $alphabet = [];
        foreach(range('a', 'z') as $letter) {
            $alphabet[] = $letter;
        }

        $stringAsArray = str_split(strtolower($string));

        for($i = 0; $i <= count($stringAsArray); $i++) {
            foreach ($alphabet as $index => $letter) {
                if (in_array($letter, $stringAsArray))
                    unset($alphabet[$index]);
            }
        }

        return count($alphabet) === 0;
    }
}