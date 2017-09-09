<?php

namespace pizzaminded\CoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class LocaleController
 * @package pizzaminded\CoreBundle\Controller
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class LocaleController extends Controller
{
    /**
     * This route should do nothing because it aint even executed.
     * It's used as an 'endpoint' for LocaleRequestListener.
     * @Route("/", name="pizza_core_locale_redirect")
     */
    public function indexAction()
    {

    }
}
