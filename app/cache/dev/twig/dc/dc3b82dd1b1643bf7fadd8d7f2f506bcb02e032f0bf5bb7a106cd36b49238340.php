<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_938172bbb86372cd8855fec089d3ac2973bd340a1cf41fa31db7391bd40e1b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad2c73499ecc3cc3db362979b5a3534bd9d1dc7891bb1b7ed57f1a2a3806b291 = $this->env->getExtension("native_profiler");
        $__internal_ad2c73499ecc3cc3db362979b5a3534bd9d1dc7891bb1b7ed57f1a2a3806b291->enter($__internal_ad2c73499ecc3cc3db362979b5a3534bd9d1dc7891bb1b7ed57f1a2a3806b291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2c73499ecc3cc3db362979b5a3534bd9d1dc7891bb1b7ed57f1a2a3806b291->leave($__internal_ad2c73499ecc3cc3db362979b5a3534bd9d1dc7891bb1b7ed57f1a2a3806b291_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56a426f1fb58dd818466f945d05e6520e1141630f899d8f17afcffdac1f11131 = $this->env->getExtension("native_profiler");
        $__internal_56a426f1fb58dd818466f945d05e6520e1141630f899d8f17afcffdac1f11131->enter($__internal_56a426f1fb58dd818466f945d05e6520e1141630f899d8f17afcffdac1f11131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_56a426f1fb58dd818466f945d05e6520e1141630f899d8f17afcffdac1f11131->leave($__internal_56a426f1fb58dd818466f945d05e6520e1141630f899d8f17afcffdac1f11131_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_360d01196a24c0b1712e254c1808ebb2e88d6ec68b6d140fcecb762db632a0ce = $this->env->getExtension("native_profiler");
        $__internal_360d01196a24c0b1712e254c1808ebb2e88d6ec68b6d140fcecb762db632a0ce->enter($__internal_360d01196a24c0b1712e254c1808ebb2e88d6ec68b6d140fcecb762db632a0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_360d01196a24c0b1712e254c1808ebb2e88d6ec68b6d140fcecb762db632a0ce->leave($__internal_360d01196a24c0b1712e254c1808ebb2e88d6ec68b6d140fcecb762db632a0ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
