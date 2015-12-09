<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_2e68d51d990fe15cef1e91982a0fd5d13004125c24e557ed493dbdb9031756fc extends Twig_Template
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
        $__internal_513508bdd991364987c0771539b59c4fce2550419ce720b95875d6746d423c00 = $this->env->getExtension("native_profiler");
        $__internal_513508bdd991364987c0771539b59c4fce2550419ce720b95875d6746d423c00->enter($__internal_513508bdd991364987c0771539b59c4fce2550419ce720b95875d6746d423c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig"));

        // line 19
        echo "
";
        // line 20
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 42
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 63
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 64
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
        
        $__internal_513508bdd991364987c0771539b59c4fce2550419ce720b95875d6746d423c00->leave($__internal_513508bdd991364987c0771539b59c4fce2550419ce720b95875d6746d423c00_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 88,  186 => 85,  183 => 84,  175 => 81,  172 => 80,  170 => 79,  167 => 78,  159 => 75,  156 => 74,  153 => 73,  145 => 70,  142 => 69,  136 => 65,  133 => 64,  130 => 63,  128 => 62,  125 => 61,  118 => 59,  112 => 56,  109 => 55,  101 => 52,  98 => 51,  95 => 50,  91 => 49,  88 => 48,  85 => 47,  79 => 43,  77 => 42,  72 => 40,  69 => 39,  67 => 38,  62 => 36,  59 => 35,  57 => 34,  54 => 33,  48 => 30,  45 => 29,  37 => 26,  34 => 25,  32 => 24,  27 => 21,  25 => 20,  22 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Twitter Bootstrap Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Twitter Bootstrap CSS Toolkit*/
/*  * http://twitter.github.com/bootstrap/*/
/*  **/
/*  * This view has been ported from Pagerfanta progect*/
/*  * https://github.com/whiteoctober/Pagerfanta/*/
/*  * https://github.com/whiteoctober/Pagerfanta/blob/master/src/Pagerfanta/View/TwitterBootstrapView.php*/
/*  **/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/* <div class="pagination">*/
/*     <ul>*/
/* */
/*     {% if previous is defined %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">&laquo;&nbsp;{{ 'Previous'|trans }}</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="disabled">*/
/*             <span>&laquo;&nbsp;{{ 'Previous'|trans }}</span>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if startPage > 1 %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*         </li>*/
/*         {% if startPage == 3 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*             </li>*/
/*         {% elseif startPage != 2 %}*/
/*         <li class="disabled">*/
/*             <span>&hellip;</span>*/
/*         </li>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% for page in pagesInRange %}*/
/*         {% if page != current %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="active">*/
/*                 <span>{{ page }}</span>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if pageCount > endPage %}*/
/*         {% if pageCount > (endPage + 1) %}*/
/*             {% if pageCount > (endPage + 2) %}*/
/*                 <li class="disabled">*/
/*                     <span>&hellip;</span>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">{{ pageCount -1 }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/*     {% if next is defined %}*/
/*         <li>*/
/*             <a href="{{ path(route, query|merge({(pageParameterName): next})) }}">{{ 'Next'|trans }}&nbsp;&raquo;</a>*/
/*         </li>*/
/*     {% else %}*/
/*         <li class="disabled">*/
/*             <span>{{ 'Next'|trans }}&nbsp;&raquo;</span>*/
/*         </li>*/
/*     {% endif %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
