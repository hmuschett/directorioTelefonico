<?php

/* diretorioBundle:Empresa:new.html.twig */
class __TwigTemplate_7f0ca8b3f8af0d948ae6d17f1cacd676b13ff13721070f62aa77d91f144000af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Empresa:new.html.twig", 1);
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
        $__internal_8c86a04e6c4ed916dce0744cb6e48106086706c20b5cb358fa52ba2c5b9235b5 = $this->env->getExtension("native_profiler");
        $__internal_8c86a04e6c4ed916dce0744cb6e48106086706c20b5cb358fa52ba2c5b9235b5->enter($__internal_8c86a04e6c4ed916dce0744cb6e48106086706c20b5cb358fa52ba2c5b9235b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c86a04e6c4ed916dce0744cb6e48106086706c20b5cb358fa52ba2c5b9235b5->leave($__internal_8c86a04e6c4ed916dce0744cb6e48106086706c20b5cb358fa52ba2c5b9235b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64a77e360bce20d7f89b6249c24c0e0bdc2036b5c99fe87c8564302e3ad64302 = $this->env->getExtension("native_profiler");
        $__internal_64a77e360bce20d7f89b6249c24c0e0bdc2036b5c99fe87c8564302e3ad64302->enter($__internal_64a77e360bce20d7f89b6249c24c0e0bdc2036b5c99fe87c8564302e3ad64302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_64a77e360bce20d7f89b6249c24c0e0bdc2036b5c99fe87c8564302e3ad64302->leave($__internal_64a77e360bce20d7f89b6249c24c0e0bdc2036b5c99fe87c8564302e3ad64302_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Empresa:new.html.twig";
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
/*     <h1>Empresa creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empresa_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
