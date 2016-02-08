<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0c067422a4550e7a050906e17002a7f0240ac2442c8a7ed704836f55886363bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6da1938fa89229a769d8a162631bd2b272c549532f9dc438073398a8d61edcaa = $this->env->getExtension("native_profiler");
        $__internal_6da1938fa89229a769d8a162631bd2b272c549532f9dc438073398a8d61edcaa->enter($__internal_6da1938fa89229a769d8a162631bd2b272c549532f9dc438073398a8d61edcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da1938fa89229a769d8a162631bd2b272c549532f9dc438073398a8d61edcaa->leave($__internal_6da1938fa89229a769d8a162631bd2b272c549532f9dc438073398a8d61edcaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dd3cc9a1bc6cc42e5d096cd50490f17bcdd9ff63cc7853272b250647bdd94cf = $this->env->getExtension("native_profiler");
        $__internal_3dd3cc9a1bc6cc42e5d096cd50490f17bcdd9ff63cc7853272b250647bdd94cf->enter($__internal_3dd3cc9a1bc6cc42e5d096cd50490f17bcdd9ff63cc7853272b250647bdd94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3dd3cc9a1bc6cc42e5d096cd50490f17bcdd9ff63cc7853272b250647bdd94cf->leave($__internal_3dd3cc9a1bc6cc42e5d096cd50490f17bcdd9ff63cc7853272b250647bdd94cf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0595ebdbd86fc12544e801dc4101e3112f9a35e7cb0a463eb6a704a50708cd3d = $this->env->getExtension("native_profiler");
        $__internal_0595ebdbd86fc12544e801dc4101e3112f9a35e7cb0a463eb6a704a50708cd3d->enter($__internal_0595ebdbd86fc12544e801dc4101e3112f9a35e7cb0a463eb6a704a50708cd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0595ebdbd86fc12544e801dc4101e3112f9a35e7cb0a463eb6a704a50708cd3d->leave($__internal_0595ebdbd86fc12544e801dc4101e3112f9a35e7cb0a463eb6a704a50708cd3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6fe9a5858c06be2dfafefecfd9fc819baa560cf6490d4e979823bc54c4baf0 = $this->env->getExtension("native_profiler");
        $__internal_4b6fe9a5858c06be2dfafefecfd9fc819baa560cf6490d4e979823bc54c4baf0->enter($__internal_4b6fe9a5858c06be2dfafefecfd9fc819baa560cf6490d4e979823bc54c4baf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b6fe9a5858c06be2dfafefecfd9fc819baa560cf6490d4e979823bc54c4baf0->leave($__internal_4b6fe9a5858c06be2dfafefecfd9fc819baa560cf6490d4e979823bc54c4baf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
