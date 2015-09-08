<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_font_bootstrap_1
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_bootstrap_1',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_font_bootstrap_1',);
            }

            // _assetic_font_bootstrap_1_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_bootstrap_1',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_font_bootstrap_1_0',);
            }

            // _assetic_font_bootstrap_2
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_bootstrap_2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_font_bootstrap_2',);
            }

            // _assetic_font_bootstrap_2_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'font_bootstrap_2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_font_bootstrap_2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/b2e5bbf')) {
            // _assetic_b2e5bbf
            if ($pathinfo === '/css/b2e5bbf.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2e5bbf',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b2e5bbf',);
            }

            if (0 === strpos($pathinfo, '/css/b2e5bbf_part_1_')) {
                if (0 === strpos($pathinfo, '/css/b2e5bbf_part_1_bootstrap')) {
                    // _assetic_b2e5bbf_0
                    if ($pathinfo === '/css/b2e5bbf_part_1_bootstrap-theme.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2e5bbf',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b2e5bbf_0',);
                    }

                    // _assetic_b2e5bbf_1
                    if ($pathinfo === '/css/b2e5bbf_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2e5bbf',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b2e5bbf_1',);
                    }

                }

                // _assetic_b2e5bbf_2
                if ($pathinfo === '/css/b2e5bbf_part_1_main_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2e5bbf',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b2e5bbf_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a67a568')) {
            // _assetic_a67a568
            if ($pathinfo === '/js/a67a568.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a67a568',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a67a568',);
            }

            if (0 === strpos($pathinfo, '/js/a67a568_part_1_')) {
                // _assetic_a67a568_0
                if ($pathinfo === '/js/a67a568_part_1_1.jquery-2.1.4.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a67a568',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a67a568_0',);
                }

                // _assetic_a67a568_1
                if ($pathinfo === '/js/a67a568_part_1_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a67a568',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a67a568_1',);
                }

                // _assetic_a67a568_2
                if ($pathinfo === '/js/a67a568_part_1_main_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a67a568',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a67a568_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // masterofcode_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_masterofcode_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'masterofcode_homepage');
            }

            return array (  '_controller' => 'masterofcodeBundle\\Controller\\JobController::listAction',  '_route' => 'masterofcode_homepage',);
        }
        not_masterofcode_homepage:

        // masterofcode_session_status
        if (0 === strpos($pathinfo, '/status') && preg_match('#^/status/(?P<session>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_masterofcode_session_status;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'masterofcode_session_status')), array (  '_controller' => 'masterofcodeBundle\\Controller\\JobController::listAction',));
        }
        not_masterofcode_session_status:

        // masterofcode_download
        if (0 === strpos($pathinfo, '/download') && preg_match('#^/download/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_masterofcode_download;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'masterofcode_download')), array (  '_controller' => 'masterofcodeBundle\\Controller\\JobController::downloadAction',));
        }
        not_masterofcode_download:

        // masterofcode_last_jobs
        if (rtrim($pathinfo, '/') === '/get-jobs') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_masterofcode_last_jobs;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'masterofcode_last_jobs');
            }

            return array (  '_controller' => 'masterofcodeBundle\\Controller\\JobController::lastAction',  '_route' => 'masterofcode_last_jobs',);
        }
        not_masterofcode_last_jobs:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
