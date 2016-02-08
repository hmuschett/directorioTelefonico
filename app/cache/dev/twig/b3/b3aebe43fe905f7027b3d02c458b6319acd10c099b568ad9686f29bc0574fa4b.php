<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d6d682914968c7b529d487877c4d5da59ea3cc6caf7382f93d5b0e6c547837e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9479c0ad17975e548e71d9a7a9e3a554f270931e25bbd512382803f09293fb45 = $this->env->getExtension("native_profiler");
        $__internal_9479c0ad17975e548e71d9a7a9e3a554f270931e25bbd512382803f09293fb45->enter($__internal_9479c0ad17975e548e71d9a7a9e3a554f270931e25bbd512382803f09293fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9479c0ad17975e548e71d9a7a9e3a554f270931e25bbd512382803f09293fb45->leave($__internal_9479c0ad17975e548e71d9a7a9e3a554f270931e25bbd512382803f09293fb45_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d71616f4d72ff90e964e74733ad67b5217a653ad9bdcd6a2a327a8cf1835fb61 = $this->env->getExtension("native_profiler");
        $__internal_d71616f4d72ff90e964e74733ad67b5217a653ad9bdcd6a2a327a8cf1835fb61->enter($__internal_d71616f4d72ff90e964e74733ad67b5217a653ad9bdcd6a2a327a8cf1835fb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d71616f4d72ff90e964e74733ad67b5217a653ad9bdcd6a2a327a8cf1835fb61->leave($__internal_d71616f4d72ff90e964e74733ad67b5217a653ad9bdcd6a2a327a8cf1835fb61_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5e2e9de2307fb74828952736c57fc86cc32254d47fb626dae4cda6ba8bfcd79 = $this->env->getExtension("native_profiler");
        $__internal_e5e2e9de2307fb74828952736c57fc86cc32254d47fb626dae4cda6ba8bfcd79->enter($__internal_e5e2e9de2307fb74828952736c57fc86cc32254d47fb626dae4cda6ba8bfcd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5e2e9de2307fb74828952736c57fc86cc32254d47fb626dae4cda6ba8bfcd79->leave($__internal_e5e2e9de2307fb74828952736c57fc86cc32254d47fb626dae4cda6ba8bfcd79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d9547552eb9aacd16fb0581537aeba2efe3b391d8f0fdcf9e0cd41489f04521 = $this->env->getExtension("native_profiler");
        $__internal_4d9547552eb9aacd16fb0581537aeba2efe3b391d8f0fdcf9e0cd41489f04521->enter($__internal_4d9547552eb9aacd16fb0581537aeba2efe3b391d8f0fdcf9e0cd41489f04521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d9547552eb9aacd16fb0581537aeba2efe3b391d8f0fdcf9e0cd41489f04521->leave($__internal_4d9547552eb9aacd16fb0581537aeba2efe3b391d8f0fdcf9e0cd41489f04521_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
