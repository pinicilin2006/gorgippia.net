<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // phpBBex_phpBBext_rate_post
        if (0 === strpos($pathinfo, '/phpbbex/rating') && preg_match('#^/phpbbex/rating/(?P<action>plus|minus)/(?P<post>\\d+)/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpBBex_phpBBext_rate_post')), array (  '_controller' => 'phpBBex.phpBBext.rate_post:main',));
        }

        if (0 === strpos($pathinfo, '/ulogin')) {
            // ulogin_login_controller
            if ($pathinfo === '/ulogin/login') {
                return array (  '_controller' => 'uloginteam.ulogin.controller:login',  '_route' => 'ulogin_login_controller',);
            }

            // ulogin_delete_controller
            if ($pathinfo === '/ulogin/delete_account') {
                return array (  '_controller' => 'uloginteam.ulogin.controller:delete_account',  '_route' => 'ulogin_delete_controller',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
