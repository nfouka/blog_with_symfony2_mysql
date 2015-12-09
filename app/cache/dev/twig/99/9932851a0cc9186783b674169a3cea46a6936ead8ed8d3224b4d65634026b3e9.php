<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ed42ab698aa766efb70ff29ffc929a3be068a588365c871955349529eb708459 extends Twig_Template
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
        $__internal_76820d675ba0850efeec2f9fd424325949257225ce7074816af4349dde27f003 = $this->env->getExtension("native_profiler");
        $__internal_76820d675ba0850efeec2f9fd424325949257225ce7074816af4349dde27f003->enter($__internal_76820d675ba0850efeec2f9fd424325949257225ce7074816af4349dde27f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_76820d675ba0850efeec2f9fd424325949257225ce7074816af4349dde27f003->leave($__internal_76820d675ba0850efeec2f9fd424325949257225ce7074816af4349dde27f003_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
