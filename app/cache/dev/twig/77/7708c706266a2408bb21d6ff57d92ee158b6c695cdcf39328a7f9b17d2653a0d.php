<?php

/* etudoctrineBundle:Default:index.html.twig */
class __TwigTemplate_17a9dbb9d2a54751cfac8a9bbae03656a1fb9a882575891ac5752f3711b12106 extends Twig_Template
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
        $__internal_58a0bdbc737ada15ea4fa5de1b273d1b92c9be96b60a1db7edf9a7960185149e = $this->env->getExtension("native_profiler");
        $__internal_58a0bdbc737ada15ea4fa5de1b273d1b92c9be96b60a1db7edf9a7960185149e->enter($__internal_58a0bdbc737ada15ea4fa5de1b273d1b92c9be96b60a1db7edf9a7960185149e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudoctrineBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_58a0bdbc737ada15ea4fa5de1b273d1b92c9be96b60a1db7edf9a7960185149e->leave($__internal_58a0bdbc737ada15ea4fa5de1b273d1b92c9be96b60a1db7edf9a7960185149e_prof);

    }

    public function getTemplateName()
    {
        return "etudoctrineBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
