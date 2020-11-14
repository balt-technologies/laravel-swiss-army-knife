<?php


namespace Balt\Helpers;


class ArrayHelper
{

    /**
     * Will create a new array without null values
     *
     * [ 'a' => 1, 'b' => null ] ... [ 'a' => 1 ]
     *
     * @param array $input
     * @return array
     */
    public static function withoutNull(array $input): array
    {
        return array_filter($input, static function($value, $key) {
            return $value !== null;
        }, ARRAY_FILTER_USE_BOTH);
    }

}