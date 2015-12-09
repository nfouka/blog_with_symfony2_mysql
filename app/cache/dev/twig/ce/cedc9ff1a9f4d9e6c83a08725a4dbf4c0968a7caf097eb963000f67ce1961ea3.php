<?php

/* AcmeBlogBundle:Default:index.html.twig */
class __TwigTemplate_c8d5e46dcd01911551b62ed5c7e3871414d076fb5f5a5991afe054b16bbd603c extends Twig_Template
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
        $__internal_ca1fddd3d302a611207af247e722ccca33cd6be86cec261a7d8c0f7cf91eac89 = $this->env->getExtension("native_profiler");
        $__internal_ca1fddd3d302a611207af247e722ccca33cd6be86cec261a7d8c0f7cf91eac89->enter($__internal_ca1fddd3d302a611207af247e722ccca33cd6be86cec261a7d8c0f7cf91eac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeBlogBundle:Default:index.html.twig"));

        // line 1
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">


<ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nom", array()), "html", null, true);
            echo " <br/>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("article.empty"), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>


<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
<div class=\"pagination\">
    <ul>
        ";
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
                <a href=\"#\">";
            // line 24
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
</div>";
        
        $__internal_ca1fddd3d302a611207af247e722ccca33cd6be86cec261a7d8c0f7cf91eac89->leave($__internal_ca1fddd3d302a611207af247e722ccca33cd6be86cec261a7d8c0f7cf91eac89_prof);

    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  75 => 24,  68 => 23,  63 => 22,  54 => 14,  45 => 12,  37 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* */
/* <ul>*/
/*     {% for article in articles %}*/
/*         {{ article.nom }} <br/>*/
/*     {% else %}*/
/*         <p>{{ 'article.empty'|trans }}</p>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* */
/* <!-- Latest compiled and minified JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* <div class="pagination">*/
/*     <ul>*/
/*         {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*         {% for p in range(1, nombrePage) %}*/
/*             <li{% if p == page %} class="active"{% endif %}>*/
/*                 <a href="#">{{ p }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
