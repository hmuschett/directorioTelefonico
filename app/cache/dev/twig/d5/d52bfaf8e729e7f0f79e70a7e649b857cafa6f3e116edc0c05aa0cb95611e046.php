<?php

/* empresa/index.html.twig */
class __TwigTemplate_7fc0f1b640263f180e93ef26612e815f5c93553d00d079f02e63bb560783f20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/index.html.twig", 1);
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
        $__internal_d5f1240be33ed97ba4f6a81792cf38b0d06f3b37463e3e3cb22a7736d86b9f84 = $this->env->getExtension("native_profiler");
        $__internal_d5f1240be33ed97ba4f6a81792cf38b0d06f3b37463e3e3cb22a7736d86b9f84->enter($__internal_d5f1240be33ed97ba4f6a81792cf38b0d06f3b37463e3e3cb22a7736d86b9f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5f1240be33ed97ba4f6a81792cf38b0d06f3b37463e3e3cb22a7736d86b9f84->leave($__internal_d5f1240be33ed97ba4f6a81792cf38b0d06f3b37463e3e3cb22a7736d86b9f84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ece04ad91c02c1fc87055627c919d4b83551c8405e6b27b4651a2e664f5b9b2 = $this->env->getExtension("native_profiler");
        $__internal_8ece04ad91c02c1fc87055627c919d4b83551c8405e6b27b4651a2e664f5b9b2->enter($__internal_8ece04ad91c02c1fc87055627c919d4b83551c8405e6b27b4651a2e664f5b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empresa_show", array("id" => $this->getAttribute($context["empresa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "ubicacion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empresa_show", array("id" => $this->getAttribute($context["empresa"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empresa_edit", array("id" => $this->getAttribute($context["empresa"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("empresa_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_8ece04ad91c02c1fc87055627c919d4b83551c8405e6b27b4651a2e664f5b9b2->leave($__internal_8ece04ad91c02c1fc87055627c919d4b83551c8405e6b27b4651a2e664f5b9b2_prof);

    }

    public function getTemplateName()
    {
        return "empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empresa list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Ubicacion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for empresa in empresas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('empresa_show', { 'id': empresa.id }) }}">{{ empresa.id }}</a></td>*/
/*                 <td>{{ empresa.nombre }}</td>*/
/*                 <td>{{ empresa.ubicacion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('empresa_show', { 'id': empresa.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('empresa_edit', { 'id': empresa.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empresa_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
