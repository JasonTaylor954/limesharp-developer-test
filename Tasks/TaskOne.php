<?php

namespace Tasks;

class TaskOne
{
    /**
     * repeat 3 times the contents of an array
     * @param array $array
     * @param int $count
     * @return array
     */
    public function repeat(array $array, $count = 3): array
    {
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            $result = [...$result, ...$array];
        }

        return $result;
    }
}