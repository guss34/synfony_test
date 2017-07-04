<?php

/* about/about.html.twig */
class __TwigTemplate_979c5b08e7610e25e150f5443bcc981ef564dc2617eb282a41394f4d96fdc567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
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
        $__internal_04fca7b15d3bdf4b090ff6b215b9cc8dd4b7aa0af36f59575f5cb4f26e64d149 = $this->env->getExtension("native_profiler");
        $__internal_04fca7b15d3bdf4b090ff6b215b9cc8dd4b7aa0af36f59575f5cb4f26e64d149->enter($__internal_04fca7b15d3bdf4b090ff6b215b9cc8dd4b7aa0af36f59575f5cb4f26e64d149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04fca7b15d3bdf4b090ff6b215b9cc8dd4b7aa0af36f59575f5cb4f26e64d149->leave($__internal_04fca7b15d3bdf4b090ff6b215b9cc8dd4b7aa0af36f59575f5cb4f26e64d149_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad6a89ff0b33cb4b7bea934f6895bc62cb2a670ffaf1204bec98f06a00db3bf9 = $this->env->getExtension("native_profiler");
        $__internal_ad6a89ff0b33cb4b7bea934f6895bc62cb2a670ffaf1204bec98f06a00db3bf9->enter($__internal_ad6a89ff0b33cb4b7bea934f6895bc62cb2a670ffaf1204bec98f06a00db3bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
 <section>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
 </section>

 ";
        
        $__internal_ad6a89ff0b33cb4b7bea934f6895bc62cb2a670ffaf1204bec98f06a00db3bf9->leave($__internal_ad6a89ff0b33cb4b7bea934f6895bc62cb2a670ffaf1204bec98f06a00db3bf9_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  {%block body%}*/
/* */
/*  <section>*/
/*    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>*/
/*  </section>*/
/* */
/*  {%endblock%}*/
/* */
