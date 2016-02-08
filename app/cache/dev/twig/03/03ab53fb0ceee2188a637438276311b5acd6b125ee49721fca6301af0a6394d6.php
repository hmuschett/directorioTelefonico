<?php

/* base.html.twig */
class __TwigTemplate_470a88198e2de3e25baf31a910ebb8e58aa5de1f6c7789d5e7fd5f56f2c9c27d extends Twig_Template
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
        $__internal_5696532e2ae8127c6b1230b352c32efc5af24298b5da7ee7daa6b75a59beb1ab = $this->env->getExtension("native_profiler");
        $__internal_5696532e2ae8127c6b1230b352c32efc5af24298b5da7ee7daa6b75a59beb1ab->enter($__internal_5696532e2ae8127c6b1230b352c32efc5af24298b5da7ee7daa6b75a59beb1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/diretorio/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" >

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_5696532e2ae8127c6b1230b352c32efc5af24298b5da7ee7daa6b75a59beb1ab->leave($__internal_5696532e2ae8127c6b1230b352c32efc5af24298b5da7ee7daa6b75a59beb1ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6547a60a32eb9fec3eb01f93fc0953c0ccd684188530d50a0596a4f4e6877669 = $this->env->getExtension("native_profiler");
        $__internal_6547a60a32eb9fec3eb01f93fc0953c0ccd684188530d50a0596a4f4e6877669->enter($__internal_6547a60a32eb9fec3eb01f93fc0953c0ccd684188530d50a0596a4f4e6877669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6547a60a32eb9fec3eb01f93fc0953c0ccd684188530d50a0596a4f4e6877669->leave($__internal_6547a60a32eb9fec3eb01f93fc0953c0ccd684188530d50a0596a4f4e6877669_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_397707eea97db719cf309292afdb5de19fd138082db995a9ea81220d225e4741 = $this->env->getExtension("native_profiler");
        $__internal_397707eea97db719cf309292afdb5de19fd138082db995a9ea81220d225e4741->enter($__internal_397707eea97db719cf309292afdb5de19fd138082db995a9ea81220d225e4741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_397707eea97db719cf309292afdb5de19fd138082db995a9ea81220d225e4741->leave($__internal_397707eea97db719cf309292afdb5de19fd138082db995a9ea81220d225e4741_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ba860accd346f6032f9e48b7589aed1fa4a894988df1d7cb634933a2f0f70c = $this->env->getExtension("native_profiler");
        $__internal_65ba860accd346f6032f9e48b7589aed1fa4a894988df1d7cb634933a2f0f70c->enter($__internal_65ba860accd346f6032f9e48b7589aed1fa4a894988df1d7cb634933a2f0f70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65ba860accd346f6032f9e48b7589aed1fa4a894988df1d7cb634933a2f0f70c->leave($__internal_65ba860accd346f6032f9e48b7589aed1fa4a894988df1d7cb634933a2f0f70c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c74418faa096805d6459430669381d60d88f255bb64ccfe580ad9e8943103a8 = $this->env->getExtension("native_profiler");
        $__internal_1c74418faa096805d6459430669381d60d88f255bb64ccfe580ad9e8943103a8->enter($__internal_1c74418faa096805d6459430669381d60d88f255bb64ccfe580ad9e8943103a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c74418faa096805d6459430669381d60d88f255bb64ccfe580ad9e8943103a8->leave($__internal_1c74418faa096805d6459430669381d60d88f255bb64ccfe580ad9e8943103a8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  76 => 8,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/diretorio/css/bootstrap.min.css') }}" type="text/css" >*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
