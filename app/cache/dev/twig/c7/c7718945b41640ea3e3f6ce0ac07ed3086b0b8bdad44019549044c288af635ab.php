<?php

/* diretorioBundle:Direccion:new.html.twig */
class __TwigTemplate_0eeb4deb366ddf93e19d257f4f64ad40600537a9875a37ac9bab4c39d2a9af70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Direccion:new.html.twig", 1);
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
        $__internal_7d7b108f6965630e8fc41a9ae2fc23f0d3d01fda46d173e7ba891910eae36bbc = $this->env->getExtension("native_profiler");
        $__internal_7d7b108f6965630e8fc41a9ae2fc23f0d3d01fda46d173e7ba891910eae36bbc->enter($__internal_7d7b108f6965630e8fc41a9ae2fc23f0d3d01fda46d173e7ba891910eae36bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Direccion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7b108f6965630e8fc41a9ae2fc23f0d3d01fda46d173e7ba891910eae36bbc->leave($__internal_7d7b108f6965630e8fc41a9ae2fc23f0d3d01fda46d173e7ba891910eae36bbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bfd7556f9af2957e49a4071166e30f808c4e8f27aa62baacc287a0ef993d695 = $this->env->getExtension("native_profiler");
        $__internal_1bfd7556f9af2957e49a4071166e30f808c4e8f27aa62baacc287a0ef993d695->enter($__internal_1bfd7556f9af2957e49a4071166e30f808c4e8f27aa62baacc287a0ef993d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Direccion creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("direccion_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1bfd7556f9af2957e49a4071166e30f808c4e8f27aa62baacc287a0ef993d695->leave($__internal_1bfd7556f9af2957e49a4071166e30f808c4e8f27aa62baacc287a0ef993d695_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Direccion:new.html.twig";
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
/*     <h1>Direccion creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccion_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
