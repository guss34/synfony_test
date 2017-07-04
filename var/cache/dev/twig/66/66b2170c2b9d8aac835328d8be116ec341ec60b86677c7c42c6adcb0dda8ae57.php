<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8dc1cdbc43e14d30fbb472eff11973a1a336ff600678138abfd254ed0836823f extends Twig_Template
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
        $__internal_fde6b7c59d7481aacdb8f4f082e729cc6f8e2643785da05aa134c7e9df82c17f = $this->env->getExtension("native_profiler");
        $__internal_fde6b7c59d7481aacdb8f4f082e729cc6f8e2643785da05aa134c7e9df82c17f->enter($__internal_fde6b7c59d7481aacdb8f4f082e729cc6f8e2643785da05aa134c7e9df82c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde6b7c59d7481aacdb8f4f082e729cc6f8e2643785da05aa134c7e9df82c17f->leave($__internal_fde6b7c59d7481aacdb8f4f082e729cc6f8e2643785da05aa134c7e9df82c17f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4d18e65cdf52791f16a56accc65c3408d8a331aaa829ddb35d45eb3b998fdc3 = $this->env->getExtension("native_profiler");
        $__internal_e4d18e65cdf52791f16a56accc65c3408d8a331aaa829ddb35d45eb3b998fdc3->enter($__internal_e4d18e65cdf52791f16a56accc65c3408d8a331aaa829ddb35d45eb3b998fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4d18e65cdf52791f16a56accc65c3408d8a331aaa829ddb35d45eb3b998fdc3->leave($__internal_e4d18e65cdf52791f16a56accc65c3408d8a331aaa829ddb35d45eb3b998fdc3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d62f2302d02c19d98f9fdc5ef71ee8885f0c99239c15c486592f174855258553 = $this->env->getExtension("native_profiler");
        $__internal_d62f2302d02c19d98f9fdc5ef71ee8885f0c99239c15c486592f174855258553->enter($__internal_d62f2302d02c19d98f9fdc5ef71ee8885f0c99239c15c486592f174855258553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d62f2302d02c19d98f9fdc5ef71ee8885f0c99239c15c486592f174855258553->leave($__internal_d62f2302d02c19d98f9fdc5ef71ee8885f0c99239c15c486592f174855258553_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fa4c044cc490750e8df62001fd83cc196d41e99e31075ec8d0f4a2573fc62e4 = $this->env->getExtension("native_profiler");
        $__internal_5fa4c044cc490750e8df62001fd83cc196d41e99e31075ec8d0f4a2573fc62e4->enter($__internal_5fa4c044cc490750e8df62001fd83cc196d41e99e31075ec8d0f4a2573fc62e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5fa4c044cc490750e8df62001fd83cc196d41e99e31075ec8d0f4a2573fc62e4->leave($__internal_5fa4c044cc490750e8df62001fd83cc196d41e99e31075ec8d0f4a2573fc62e4_prof);

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
