<?php

/* base.html.twig */
class __TwigTemplate_6fb2252a7cd2f2eb5ab8c8c4cff2a7affb640d4b71c89baf379143b44e111bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2272ff8dafbbb83a0d9f39848dfbed3c4d52f21aca2b8e17709c9cbbce970f06 = $this->env->getExtension("native_profiler");
        $__internal_2272ff8dafbbb83a0d9f39848dfbed3c4d52f21aca2b8e17709c9cbbce970f06->enter($__internal_2272ff8dafbbb83a0d9f39848dfbed3c4d52f21aca2b8e17709c9cbbce970f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2272ff8dafbbb83a0d9f39848dfbed3c4d52f21aca2b8e17709c9cbbce970f06->leave($__internal_2272ff8dafbbb83a0d9f39848dfbed3c4d52f21aca2b8e17709c9cbbce970f06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc1dc42c3e4913bccbc8033c44f8fc695c288ac1fe1eb02fc883e48306b150ee = $this->env->getExtension("native_profiler");
        $__internal_fc1dc42c3e4913bccbc8033c44f8fc695c288ac1fe1eb02fc883e48306b150ee->enter($__internal_fc1dc42c3e4913bccbc8033c44f8fc695c288ac1fe1eb02fc883e48306b150ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc1dc42c3e4913bccbc8033c44f8fc695c288ac1fe1eb02fc883e48306b150ee->leave($__internal_fc1dc42c3e4913bccbc8033c44f8fc695c288ac1fe1eb02fc883e48306b150ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af23d001ac0bc81fc380b8731a8a7e3bf1beeb5bb1c6b8fa2cb4f0929b6619d1 = $this->env->getExtension("native_profiler");
        $__internal_af23d001ac0bc81fc380b8731a8a7e3bf1beeb5bb1c6b8fa2cb4f0929b6619d1->enter($__internal_af23d001ac0bc81fc380b8731a8a7e3bf1beeb5bb1c6b8fa2cb4f0929b6619d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af23d001ac0bc81fc380b8731a8a7e3bf1beeb5bb1c6b8fa2cb4f0929b6619d1->leave($__internal_af23d001ac0bc81fc380b8731a8a7e3bf1beeb5bb1c6b8fa2cb4f0929b6619d1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9e21651721a25b3f446e3bca6032b95fb701b63f19a127facb58d612a386250 = $this->env->getExtension("native_profiler");
        $__internal_e9e21651721a25b3f446e3bca6032b95fb701b63f19a127facb58d612a386250->enter($__internal_e9e21651721a25b3f446e3bca6032b95fb701b63f19a127facb58d612a386250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9e21651721a25b3f446e3bca6032b95fb701b63f19a127facb58d612a386250->leave($__internal_e9e21651721a25b3f446e3bca6032b95fb701b63f19a127facb58d612a386250_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cb0eaa3976c635f55d044092450e8618edf8def1852d799ae4fc61d33b8be38 = $this->env->getExtension("native_profiler");
        $__internal_8cb0eaa3976c635f55d044092450e8618edf8def1852d799ae4fc61d33b8be38->enter($__internal_8cb0eaa3976c635f55d044092450e8618edf8def1852d799ae4fc61d33b8be38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8cb0eaa3976c635f55d044092450e8618edf8def1852d799ae4fc61d33b8be38->leave($__internal_8cb0eaa3976c635f55d044092450e8618edf8def1852d799ae4fc61d33b8be38_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
