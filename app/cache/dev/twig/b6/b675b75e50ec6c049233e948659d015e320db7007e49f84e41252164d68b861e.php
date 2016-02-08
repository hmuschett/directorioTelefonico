<?php

/* empresa/new.html.twig */
class __TwigTemplate_dd93bff52258deec84239d02e7ed0e0693ea72593c1b3d2c6bcd1d6837d1f224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/new.html.twig", 1);
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
        $__internal_fd44395ab631b4938d1101cc283eac3c91a51061607289a90c5c6790ee95eb56 = $this->env->getExtension("native_profiler");
        $__internal_fd44395ab631b4938d1101cc283eac3c91a51061607289a90c5c6790ee95eb56->enter($__internal_fd44395ab631b4938d1101cc283eac3c91a51061607289a90c5c6790ee95eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd44395ab631b4938d1101cc283eac3c91a51061607289a90c5c6790ee95eb56->leave($__internal_fd44395ab631b4938d1101cc283eac3c91a51061607289a90c5c6790ee95eb56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f640b0ec80637ce7458f1a1bc1b7f2a21fd2593093acdd27894e48abcfea368f = $this->env->getExtension("native_profiler");
        $__internal_f640b0ec80637ce7458f1a1bc1b7f2a21fd2593093acdd27894e48abcfea368f->enter($__internal_f640b0ec80637ce7458f1a1bc1b7f2a21fd2593093acdd27894e48abcfea368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f640b0ec80637ce7458f1a1bc1b7f2a21fd2593093acdd27894e48abcfea368f->leave($__internal_f640b0ec80637ce7458f1a1bc1b7f2a21fd2593093acdd27894e48abcfea368f_prof);

    }

    public function getTemplateName()
    {
        return "empresa/new.html.twig";
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
