<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // main_page
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_main_page;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_page');
            }

            return array (  '_controller' => 'My\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_page',);
        }
        not_main_page:

        // more_show
        if (0 === strpos($pathinfo, '/more') && preg_match('#^/more/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_more_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'more_show')), array (  '_controller' => 'My\\FrontendBundle\\Controller\\DefaultController::showAction',));
        }
        not_more_show:

        if (0 === strpos($pathinfo, '/admin')) {
            // articles
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_articles;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'articles');
                }

                return array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'articles',);
            }
            not_articles:

            // ajax_articles
            if ($pathinfo === '/admin/ajax') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ajax_articles;
                }

                return array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::ajaxAction',  '_route' => 'ajax_articles',);
            }
            not_ajax_articles:

            // articles_create
            if ($pathinfo === '/admin/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_articles_create;
                }

                return array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::createAction',  '_route' => 'articles_create',);
            }
            not_articles_create:

            // articles_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_articles_new;
                }

                return array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::newAction',  '_route' => 'articles_new',);
            }
            not_articles_new:

            // articles_show
            if (preg_match('#^/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_articles_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_show')), array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::showAction',));
            }
            not_articles_show:

            // articles_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_articles_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_edit')), array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::editAction',));
            }
            not_articles_edit:

            // articles_update
            if (preg_match('#^/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_articles_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_update')), array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::updateAction',));
            }
            not_articles_update:

            // articles_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_articles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_delete')), array (  '_controller' => 'My\\BackendBundle\\Controller\\ArticlesController::deleteAction',));
            }
            not_articles_delete:

            if (0 === strpos($pathinfo, '/admin/categories')) {
                // categories
                if (rtrim($pathinfo, '/') === '/admin/categories') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categories;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categories');
                    }

                    return array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories',);
                }
                not_categories:

                // categories_create
                if ($pathinfo === '/admin/categories/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categories_create;
                    }

                    return array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::createAction',  '_route' => 'categories_create',);
                }
                not_categories_create:

                // categories_new
                if ($pathinfo === '/admin/categories/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categories_new;
                    }

                    return array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
                }
                not_categories_new:

                // categories_show
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categories_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_show')), array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::showAction',));
                }
                not_categories_show:

                // categories_edit
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categories_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_edit')), array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::editAction',));
                }
                not_categories_edit:

                // categories_update
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_categories_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_update')), array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::updateAction',));
                }
                not_categories_update:

                // categories_delete
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_delete')), array (  '_controller' => 'My\\BackendBundle\\Controller\\CategoriesController::deleteAction',));
                }
                not_categories_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
