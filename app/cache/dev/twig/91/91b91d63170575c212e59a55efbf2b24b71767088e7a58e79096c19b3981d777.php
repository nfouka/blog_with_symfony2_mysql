<?php

/* mohamedMyAppBundle:Blog:page.html.twig */
class __TwigTemplate_d2448782ce20073acfc15cce210d8c49a22ef574fa1d992044564a1c2844cc8e extends Twig_Template
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
        $__internal_624bc73e367cdffa9b5bd1ca4002c701137c5baac4933354bf182b1113a5aac8 = $this->env->getExtension("native_profiler");
        $__internal_624bc73e367cdffa9b5bd1ca4002c701137c5baac4933354bf182b1113a5aac8->enter($__internal_624bc73e367cdffa9b5bd1ca4002c701137c5baac4933354bf182b1113a5aac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mohamedMyAppBundle:Blog:page.html.twig"));

        // line 1
        echo "<h1>tout les étudiant inséeres</h1>


";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 5
            echo "    <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo " </li>
       <li> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", array()), "html", null, true);
            echo " </li>
       <li> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "adresse", array()), "html", null, true);
            echo " </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_624bc73e367cdffa9b5bd1ca4002c701137c5baac4933354bf182b1113a5aac8->leave($__internal_624bc73e367cdffa9b5bd1ca4002c701137c5baac4933354bf182b1113a5aac8_prof);

    }

    public function getTemplateName()
    {
        return "mohamedMyAppBundle:Blog:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h1>tout les étudiant inséeres</h1>*/
/* */
/* */
/* {% for s in all %}*/
/*     <li> {{ s.id }} </li>*/
/*        <li> {{ s.nom }} </li>*/
/*        <li> {{ s.adresse }} </li>*/
/* {% endfor %}*/
