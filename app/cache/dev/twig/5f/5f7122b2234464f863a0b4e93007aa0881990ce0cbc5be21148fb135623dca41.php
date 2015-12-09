<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_049a4ca501f0f7d95c4cd36b6241f293f6b291d7dc4c55d76fa8bb156d830fb4 extends Twig_Template
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
        $__internal_9c6add0629ed0a9f6cece8fff87ecce8ed0fc371d95ce5d66733d31af633a362 = $this->env->getExtension("native_profiler");
        $__internal_9c6add0629ed0a9f6cece8fff87ecce8ed0fc371d95ce5d66733d31af633a362->enter($__internal_9c6add0629ed0a9f6cece8fff87ecce8ed0fc371d95ce5d66733d31af633a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9c6add0629ed0a9f6cece8fff87ecce8ed0fc371d95ce5d66733d31af633a362->leave($__internal_9c6add0629ed0a9f6cece8fff87ecce8ed0fc371d95ce5d66733d31af633a362_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
