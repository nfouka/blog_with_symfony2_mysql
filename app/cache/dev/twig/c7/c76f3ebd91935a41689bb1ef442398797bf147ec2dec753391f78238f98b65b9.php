<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_95e9210b49c9948d069f7580f343e850e58f253d5564aded9a9fb62197b7c32b extends Twig_Template
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
        $__internal_0aee15257ba680774ed2d0fc4ae7ba776cde2a4e37cbabc1b3f4f886fae88c6d = $this->env->getExtension("native_profiler");
        $__internal_0aee15257ba680774ed2d0fc4ae7ba776cde2a4e37cbabc1b3f4f886fae88c6d->enter($__internal_0aee15257ba680774ed2d0fc4ae7ba776cde2a4e37cbabc1b3f4f886fae88c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0aee15257ba680774ed2d0fc4ae7ba776cde2a4e37cbabc1b3f4f886fae88c6d->leave($__internal_0aee15257ba680774ed2d0fc4ae7ba776cde2a4e37cbabc1b3f4f886fae88c6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
