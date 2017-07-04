<?php

/* default/index.html.twig */
class __TwigTemplate_2f13cddbf4fae64b0b6abe5555452da4c4950fca8de285856ccf2679d737467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_850e448b8a9999646a583f09b5711b0e28a42b83ff8d46710a07be6d278a7ab7 = $this->env->getExtension("native_profiler");
        $__internal_850e448b8a9999646a583f09b5711b0e28a42b83ff8d46710a07be6d278a7ab7->enter($__internal_850e448b8a9999646a583f09b5711b0e28a42b83ff8d46710a07be6d278a7ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850e448b8a9999646a583f09b5711b0e28a42b83ff8d46710a07be6d278a7ab7->leave($__internal_850e448b8a9999646a583f09b5711b0e28a42b83ff8d46710a07be6d278a7ab7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb9f19fca81ba0713bdce3324b3dd43438c624054417ae0e64166b961fe1baf = $this->env->getExtension("native_profiler");
        $__internal_beb9f19fca81ba0713bdce3324b3dd43438c624054417ae0e64166b961fe1baf->enter($__internal_beb9f19fca81ba0713bdce3324b3dd43438c624054417ae0e64166b961fe1baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
      <h1> Hello!</h1>
    </div>
";
        
        $__internal_beb9f19fca81ba0713bdce3324b3dd43438c624054417ae0e64166b961fe1baf->leave($__internal_beb9f19fca81ba0713bdce3324b3dd43438c624054417ae0e64166b961fe1baf_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_353c01c2c46bb0017fe2c5eee24a207a61b4a8fde1092c71e8a8d7bb97ca9d7f = $this->env->getExtension("native_profiler");
        $__internal_353c01c2c46bb0017fe2c5eee24a207a61b4a8fde1092c71e8a8d7bb97ca9d7f->enter($__internal_353c01c2c46bb0017fe2c5eee24a207a61b4a8fde1092c71e8a8d7bb97ca9d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  
";
        
        $__internal_353c01c2c46bb0017fe2c5eee24a207a61b4a8fde1092c71e8a8d7bb97ca9d7f->leave($__internal_353c01c2c46bb0017fe2c5eee24a207a61b4a8fde1092c71e8a8d7bb97ca9d7f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*       <h1> Hello!</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   */
/* {% endblock %}*/
/* */
