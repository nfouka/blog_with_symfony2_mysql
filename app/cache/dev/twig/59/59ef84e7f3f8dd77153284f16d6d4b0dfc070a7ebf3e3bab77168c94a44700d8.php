<?php

/* KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig */
class __TwigTemplate_352cd81d64e9f45d7a73e7b81321d6c18842347cd607941998b375f94868b9b4 extends Twig_Template
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
        $__internal_607cec3ac64d440d7b586a637ec463ad797584c3ae2607c8c8afe93cece7bec8 = $this->env->getExtension("native_profiler");
        $__internal_607cec3ac64d440d7b586a637ec463ad797584c3ae2607c8c8afe93cece7bec8->enter($__internal_607cec3ac64d440d7b586a637ec463ad797584c3ae2607c8c8afe93cece7bec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig"));

        // line 20
        echo "
";
        // line 21
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 22
            echo "    <ul class=\"pagination\">
        ";
            // line 23
            if (array_key_exists("previous", $context)) {
                // line 24
                echo "                 <li class=\"arrow\">
                     <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo; ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "</a>
                 </li>
        ";
            } else {
                // line 28
                echo "            <li class=\"arrow unavailable\">
                <a>
                    &laquo; ";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 36
                echo "            <li>
                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 39
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 40
                    echo "                <li>
                    <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 43
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 44
                    echo "                <li class=\"unavailable\">
                    <a>&hellip;</a>
                </li>
            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 52
                    echo "                <li>
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">
                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                } else {
                    // line 58
                    echo "                <li class=\"current\">
                    <a>";
                    // line 59
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 62
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
        ";
            // line 65
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 66
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 67
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 68
                        echo "                    <li class=\"unavailable\">
                        <a>&hellip;</a>
                    </li>
                ";
                    } else {
                        // line 72
                        echo "                    <li>
                        <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">
                            ";
                        // line 74
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 78
                    echo "            ";
                }
                // line 79
                echo "            <li>
                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (array_key_exists("next", $context)) {
                // line 85
                echo "            <li class=\"arrow\">
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">
                    ";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            } else {
                // line 91
                echo "            <li class=\"arrow unavailable\">
                <a>
                    ";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
                echo " &nbsp;&raquo;
                </a>
            </li>
        ";
            }
            // line 97
            echo "    </ul>
";
        }
        
        $__internal_607cec3ac64d440d7b586a637ec463ad797584c3ae2607c8c8afe93cece7bec8->leave($__internal_607cec3ac64d440d7b586a637ec463ad797584c3ae2607c8c8afe93cece7bec8_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:foundation_v5_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 97,  196 => 93,  192 => 91,  185 => 87,  181 => 86,  178 => 85,  176 => 84,  173 => 83,  165 => 80,  162 => 79,  159 => 78,  152 => 74,  148 => 73,  145 => 72,  139 => 68,  136 => 67,  133 => 66,  131 => 65,  128 => 64,  121 => 62,  115 => 59,  112 => 58,  105 => 54,  101 => 53,  98 => 52,  95 => 51,  91 => 50,  88 => 49,  85 => 48,  79 => 44,  77 => 43,  72 => 41,  69 => 40,  67 => 39,  62 => 37,  59 => 36,  57 => 35,  54 => 34,  47 => 30,  43 => 28,  35 => 25,  32 => 24,  30 => 23,  27 => 22,  25 => 21,  22 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Foundation 5 Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module */
/*  * from the Foundation 5 CSS Toolkit*/
/*  * http://foundation.zurb.com/docs/components/pagination.html*/
/*  **/
/*  * @author Vincent Loy <vincent.loy1@gmail.com>*/
/*  **/
/*  * This view have been ported from twitter bootstrap v3 pagination control implementation*/
/*  * from :*/
/*  * @author Pablo Díez <pablodip@gmail.com>*/
/*  * @author Jan Sorgalla <jsorgalla@gmail.com>*/
/*  * @author Artem Ponomarenko <imenem@inbox.ru>*/
/*  * @author Artem Zabelin <artjomzabelin@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if previous is defined %}*/
/*                  <li class="arrow">*/
/*                      <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">&laquo; {{ 'Previous'|trans }}</a>*/
/*                  </li>*/
/*         {% else %}*/
/*             <li class="arrow unavailable">*/
/*                 <a>*/
/*                     &laquo; {{ 'Previous'|trans }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if startPage > 1 %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a>*/
/*             </li>*/
/*             {% if startPage == 3 %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a>*/
/*                 </li>*/
/*             {% elseif startPage != 2 %}*/
/*                 <li class="unavailable">*/
/*                     <a>&hellip;</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <li>*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">*/
/*                         {{ page }}*/
/*                     </a>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li class="current">*/
/*                     <a>{{ page }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*         {% endfor %}*/
/* */
/*         {% if pageCount > endPage %}*/
/*             {% if pageCount > (endPage + 1) %}*/
/*                 {% if pageCount > (endPage + 2) %}*/
/*                     <li class="unavailable">*/
/*                         <a>&hellip;</a>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">*/
/*                             {{ pageCount -1 }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if next is defined %}*/
/*             <li class="arrow">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): next})) }}">*/
/*                     {{ 'Next'|trans }} &nbsp;&raquo;*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="arrow unavailable">*/
/*                 <a>*/
/*                     {{ 'Next'|trans }} &nbsp;&raquo;*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
