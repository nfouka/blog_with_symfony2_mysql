<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5d84da1d6786e54608104657fde66aea102c1c99bec95944293c3a7f55abfb41 extends Twig_Template
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
        $__internal_b6f953ae8f779e270029f1c4173616cad6870804e63fd77a0caaec0c3ddbce53 = $this->env->getExtension("native_profiler");
        $__internal_b6f953ae8f779e270029f1c4173616cad6870804e63fd77a0caaec0c3ddbce53->enter($__internal_b6f953ae8f779e270029f1c4173616cad6870804e63fd77a0caaec0c3ddbce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b6f953ae8f779e270029f1c4173616cad6870804e63fd77a0caaec0c3ddbce53->leave($__internal_b6f953ae8f779e270029f1c4173616cad6870804e63fd77a0caaec0c3ddbce53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
