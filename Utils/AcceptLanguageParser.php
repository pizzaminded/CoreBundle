<?php

namespace pizzaminded\CoreBundle\Utils;


/**
 * Class AcceptLanguageParser
 * @package pizzaminded\CoreBundle\Utils
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class AcceptLanguageParser
{
    /**
     * @var string
     */
    private static $weightRegex = '/;q=([0-9]{1,2}([,.][0-9]{1,2})?)/i';

    /**
     * @param $string
     * @return array
     */
    public static function parse($string)
    {

        $locales = [];
        $weights = [];
        preg_match_all(self::$weightRegex, $string, $weights);
        $weights = $weights[1];

        $localesByWeight = preg_split(self::$weightRegex, $string);

        foreach ($weights as $key => $weight) {
            $explodedLocales = explode(',', $localesByWeight[$key]);
            foreach ($explodedLocales as $item) {
                if (trim($item) !== '') {
                    $locales[$item] = (float)$weight;
                }
            }
        }

        return $locales;
    }
}