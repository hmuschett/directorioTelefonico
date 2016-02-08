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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // diretorio_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'diretorio_default_index');
            }

            return array (  '_controller' => 'diretorioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'diretorio_default_index',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/departamento')) {
                // departamento_index
                if (rtrim($pathinfo, '/') === '/departamento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departamento_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'departamento_index');
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento_index',);
                }
                not_departamento_index:

                // departamento_new
                if ($pathinfo === '/departamento/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departamento_new;
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
                }
                not_departamento_new:

                // departamento_show
                if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_departamento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'diretorioBundle\\Controller\\DepartamentoController::showAction',));
                }
                not_departamento_show:

                // departamento_edit
                if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_departamento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\DepartamentoController::editAction',));
                }
                not_departamento_edit:

                // departamento_delete
                if (preg_match('#^/departamento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_departamento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\DepartamentoController::deleteAction',));
                }
                not_departamento_delete:

            }

            if (0 === strpos($pathinfo, '/direccion')) {
                // direccion_index
                if (rtrim($pathinfo, '/') === '/direccion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_direccion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'direccion_index');
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\DireccionController::indexAction',  '_route' => 'direccion_index',);
                }
                not_direccion_index:

                // direccion_new
                if ($pathinfo === '/direccion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_direccion_new;
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\DireccionController::newAction',  '_route' => 'direccion_new',);
                }
                not_direccion_new:

                // direccion_show
                if (preg_match('#^/direccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_direccion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_show')), array (  '_controller' => 'diretorioBundle\\Controller\\DireccionController::showAction',));
                }
                not_direccion_show:

                // direccion_edit
                if (preg_match('#^/direccion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_direccion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\DireccionController::editAction',));
                }
                not_direccion_edit:

                // direccion_delete
                if (preg_match('#^/direccion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_direccion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\DireccionController::deleteAction',));
                }
                not_direccion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/empresa')) {
                // empresa_index
                if (rtrim($pathinfo, '/') === '/empresa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'empresa_index');
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa_index',);
                }
                not_empresa_index:

                // empresa_new
                if ($pathinfo === '/empresa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_empresa_new;
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
                }
                not_empresa_new:

                // empresa_show
                if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_empresa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'diretorioBundle\\Controller\\EmpresaController::showAction',));
                }
                not_empresa_show:

                // empresa_edit
                if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_empresa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\EmpresaController::editAction',));
                }
                not_empresa_edit:

                // empresa_delete
                if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_empresa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\EmpresaController::deleteAction',));
                }
                not_empresa_delete:

            }

            if (0 === strpos($pathinfo, '/extencion')) {
                // extencion_index
                if (rtrim($pathinfo, '/') === '/extencion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_extencion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'extencion_index');
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\ExtencionController::indexAction',  '_route' => 'extencion_index',);
                }
                not_extencion_index:

                // extencion_new
                if ($pathinfo === '/extencion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_extencion_new;
                    }

                    return array (  '_controller' => 'diretorioBundle\\Controller\\ExtencionController::newAction',  '_route' => 'extencion_new',);
                }
                not_extencion_new:

                // extencion_show
                if (preg_match('#^/extencion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_extencion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extencion_show')), array (  '_controller' => 'diretorioBundle\\Controller\\ExtencionController::showAction',));
                }
                not_extencion_show:

                // extencion_edit
                if (preg_match('#^/extencion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_extencion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extencion_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\ExtencionController::editAction',));
                }
                not_extencion_edit:

                // extencion_delete
                if (preg_match('#^/extencion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_extencion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extencion_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\ExtencionController::deleteAction',));
                }
                not_extencion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/pizarra')) {
            // pizarra_index
            if (rtrim($pathinfo, '/') === '/pizarra') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pizarra_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pizarra_index');
                }

                return array (  '_controller' => 'diretorioBundle\\Controller\\PizarraController::indexAction',  '_route' => 'pizarra_index',);
            }
            not_pizarra_index:

            // pizarra_new
            if ($pathinfo === '/pizarra/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pizarra_new;
                }

                return array (  '_controller' => 'diretorioBundle\\Controller\\PizarraController::newAction',  '_route' => 'pizarra_new',);
            }
            not_pizarra_new:

            // pizarra_show
            if (preg_match('#^/pizarra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pizarra_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizarra_show')), array (  '_controller' => 'diretorioBundle\\Controller\\PizarraController::showAction',));
            }
            not_pizarra_show:

            // pizarra_edit
            if (preg_match('#^/pizarra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pizarra_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizarra_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\PizarraController::editAction',));
            }
            not_pizarra_edit:

            // pizarra_delete
            if (preg_match('#^/pizarra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pizarra_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizarra_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\PizarraController::deleteAction',));
            }
            not_pizarra_delete:

        }

        if (0 === strpos($pathinfo, '/telefono')) {
            // telefono_index
            if (rtrim($pathinfo, '/') === '/telefono') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_telefono_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'telefono_index');
                }

                return array (  '_controller' => 'diretorioBundle\\Controller\\TelefonoController::indexAction',  '_route' => 'telefono_index',);
            }
            not_telefono_index:

            // telefono_new
            if ($pathinfo === '/telefono/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_telefono_new;
                }

                return array (  '_controller' => 'diretorioBundle\\Controller\\TelefonoController::newAction',  '_route' => 'telefono_new',);
            }
            not_telefono_new:

            // telefono_show
            if (preg_match('#^/telefono/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_telefono_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_show')), array (  '_controller' => 'diretorioBundle\\Controller\\TelefonoController::showAction',));
            }
            not_telefono_show:

            // telefono_edit
            if (preg_match('#^/telefono/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_telefono_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_edit')), array (  '_controller' => 'diretorioBundle\\Controller\\TelefonoController::editAction',));
            }
            not_telefono_edit:

            // telefono_delete
            if (preg_match('#^/telefono/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_telefono_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefono_delete')), array (  '_controller' => 'diretorioBundle\\Controller\\TelefonoController::deleteAction',));
            }
            not_telefono_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
