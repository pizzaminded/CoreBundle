<?php

namespace pizzaminded\CoreBundle\EventListener;

use pizzaminded\CoreBundle\Utils\AcceptLanguageParser;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class LocaleRequestListener
 * @package pizzaminded\CoreBundle\EventListener
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class LocaleRequestListener
{
    /**
     * @var array
     */
    private $configuration;

    /**
     * @var Router
     */
    private $router;

    /**
     * LocaleRequestListener constructor.
     * @param Router $router
     */
    public function __construct(Router $router)
    {
       $this->router = $router;
    }

    /**
     * @param GetResponseEvent $event
     * @throws \Symfony\Component\Routing\Exception\InvalidParameterException
     * @throws \Symfony\Component\Routing\Exception\MissingMandatoryParametersException
     * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
     * @throws \InvalidArgumentException
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }

        if (!$this->configuration['enable']) {
            return;
        }

        $request = $event->getRequest();

        if ($request->attributes->get('_route') !== 'pizza_core_locale_redirect') {
            return;
        }

        $localesByWeight = array_keys(AcceptLanguageParser::parse($request->server->get('HTTP_ACCEPT_LANGUAGE')));
        $userDefinedLocales = explode('|', $this->configuration['locales']);

        $url = $this->router->generate(
            $this->configuration['redirect_path'],
            [
                $this->configuration['locale_parameter'] => $this->configuration['fallback_locale']
            ]);

        foreach ($userDefinedLocales as $locale) {
            if(in_array($locale, $localesByWeight, true)) {
                $url = $this->router->generate(
                    $this->configuration['redirect_path'],
                    [
                        $this->configuration['locale_parameter'] => $locale
                    ]);
            }
        }

        $event->setResponse(new RedirectResponse($url, 301));

    }

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param array $configuration
     * @return LocaleRequestListener
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }
}