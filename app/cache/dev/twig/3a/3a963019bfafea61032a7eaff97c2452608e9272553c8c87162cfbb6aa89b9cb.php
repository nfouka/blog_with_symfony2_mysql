<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ad6d0a5c657db9ff18b0c05638b8866489afb5fe168920f98382d2bb72a5cf5e extends Twig_Template
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
        $__internal_9ed1226845fac628ba8bb94aee3369def4d73bd2a8e248f14d020cff2173e6b6 = $this->env->getExtension("native_profiler");
        $__internal_9ed1226845fac628ba8bb94aee3369def4d73bd2a8e248f14d020cff2173e6b6->enter($__internal_9ed1226845fac628ba8bb94aee3369def4d73bd2a8e248f14d020cff2173e6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9ed1226845fac628ba8bb94aee3369def4d73bd2a8e248f14d020cff2173e6b6->leave($__internal_9ed1226845fac628ba8bb94aee3369def4d73bd2a8e248f14d020cff2173e6b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
