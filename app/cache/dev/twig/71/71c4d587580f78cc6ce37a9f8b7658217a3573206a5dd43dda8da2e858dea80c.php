<?php

/* diretorioBundle:Direccion:show.html.twig */
class __TwigTemplate_8f7fb504d389ab3ebd44145a6aa1d3455fb8a5b493a873c36da529cde869d12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Direccion:show.html.twig", 1);
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
        $__internal_23bb9b9ba25e55983bd2336e7159f6e918d72e46897419deefb32b98423d6c45 = $this->env->getExtension("native_profiler");
        $__internal_23bb9b9ba25e55983bd2336e7159f6e918d72e46897419deefb32b98423d6c45->enter($__internal_23bb9b9ba25e55983bd2336e7159f6e918d72e46897419deefb32b98423d6c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Direccion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23bb9b9ba25e55983bd2336e7159f6e918d72e46897419deefb32b98423d6c45->leave($__internal_23bb9b9ba25e55983bd2336e7159f6e918d72e46897419deefb32b98423d6c45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_626e163e5056a6303712d9c82fa15199f4b5dfa48c6d871776f7a1c8f712f493 = $this->env->getExtension("native_profiler");
        $__internal_626e163e5056a6303712d9c82fa15199f4b5dfa48c6d871776f7a1c8f712f493->enter($__internal_626e163e5056a6303712d9c82fa15199f4b5dfa48c6d871776f7a1c8f712f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Direccion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccion"]) ? $context["direccion"] : $this->getContext($context, "direccion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccion"]) ? $context["direccion"] : $this->getContext($context, "direccion")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("direccion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("direccion_edit", array("id" => $this->getAttribute((isset($context["direccion"]) ? $context["direccion"] : $this->getContext($context, "direccion")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_626e163e5056a6303712d9c82fa15199f4b5dfa48c6d871776f7a1c8f712f493->leave($__internal_626e163e5056a6303712d9c82fa15199f4b5dfa48c6d871776f7a1c8f712f493_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Direccion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Direccion</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ direccion.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ direccion.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('direccion_edit', { 'id': direccion.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
