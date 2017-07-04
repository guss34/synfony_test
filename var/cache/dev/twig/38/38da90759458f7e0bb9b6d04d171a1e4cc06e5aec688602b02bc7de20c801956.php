<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e6ef59ec691854cb7aececfaeb6d3e2696b7fbc85b731db518d366710106b418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d655f151823405f09e91d6285e258fa791341ab53256c6815bf4346ade4993bb = $this->env->getExtension("native_profiler");
        $__internal_d655f151823405f09e91d6285e258fa791341ab53256c6815bf4346ade4993bb->enter($__internal_d655f151823405f09e91d6285e258fa791341ab53256c6815bf4346ade4993bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d655f151823405f09e91d6285e258fa791341ab53256c6815bf4346ade4993bb->leave($__internal_d655f151823405f09e91d6285e258fa791341ab53256c6815bf4346ade4993bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_606cd9083c98c90259a092768728bae892ae77cf737624e7417e54137df85fcf = $this->env->getExtension("native_profiler");
        $__internal_606cd9083c98c90259a092768728bae892ae77cf737624e7417e54137df85fcf->enter($__internal_606cd9083c98c90259a092768728bae892ae77cf737624e7417e54137df85fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_606cd9083c98c90259a092768728bae892ae77cf737624e7417e54137df85fcf->leave($__internal_606cd9083c98c90259a092768728bae892ae77cf737624e7417e54137df85fcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c080ab893b18be5f5c6939e4daf99bb8e664ced5683419adafd0df17f733095 = $this->env->getExtension("native_profiler");
        $__internal_0c080ab893b18be5f5c6939e4daf99bb8e664ced5683419adafd0df17f733095->enter($__internal_0c080ab893b18be5f5c6939e4daf99bb8e664ced5683419adafd0df17f733095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c080ab893b18be5f5c6939e4daf99bb8e664ced5683419adafd0df17f733095->leave($__internal_0c080ab893b18be5f5c6939e4daf99bb8e664ced5683419adafd0df17f733095_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_135fc062f57bf6f63e4403c64aae4badf7b39130e4bb433d775f6b4d4269ffd4 = $this->env->getExtension("native_profiler");
        $__internal_135fc062f57bf6f63e4403c64aae4badf7b39130e4bb433d775f6b4d4269ffd4->enter($__internal_135fc062f57bf6f63e4403c64aae4badf7b39130e4bb433d775f6b4d4269ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_135fc062f57bf6f63e4403c64aae4badf7b39130e4bb433d775f6b4d4269ffd4->leave($__internal_135fc062f57bf6f63e4403c64aae4badf7b39130e4bb433d775f6b4d4269ffd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
