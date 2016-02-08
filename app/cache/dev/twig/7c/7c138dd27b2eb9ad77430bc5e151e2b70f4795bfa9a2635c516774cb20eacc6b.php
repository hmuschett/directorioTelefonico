<?php

/* diretorioBundle:Pizarra:new.html.twig */
class __TwigTemplate_b6cf178d11f5f08bfecad196643578d093a819c905d6e4bdfd63a8bfae3be818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Pizarra:new.html.twig", 1);
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
        $__internal_7d5fe4c8b36a136bbc6596d1c2e3ae4769a1bbb263dd4779b9d529bbfd863ec1 = $this->env->getExtension("native_profiler");
        $__internal_7d5fe4c8b36a136bbc6596d1c2e3ae4769a1bbb263dd4779b9d529bbfd863ec1->enter($__internal_7d5fe4c8b36a136bbc6596d1c2e3ae4769a1bbb263dd4779b9d529bbfd863ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Pizarra:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d5fe4c8b36a136bbc6596d1c2e3ae4769a1bbb263dd4779b9d529bbfd863ec1->leave($__internal_7d5fe4c8b36a136bbc6596d1c2e3ae4769a1bbb263dd4779b9d529bbfd863ec1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d45d641db059d63553d423cbfbea88b9f5f07b5c0c0098c12de6b1a2283596 = $this->env->getExtension("native_profiler");
        $__internal_a5d45d641db059d63553d423cbfbea88b9f5f07b5c0c0098c12de6b1a2283596->enter($__internal_a5d45d641db059d63553d423cbfbea88b9f5f07b5c0c0098c12de6b1a2283596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizarra creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("pizarra_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a5d45d641db059d63553d423cbfbea88b9f5f07b5c0c0098c12de6b1a2283596->leave($__internal_a5d45d641db059d63553d423cbfbea88b9f5f07b5c0c0098c12de6b1a2283596_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Pizarra:new.html.twig";
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
/*     <h1>Pizarra creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pizarra_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
