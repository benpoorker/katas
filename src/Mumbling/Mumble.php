<?php

namespace Mumbling;

class Mumble
{
    public function __invoke(string $string): string
    {
        $mumble = [];
        $temporaryString = '';
        foreach (str_split($string) as $position => $letter) {
            for($i = $position; $i >= 0; $i--) {
                $temporaryString .= $letter;
            }

            $mumble[] = ucfirst(strtolower($temporaryString) . '-');
            $temporaryString = '';
        }

        return rtrim(implode($mumble), '-');
    }
}