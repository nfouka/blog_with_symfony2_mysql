<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fcd1796db94ed4e6dc672db3784757f62b875b9db3b02724b4b7394200300eb5 extends Twig_Template
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
        $__internal_db902eb636b29fb0594e6baea6a4a8ddaa71299a3e25a13a0f7025eef4da0de0 = $this->env->getExtension("native_profiler");
        $__internal_db902eb636b29fb0594e6baea6a4a8ddaa71299a3e25a13a0f7025eef4da0de0->enter($__internal_db902eb636b29fb0594e6baea6a4a8ddaa71299a3e25a13a0f7025eef4da0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_db902eb636b29fb0594e6baea6a4a8ddaa71299a3e25a13a0f7025eef4da0de0->leave($__internal_db902eb636b29fb0594e6baea6a4a8ddaa71299a3e25a13a0f7025eef4da0de0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
