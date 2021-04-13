<?php

namespace Tasks;

class TaskTwo
{
    /**
     * no vowels, lowercase except the first letter
     * @param string $text
     * @return string
     */
    public function reformat(string $text): string
    {
        $result = preg_replace("/[aeiou]/i", "", $text);

        return ucfirst(strtolower($result));
    }
}