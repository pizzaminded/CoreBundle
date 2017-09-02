<?php

namespace pizzaminded\CoreBundle\Utils;


/**
 * Class FormStyleUtils
 * @package pizzaminded\CoreBundle\Utils
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class FormStyleUtils
{

    private static $formLabelClass = 'text-right text-muted';

    /**
     * @return string
     */
    public static function getFormLabelClass()
    {
        return self::$formLabelClass;
    }


}