<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0246b3e2704b5e0661a743cb49c274aa7d98693bd9b7e7685e504c9d46cbc40b extends Twig_Template
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
        $__internal_b358cd76baaac3df4c75a9c6f9f91f04cc50decdf17975626b04e63b88e58d70 = $this->env->getExtension("native_profiler");
        $__internal_b358cd76baaac3df4c75a9c6f9f91f04cc50decdf17975626b04e63b88e58d70->enter($__internal_b358cd76baaac3df4c75a9c6f9f91f04cc50decdf17975626b04e63b88e58d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b358cd76baaac3df4c75a9c6f9f91f04cc50decdf17975626b04e63b88e58d70->leave($__internal_b358cd76baaac3df4c75a9c6f9f91f04cc50decdf17975626b04e63b88e58d70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
