<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4f5a414eae580e4b449163092cfd1f30c5ee258b7b195fbfbdc3f4a7a474292c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_385157f297ed96f286c2aa775a852eef98b142778142fa7a56c3b4279f8e36ff = $this->env->getExtension("native_profiler");
        $__internal_385157f297ed96f286c2aa775a852eef98b142778142fa7a56c3b4279f8e36ff->enter($__internal_385157f297ed96f286c2aa775a852eef98b142778142fa7a56c3b4279f8e36ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385157f297ed96f286c2aa775a852eef98b142778142fa7a56c3b4279f8e36ff->leave($__internal_385157f297ed96f286c2aa775a852eef98b142778142fa7a56c3b4279f8e36ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbe6b7162e52fc2c9ec45e1d93d5b2ac1ba12e4d981ff47c210677a93b440662 = $this->env->getExtension("native_profiler");
        $__internal_fbe6b7162e52fc2c9ec45e1d93d5b2ac1ba12e4d981ff47c210677a93b440662->enter($__internal_fbe6b7162e52fc2c9ec45e1d93d5b2ac1ba12e4d981ff47c210677a93b440662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbe6b7162e52fc2c9ec45e1d93d5b2ac1ba12e4d981ff47c210677a93b440662->leave($__internal_fbe6b7162e52fc2c9ec45e1d93d5b2ac1ba12e4d981ff47c210677a93b440662_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a711efff3869a47fee26efa3615831c62f44d452573f34f371a6b9109975bb7d = $this->env->getExtension("native_profiler");
        $__internal_a711efff3869a47fee26efa3615831c62f44d452573f34f371a6b9109975bb7d->enter($__internal_a711efff3869a47fee26efa3615831c62f44d452573f34f371a6b9109975bb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a711efff3869a47fee26efa3615831c62f44d452573f34f371a6b9109975bb7d->leave($__internal_a711efff3869a47fee26efa3615831c62f44d452573f34f371a6b9109975bb7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae0ee5fd0b8895ab06391aef05ac27f587a6134e31bbeee8a7de35d68c6e050f = $this->env->getExtension("native_profiler");
        $__internal_ae0ee5fd0b8895ab06391aef05ac27f587a6134e31bbeee8a7de35d68c6e050f->enter($__internal_ae0ee5fd0b8895ab06391aef05ac27f587a6134e31bbeee8a7de35d68c6e050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ae0ee5fd0b8895ab06391aef05ac27f587a6134e31bbeee8a7de35d68c6e050f->leave($__internal_ae0ee5fd0b8895ab06391aef05ac27f587a6134e31bbeee8a7de35d68c6e050f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
