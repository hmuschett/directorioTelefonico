<?php

/* diretorioBundle:Departamento:new.html.twig */
class __TwigTemplate_05275bc13e5e8ca7ecd4faa3ebab36d715b0a6865ade907243f5a148a52a594e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Departamento:new.html.twig", 1);
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
        $__internal_9429090cf20cf1a33a5ba53d27fca0c21b0e683685c80d5e45f99f091b60c610 = $this->env->getExtension("native_profiler");
        $__internal_9429090cf20cf1a33a5ba53d27fca0c21b0e683685c80d5e45f99f091b60c610->enter($__internal_9429090cf20cf1a33a5ba53d27fca0c21b0e683685c80d5e45f99f091b60c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Departamento:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9429090cf20cf1a33a5ba53d27fca0c21b0e683685c80d5e45f99f091b60c610->leave($__internal_9429090cf20cf1a33a5ba53d27fca0c21b0e683685c80d5e45f99f091b60c610_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_091a23bde571dc378dcb3971123203e3db3c29b279f2a28c81ea216579f72bd1 = $this->env->getExtension("native_profiler");
        $__internal_091a23bde571dc378dcb3971123203e3db3c29b279f2a28c81ea216579f72bd1->enter($__internal_091a23bde571dc378dcb3971123203e3db3c29b279f2a28c81ea216579f72bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("departamento_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_091a23bde571dc378dcb3971123203e3db3c29b279f2a28c81ea216579f72bd1->leave($__internal_091a23bde571dc378dcb3971123203e3db3c29b279f2a28c81ea216579f72bd1_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Departamento:new.html.twig";
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
/*     <h1>Departamento creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('departamento_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
