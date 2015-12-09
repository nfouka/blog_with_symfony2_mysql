<?php

/* mohamedMyAppBundle:Default:index.html.twig */
class __TwigTemplate_8e001b19aa37e9fc89b33ddbde01c6e893f65c9a30b27661c93a4992e909f852 extends Twig_Template
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
        $__internal_fcef202e547eccb1069c4fa8b30bedeb774ec9760e3368478dd921facdc1749a = $this->env->getExtension("native_profiler");
        $__internal_fcef202e547eccb1069c4fa8b30bedeb774ec9760e3368478dd921facdc1749a->enter($__internal_fcef202e547eccb1069c4fa8b30bedeb774ec9760e3368478dd921facdc1749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mohamedMyAppBundle:Default:index.html.twig"));

        // line 1
        echo "

<h1>Fisrt application</h1>
Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_fcef202e547eccb1069c4fa8b30bedeb774ec9760e3368478dd921facdc1749a->leave($__internal_fcef202e547eccb1069c4fa8b30bedeb774ec9760e3368478dd921facdc1749a_prof);

    }

    public function getTemplateName()
    {
        return "mohamedMyAppBundle:Default:index.html.twig";
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
