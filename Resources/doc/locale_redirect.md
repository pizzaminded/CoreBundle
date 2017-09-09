# pizzaminded\CoreBundle

## Enabling locale redirect listener

1. Add `pizzaminded\CoreBundle\Controller\LocaleController` to your routing configuration without any prefix (or import CoreBundle/Resources/config/routing.yml)
2. Define your app locales in ``pizza_core.locale_listener.locales`` as string, separated by ``|`` sign (e.g ``pl|en|de`` )
3. Set your fallback locale in ``pizza_core.locale_listener.fallback_locale``
4. Enable listener in ``pizza_core.locale_listener.enable``
5. Profit! Your multilanguage app automatically sets prefered locale and redirects users to proper locale. 

## How it works?
TBD.