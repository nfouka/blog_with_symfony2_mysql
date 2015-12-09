<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2044f22f5e7a2abe99e2dca2a6125bd1368a5caeace565fd50d6dc2a2425b98c extends Twig_Template
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
        $__internal_b1d277205d82a66be1fc9a36dc0755a5df0c16639944a08b94602e8d74ed9266 = $this->env->getExtension("native_profiler");
        $__internal_b1d277205d82a66be1fc9a36dc0755a5df0c16639944a08b94602e8d74ed9266->enter($__internal_b1d277205d82a66be1fc9a36dc0755a5df0c16639944a08b94602e8d74ed9266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b1d277205d82a66be1fc9a36dc0755a5df0c16639944a08b94602e8d74ed9266->leave($__internal_b1d277205d82a66be1fc9a36dc0755a5df0c16639944a08b94602e8d74ed9266_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
