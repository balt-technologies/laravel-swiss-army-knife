<?php

namespace Balt\Helpers;

use League\ISO3166\ISO3166;

class CountryCode
{
    /**
     * will convert DE => DEU
     *
     * @param string $alpha2
     * @return string
     */
    public static function toThreeDigits(string $alpha2): string
    {
        $data = (new ISO3166())->alpha2($alpha2);
        return $data['alpha3'];
    }

    /**
     * will convert DEU => DE
     *
     * @param string $alpha3
     * @return string
     */
    public static function toTwoDigits(string $alpha3): string
    {
        $data = (new ISO3166())->alpha3($alpha3);
        return $data['alpha2'];
    }
}
