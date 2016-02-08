<?php

/* telefono/new.html.twig */
class __TwigTemplate_d5733dd775af4809090efa8c604e22563d3d450ac5e7e7c12db911109025deda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "telefono/new.html.twig", 1);
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
        $__internal_2b68958a5e163aef229157afb4d193e93974d075c10b54959af47c6536c57cf2 = $this->env->getExtension("native_profiler");
        $__internal_2b68958a5e163aef229157afb4d193e93974d075c10b54959af47c6536c57cf2->enter($__internal_2b68958a5e163aef229157afb4d193e93974d075c10b54959af47c6536c57cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "telefono/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b68958a5e163aef229157afb4d193e93974d075c10b54959af47c6536c57cf2->leave($__internal_2b68958a5e163aef229157afb4d193e93974d075c10b54959af47c6536c57cf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1e25bb659ad0b2cffb1b6fd742c5d60e5c9f8e3a9f58d36af2db21147c42b0 = $this->env->getExtension("native_profiler");
        $__internal_cd1e25bb659ad0b2cffb1b6fd742c5d60e5c9f8e3a9f58d36af2db21147c42b0->enter($__internal_cd1e25bb659ad0b2cffb1b6fd742c5d60e5c9f8e3a9f58d36af2db21147c42b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd1e25bb659ad0b2cffb1b6fd742c5d60e5c9f8e3a9f58d36af2db21147c42b0->leave($__internal_cd1e25bb659ad0b2cffb1b6fd742c5d60e5c9f8e3a9f58d36af2db21147c42b0_prof);

    }

    public function getTemplateName()
    {
        return "telefono/new.html.twig";
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
