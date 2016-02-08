<?php

/* diretorioBundle:Departamento:index.html.twig */
class __TwigTemplate_38770471d75b85f13d749ed9288bf69ad2f169e15422cf5bc3367fc41144299b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Departamento:index.html.twig", 1);
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
        $__internal_645c893d5dcc1f777ae86e299b4d0c68b52eac0f18141da330866c294eacdea5 = $this->env->getExtension("native_profiler");
        $__internal_645c893d5dcc1f777ae86e299b4d0c68b52eac0f18141da330866c294eacdea5->enter($__internal_645c893d5dcc1f777ae86e299b4d0c68b52eac0f18141da330866c294eacdea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Departamento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645c893d5dcc1f777ae86e299b4d0c68b52eac0f18141da330866c294eacdea5->leave($__internal_645c893d5dcc1f777ae86e299b4d0c68b52eac0f18141da330866c294eacdea5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ce6e9919b77227a68845c30a36e7adc6bf3ffa7dc4ef8bf2970aacdd183179e = $this->env->getExtension("native_profiler");
        $__internal_5ce6e9919b77227a68845c30a36e7adc6bf3ffa7dc4ef8bf2970aacdd183179e->enter($__internal_5ce6e9919b77227a68845c30a36e7adc6bf3ffa7dc4ef8bf2970aacdd183179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Departamento list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["departamentos"]) ? $context["departamentos"] : $this->getContext($context, "departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "ubicacion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_edit", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("departamento_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5ce6e9919b77227a68845c30a36e7adc6bf3ffa7dc4ef8bf2970aacdd183179e->leave($__internal_5ce6e9919b77227a68845c30a36e7adc6bf3ffa7dc4ef8bf2970aacdd183179e_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Departamento:index.html.twig";
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
/*     <h1>Departamento list</h1>*/
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
/*         {% for departamento in departamentos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('departamento_show', { 'id': departamento.id }) }}">{{ departamento.id }}</a></td>*/
/*                 <td>{{ departamento.nombre }}</td>*/
/*                 <td>{{ departamento.ubicacion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('departamento_show', { 'id': departamento.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('departamento_edit', { 'id': departamento.id }) }}">edit</a>*/
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
/*             <a href="{{ path('departamento_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
