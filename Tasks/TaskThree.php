<?php

namespace Tasks;

class TaskThree
{
    /**
     * return the next binary number in a string or as an array
     * @param array $array
     * @return array
     */
    public function next_binary_number(array $array): array
    {
        $result = $array;
        $carry = true;
        for ($x = count($result) - 1; $x >= 0; $x--) {

            if ((int)$result[$x] + 1 === 1) {
                $result[$x] = 1;
                $carry = false;
                break;
            }

            $result[$x] = 0;
        }

        if ($carry) {
            $result = [1, ...$result];
        }

        return $result;
    }
}