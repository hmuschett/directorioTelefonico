<?php

/* diretorioBundle:Template:template.html.twig */
class __TwigTemplate_bde473303da084c81e783ddbaca8e7de2335be5b46e688d3ed6d2abd53dd2df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_980f8844f061975a6e2e4b6f8438c5fe38d4be3e7991c00fee1ff4d550a1d3a3 = $this->env->getExtension("native_profiler");
        $__internal_980f8844f061975a6e2e4b6f8438c5fe38d4be3e7991c00fee1ff4d550a1d3a3->enter($__internal_980f8844f061975a6e2e4b6f8438c5fe38d4be3e7991c00fee1ff4d550a1d3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Template:template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"es\">
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/diretorio/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/diretorio/css/cerulean-boostwash.min.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>
";
        
        $__internal_980f8844f061975a6e2e4b6f8438c5fe38d4be3e7991c00fee1ff4d550a1d3a3->leave($__internal_980f8844f061975a6e2e4b6f8438c5fe38d4be3e7991c00fee1ff4d550a1d3a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f5dc48043d505c9fccd6ec5cad1eac3e1cf6262e357b0b374b2cb82d9e1eea = $this->env->getExtension("native_profiler");
        $__internal_26f5dc48043d505c9fccd6ec5cad1eac3e1cf6262e357b0b374b2cb82d9e1eea->enter($__internal_26f5dc48043d505c9fccd6ec5cad1eac3e1cf6262e357b0b374b2cb82d9e1eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Directorio Telefónico";
        
        $__internal_26f5dc48043d505c9fccd6ec5cad1eac3e1cf6262e357b0b374b2cb82d9e1eea->leave($__internal_26f5dc48043d505c9fccd6ec5cad1eac3e1cf6262e357b0b374b2cb82d9e1eea_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_297aadabe6513e5702d38728567915e3fed1545ebe928a7bff78d531cf7bd789 = $this->env->getExtension("native_profiler");
        $__internal_297aadabe6513e5702d38728567915e3fed1545ebe928a7bff78d531cf7bd789->enter($__internal_297aadabe6513e5702d38728567915e3fed1545ebe928a7bff78d531cf7bd789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_297aadabe6513e5702d38728567915e3fed1545ebe928a7bff78d531cf7bd789->leave($__internal_297aadabe6513e5702d38728567915e3fed1545ebe928a7bff78d531cf7bd789_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_06990e6f08002ecc49ef716cc809feda7e025598f4256b0c94bdbd8a8a0a234a = $this->env->getExtension("native_profiler");
        $__internal_06990e6f08002ecc49ef716cc809feda7e025598f4256b0c94bdbd8a8a0a234a->enter($__internal_06990e6f08002ecc49ef716cc809feda7e025598f4256b0c94bdbd8a8a0a234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06990e6f08002ecc49ef716cc809feda7e025598f4256b0c94bdbd8a8a0a234a->leave($__internal_06990e6f08002ecc49ef716cc809feda7e025598f4256b0c94bdbd8a8a0a234a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aea3d0473402e0890df22d7773211c12d70e673c289d2483f88582e3a28f08b5 = $this->env->getExtension("native_profiler");
        $__internal_aea3d0473402e0890df22d7773211c12d70e673c289d2483f88582e3a28f08b5->enter($__internal_aea3d0473402e0890df22d7773211c12d70e673c289d2483f88582e3a28f08b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aea3d0473402e0890df22d7773211c12d70e673c289d2483f88582e3a28f08b5->leave($__internal_aea3d0473402e0890df22d7773211c12d70e673c289d2483f88582e3a28f08b5_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Template:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 14,  90 => 13,  79 => 8,  67 => 5,  58 => 15,  56 => 14,  54 => 13,  46 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head lang="es">*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Directorio Telefónico{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/diretorio/css/bootstrap.min.css') }}" type="text/css" >*/
/*     <link rel="stylesheet" href="{{ asset('bundles/diretorio/css/cerulean-boostwash.min.css') }}" type="text/css" >*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
