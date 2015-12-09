<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a0ff8ee254d5580ef7bb2025cd5bd8837bf67c82df3e0b8bbe7ce29ed21bf5b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e50cb77853640d80d0b76480b57c33764e4f27d01a5f3eb02c1f40b690fac5 = $this->env->getExtension("native_profiler");
        $__internal_a4e50cb77853640d80d0b76480b57c33764e4f27d01a5f3eb02c1f40b690fac5->enter($__internal_a4e50cb77853640d80d0b76480b57c33764e4f27d01a5f3eb02c1f40b690fac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e50cb77853640d80d0b76480b57c33764e4f27d01a5f3eb02c1f40b690fac5->leave($__internal_a4e50cb77853640d80d0b76480b57c33764e4f27d01a5f3eb02c1f40b690fac5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da6be498f2ab4951818b3f95292d85c83e51178e9833ae1e156005633bef35e4 = $this->env->getExtension("native_profiler");
        $__internal_da6be498f2ab4951818b3f95292d85c83e51178e9833ae1e156005633bef35e4->enter($__internal_da6be498f2ab4951818b3f95292d85c83e51178e9833ae1e156005633bef35e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_da6be498f2ab4951818b3f95292d85c83e51178e9833ae1e156005633bef35e4->leave($__internal_da6be498f2ab4951818b3f95292d85c83e51178e9833ae1e156005633bef35e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5f3b660fe6500365c55f9e2b825e9b70f095d968783b25f09eb6e877de28ff = $this->env->getExtension("native_profiler");
        $__internal_5a5f3b660fe6500365c55f9e2b825e9b70f095d968783b25f09eb6e877de28ff->enter($__internal_5a5f3b660fe6500365c55f9e2b825e9b70f095d968783b25f09eb6e877de28ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5a5f3b660fe6500365c55f9e2b825e9b70f095d968783b25f09eb6e877de28ff->leave($__internal_5a5f3b660fe6500365c55f9e2b825e9b70f095d968783b25f09eb6e877de28ff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8237948dad2296642a1e9f990fcbbb3431c704ddad43a71c5c7466a8a78d1e22 = $this->env->getExtension("native_profiler");
        $__internal_8237948dad2296642a1e9f990fcbbb3431c704ddad43a71c5c7466a8a78d1e22->enter($__internal_8237948dad2296642a1e9f990fcbbb3431c704ddad43a71c5c7466a8a78d1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8237948dad2296642a1e9f990fcbbb3431c704ddad43a71c5c7466a8a78d1e22->leave($__internal_8237948dad2296642a1e9f990fcbbb3431c704ddad43a71c5c7466a8a78d1e22_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ecaee9969c68b072015782640d31632a1cdd5e5793e8b7df481937b71f7d03a4 = $this->env->getExtension("native_profiler");
        $__internal_ecaee9969c68b072015782640d31632a1cdd5e5793e8b7df481937b71f7d03a4->enter($__internal_ecaee9969c68b072015782640d31632a1cdd5e5793e8b7df481937b71f7d03a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ecaee9969c68b072015782640d31632a1cdd5e5793e8b7df481937b71f7d03a4->leave($__internal_ecaee9969c68b072015782640d31632a1cdd5e5793e8b7df481937b71f7d03a4_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
