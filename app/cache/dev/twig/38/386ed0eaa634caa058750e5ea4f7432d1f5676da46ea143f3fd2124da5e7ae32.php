<?php

/* mohamedMyAppBundle:Blog:index.html.twig */
class __TwigTemplate_72fd19ff1b109adeadbec45ef1fbcd8c1402e9980a0fd21bed95f4e9b292be04 extends Twig_Template
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
        $__internal_e7fddfb9eeaf30ca5380dc937b407ee1213d1e34c98b635d311503b10cd40a07 = $this->env->getExtension("native_profiler");
        $__internal_e7fddfb9eeaf30ca5380dc937b407ee1213d1e34c98b635d311503b10cd40a07->enter($__internal_e7fddfb9eeaf30ca5380dc937b407ee1213d1e34c98b635d311503b10cd40a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mohamedMyAppBundle:Blog:index.html.twig"));

        // line 1
        echo "

<h1>Fisrt application</h1>
Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e7fddfb9eeaf30ca5380dc937b407ee1213d1e34c98b635d311503b10cd40a07->leave($__internal_e7fddfb9eeaf30ca5380dc937b407ee1213d1e34c98b635d311503b10cd40a07_prof);

    }

    public function getTemplateName()
    {
        return "mohamedMyAppBundle:Blog:index.html.twig";
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
/* */
/* */
/* <h1>Fisrt application</h1>*/
/* Hello {{ name }}!*/
/* */
