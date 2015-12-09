<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bf074ac0ede48c1e3f5faec039315f82375803bac7a84180a9d990f281761cae extends Twig_Template
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
        $__internal_e877f319917a782b854e62e02b8367c96b583b7b4229ba49c0efac18945a343c = $this->env->getExtension("native_profiler");
        $__internal_e877f319917a782b854e62e02b8367c96b583b7b4229ba49c0efac18945a343c->enter($__internal_e877f319917a782b854e62e02b8367c96b583b7b4229ba49c0efac18945a343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e877f319917a782b854e62e02b8367c96b583b7b4229ba49c0efac18945a343c->leave($__internal_e877f319917a782b854e62e02b8367c96b583b7b4229ba49c0efac18945a343c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
