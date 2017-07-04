<?php

/* boutique/boutique.html.twig */
class __TwigTemplate_e1ce89a8575a16644a9a8b5664e468faba48cce8e74f03d0235d74f8fb03a542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "boutique/boutique.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9abde24ef5beffe1651505336dd1cffa23e0996ee8af2bc23dea215373216fc9 = $this->env->getExtension("native_profiler");
        $__internal_9abde24ef5beffe1651505336dd1cffa23e0996ee8af2bc23dea215373216fc9->enter($__internal_9abde24ef5beffe1651505336dd1cffa23e0996ee8af2bc23dea215373216fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "boutique/boutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9abde24ef5beffe1651505336dd1cffa23e0996ee8af2bc23dea215373216fc9->leave($__internal_9abde24ef5beffe1651505336dd1cffa23e0996ee8af2bc23dea215373216fc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e7e4b869dfed1eabf60777fd3c7bf2d806eb4e089f4f3e70d3898ab2a9e655 = $this->env->getExtension("native_profiler");
        $__internal_30e7e4b869dfed1eabf60777fd3c7bf2d806eb4e089f4f3e70d3898ab2a9e655->enter($__internal_30e7e4b869dfed1eabf60777fd3c7bf2d806eb4e089f4f3e70d3898ab2a9e655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
      <h1> boutique!</h1>
    </div>
      <table>
        <thead>
          <th>numero chambre </th>
          <th>nbr couchage </th>
          <th>prix</th>
        </thead>
        <tbody>
          <tr>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room1"]) ? $context["room1"] : $this->getContext($context, "room1")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 16
            echo "            <td>";
            echo twig_escape_filter($this->env, $context["room"], "html", null, true);
            echo "</td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            <tr>
              ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room2"]) ? $context["room2"] : $this->getContext($context, "room2")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 20
            echo "              <td>";
            echo twig_escape_filter($this->env, $context["room"], "html", null, true);
            echo "</td>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tr>
            <tr>
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["room3"]) ? $context["room3"] : $this->getContext($context, "room3")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 25
            echo "              <td> ";
            echo twig_escape_filter($this->env, $context["room"], "html", null, true);
            echo "</td>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tr>


        </tbody>
      </table>
";
        
        $__internal_30e7e4b869dfed1eabf60777fd3c7bf2d806eb4e089f4f3e70d3898ab2a9e655->leave($__internal_30e7e4b869dfed1eabf60777fd3c7bf2d806eb4e089f4f3e70d3898ab2a9e655_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6220b671cb035032f4273c206f72aa227955ca4a2b82c7d0c5bb9c400fba7eba = $this->env->getExtension("native_profiler");
        $__internal_6220b671cb035032f4273c206f72aa227955ca4a2b82c7d0c5bb9c400fba7eba->enter($__internal_6220b671cb035032f4273c206f72aa227955ca4a2b82c7d0c5bb9c400fba7eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "<style>
table, th, td
{

  border: 1px solid black;
  border-collapse: collapse;
}
</style>

";
        
        $__internal_6220b671cb035032f4273c206f72aa227955ca4a2b82c7d0c5bb9c400fba7eba->leave($__internal_6220b671cb035032f4273c206f72aa227955ca4a2b82c7d0c5bb9c400fba7eba_prof);

    }

    public function getTemplateName()
    {
        return "boutique/boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  112 => 34,  100 => 27,  91 => 25,  87 => 24,  83 => 22,  74 => 20,  70 => 19,  67 => 18,  58 => 16,  54 => 15,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*       <h1> boutique!</h1>*/
/*     </div>*/
/*       <table>*/
/*         <thead>*/
/*           <th>numero chambre </th>*/
/*           <th>nbr couchage </th>*/
/*           <th>prix</th>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             {% for room in room1 %}*/
/*             <td>{{ room }}</td>*/
/*             {% endfor %}*/
/*             <tr>*/
/*               {% for room in room2 %}*/
/*               <td>{{ room }}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/*             <tr>*/
/*               {% for room in room3 %}*/
/*               <td> {{ room }}</td>*/
/*               {% endfor %}*/
/*             </tr>*/
/* */
/* */
/*         </tbody>*/
/*       </table>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* table, th, td*/
/* {*/
/* */
/*   border: 1px solid black;*/
/*   border-collapse: collapse;*/
/* }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
