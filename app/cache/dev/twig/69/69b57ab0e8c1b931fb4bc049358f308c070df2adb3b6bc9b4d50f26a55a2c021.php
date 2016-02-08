<?php

/* diretorioBundle:Extencion:new.html.twig */
class __TwigTemplate_3b2593f82a83cb1511b1504e2fcbd1cc3881ec0429e08d2a64d9034cc401ccde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Extencion:new.html.twig", 1);
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
        $__internal_5b3b9fd5c1edb9b6922c66184d4d9bc288eeb0d734f967ea9c953393a806e4c6 = $this->env->getExtension("native_profiler");
        $__internal_5b3b9fd5c1edb9b6922c66184d4d9bc288eeb0d734f967ea9c953393a806e4c6->enter($__internal_5b3b9fd5c1edb9b6922c66184d4d9bc288eeb0d734f967ea9c953393a806e4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Extencion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3b9fd5c1edb9b6922c66184d4d9bc288eeb0d734f967ea9c953393a806e4c6->leave($__internal_5b3b9fd5c1edb9b6922c66184d4d9bc288eeb0d734f967ea9c953393a806e4c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3557e3316f51436efaadfb20388ba97f6204abfdca8a61e39936ca30e4d9730d = $this->env->getExtension("native_profiler");
        $__internal_3557e3316f51436efaadfb20388ba97f6204abfdca8a61e39936ca30e4d9730d->enter($__internal_3557e3316f51436efaadfb20388ba97f6204abfdca8a61e39936ca30e4d9730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Extencion creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("extencion_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3557e3316f51436efaadfb20388ba97f6204abfdca8a61e39936ca30e4d9730d->leave($__internal_3557e3316f51436efaadfb20388ba97f6204abfdca8a61e39936ca30e4d9730d_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Extencion:new.html.twig";
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
/*     <h1>Extencion creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('extencion_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
