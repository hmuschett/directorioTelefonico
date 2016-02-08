<?php

/* diretorioBundle:Telefono:new.html.twig */
class __TwigTemplate_9314903b5319fb72883b03c9bfa7939494264decb5a90ccd87377ee0fd2ea5d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Telefono:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45bc73f00d9da8d8f5a579d79bc966fb33e8e37cda7d7c979ed16b707b34f06e = $this->env->getExtension("native_profiler");
        $__internal_45bc73f00d9da8d8f5a579d79bc966fb33e8e37cda7d7c979ed16b707b34f06e->enter($__internal_45bc73f00d9da8d8f5a579d79bc966fb33e8e37cda7d7c979ed16b707b34f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Telefono:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45bc73f00d9da8d8f5a579d79bc966fb33e8e37cda7d7c979ed16b707b34f06e->leave($__internal_45bc73f00d9da8d8f5a579d79bc966fb33e8e37cda7d7c979ed16b707b34f06e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ecbf9e7409d40e3751079d724265dd4001202e6d54d64285d07c35454a6b3e = $this->env->getExtension("native_profiler");
        $__internal_99ecbf9e7409d40e3751079d724265dd4001202e6d54d64285d07c35454a6b3e->enter($__internal_99ecbf9e7409d40e3751079d724265dd4001202e6d54d64285d07c35454a6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Telefono creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("telefono_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_99ecbf9e7409d40e3751079d724265dd4001202e6d54d64285d07c35454a6b3e->leave($__internal_99ecbf9e7409d40e3751079d724265dd4001202e6d54d64285d07c35454a6b3e_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Telefono:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Telefono creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('telefono_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
