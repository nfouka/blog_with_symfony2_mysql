<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_925e7046e94ea7e4038c04e1b9f49046bde9300a75f623a57c28a1e5c503bf97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb69d771e8516d269371f459365fc087ff1ddd8b2809dc3fb8519a58bf2a0ce1 = $this->env->getExtension("native_profiler");
        $__internal_fb69d771e8516d269371f459365fc087ff1ddd8b2809dc3fb8519a58bf2a0ce1->enter($__internal_fb69d771e8516d269371f459365fc087ff1ddd8b2809dc3fb8519a58bf2a0ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fb69d771e8516d269371f459365fc087ff1ddd8b2809dc3fb8519a58bf2a0ce1->leave($__internal_fb69d771e8516d269371f459365fc087ff1ddd8b2809dc3fb8519a58bf2a0ce1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
