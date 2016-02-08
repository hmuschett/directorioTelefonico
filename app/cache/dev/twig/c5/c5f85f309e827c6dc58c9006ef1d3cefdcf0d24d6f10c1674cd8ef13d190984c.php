<?php

/* diretorioBundle:Empresa:show.html.twig */
class __TwigTemplate_2ee0446c79c07845965078cc81f85054ceb959bd8af27b37787855c571f4a0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "diretorioBundle:Empresa:show.html.twig", 1);
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
        $__internal_20847de925f98fc77b3b4be3e904ec2b9c981e6c545007f23d21982960c83443 = $this->env->getExtension("native_profiler");
        $__internal_20847de925f98fc77b3b4be3e904ec2b9c981e6c545007f23d21982960c83443->enter($__internal_20847de925f98fc77b3b4be3e904ec2b9c981e6c545007f23d21982960c83443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "diretorioBundle:Empresa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20847de925f98fc77b3b4be3e904ec2b9c981e6c545007f23d21982960c83443->leave($__internal_20847de925f98fc77b3b4be3e904ec2b9c981e6c545007f23d21982960c83443_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f3516bdc705fc4f5521d8d533ef19e96f4db8545c84e4ab462d3052e408e37b = $this->env->getExtension("native_profiler");
        $__internal_2f3516bdc705fc4f5521d8d533ef19e96f4db8545c84e4ab462d3052e408e37b->enter($__internal_2f3516bdc705fc4f5521d8d533ef19e96f4db8545c84e4ab462d3052e408e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ubicacion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "ubicacion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("empresa_edit", array("id" => $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2f3516bdc705fc4f5521d8d533ef19e96f4db8545c84e4ab462d3052e408e37b->leave($__internal_2f3516bdc705fc4f5521d8d533ef19e96f4db8545c84e4ab462d3052e408e37b_prof);

    }

    public function getTemplateName()
    {
        return "diretorioBundle:Empresa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Empresa</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ empresa.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ empresa.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ubicacion</th>*/
/*                 <td>{{ empresa.ubicacion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('empresa_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('empresa_edit', { 'id': empresa.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
