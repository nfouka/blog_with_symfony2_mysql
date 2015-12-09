<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2a838564ce20b27234aecb00f695b531a164b21ddf372028a43fce034550920c extends Twig_Template
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
        $__internal_3d8d09bd0a9f164fb760b33d41f9e39fda5ce9f5fb2312c3180ad7953ccbb581 = $this->env->getExtension("native_profiler");
        $__internal_3d8d09bd0a9f164fb760b33d41f9e39fda5ce9f5fb2312c3180ad7953ccbb581->enter($__internal_3d8d09bd0a9f164fb760b33d41f9e39fda5ce9f5fb2312c3180ad7953ccbb581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3d8d09bd0a9f164fb760b33d41f9e39fda5ce9f5fb2312c3180ad7953ccbb581->leave($__internal_3d8d09bd0a9f164fb760b33d41f9e39fda5ce9f5fb2312c3180ad7953ccbb581_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
