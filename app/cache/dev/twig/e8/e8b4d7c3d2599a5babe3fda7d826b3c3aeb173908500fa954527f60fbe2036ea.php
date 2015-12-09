<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_12d96c0f8f063d96f2f9b52ab6d0322dfdaeca942fda46b454f8fcd9829f801f extends Twig_Template
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
        $__internal_55e20ab3962cde96820824686be2762d1473403a5ac08d1ccb4863a53e08eda0 = $this->env->getExtension("native_profiler");
        $__internal_55e20ab3962cde96820824686be2762d1473403a5ac08d1ccb4863a53e08eda0->enter($__internal_55e20ab3962cde96820824686be2762d1473403a5ac08d1ccb4863a53e08eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig"));

        // line 16
        echo "
";
        // line 17
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 38
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 59
                echo "        ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 60
                    echo "            ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
        
        $__internal_55e20ab3962cde96820824686be2762d1473403a5ac08d1ccb4863a53e08eda0->leave($__internal_55e20ab3962cde96820824686be2762d1473403a5ac08d1ccb4863a53e08eda0_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 84,  185 => 81,  182 => 80,  174 => 77,  171 => 76,  169 => 75,  166 => 74,  158 => 71,  155 => 70,  152 => 69,  144 => 66,  141 => 65,  135 => 61,  132 => 60,  129 => 59,  127 => 58,  124 => 57,  117 => 55,  111 => 52,  108 => 51,  100 => 48,  97 => 47,  94 => 46,  90 => 45,  87 => 44,  84 => 43,  78 => 39,  76 => 38,  71 => 36,  68 => 35,  66 => 34,  61 => 32,  58 => 31,  56 => 30,  53 => 29,  47 => 26,  44 => 25,  36 => 22,  33 => 21,  31 => 20,  27 => 18,  25 => 17,  22 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Twitter Bootstrap v3 Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Twitter Bootstrap CSS Toolkit*/
/*  * http://getbootstrap.com/components/#pagination*/
/*  **/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  * @author Artem Zabelin <artjomzabelin@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="pagination">*/
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
/* {% endif %}*/
/* */
