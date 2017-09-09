<?php

namespace pizzaminded\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class AbstractController
 * @package pizzaminded\CoreBundle\Controller
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class AbstractController extends Controller
{

    /**
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function throwNotFoundException()
    {
        throw $this->createNotFoundException('exception.page.not.found');
    }
}