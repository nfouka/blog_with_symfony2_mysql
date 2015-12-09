<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ccbd2824ed0b201913c704efd057d0179b91659aeb388c6d506538f0ec1eb7fa extends Twig_Template
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
        $__internal_ab508491b84551303021f251def4bf2f3fdf4fe0b8ecdaab8215df7faab90ce9 = $this->env->getExtension("native_profiler");
        $__internal_ab508491b84551303021f251def4bf2f3fdf4fe0b8ecdaab8215df7faab90ce9->enter($__internal_ab508491b84551303021f251def4bf2f3fdf4fe0b8ecdaab8215df7faab90ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab508491b84551303021f251def4bf2f3fdf4fe0b8ecdaab8215df7faab90ce9->leave($__internal_ab508491b84551303021f251def4bf2f3fdf4fe0b8ecdaab8215df7faab90ce9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
