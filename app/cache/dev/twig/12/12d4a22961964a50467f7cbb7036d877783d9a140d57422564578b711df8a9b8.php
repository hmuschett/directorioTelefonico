<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_905be9162b6db981a8092afc7fbd0676eae57acae454c6d159802bb1cc00cda4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c121ed7285bf176e433ac33d9ca9b6009ec0a5738e2b3a90a09c9b8f88be62e2 = $this->env->getExtension("native_profiler");
        $__internal_c121ed7285bf176e433ac33d9ca9b6009ec0a5738e2b3a90a09c9b8f88be62e2->enter($__internal_c121ed7285bf176e433ac33d9ca9b6009ec0a5738e2b3a90a09c9b8f88be62e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c121ed7285bf176e433ac33d9ca9b6009ec0a5738e2b3a90a09c9b8f88be62e2->leave($__internal_c121ed7285bf176e433ac33d9ca9b6009ec0a5738e2b3a90a09c9b8f88be62e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
