<?php

/* dcissMyAppBlogBundle:Default:index.html.twig */
class __TwigTemplate_6e6a497bdd1aa08469808082ad571ac869aca6e231181b0e79572cf711ba5dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "dcissMyAppBlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'dciss_body' => array($this, 'block_dciss_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c107b52c5f4d80a3e63bf8b8764db9850bcb67f13617ce90159574ad11f6a02 = $this->env->getExtension("native_profiler");
        $__internal_2c107b52c5f4d80a3e63bf8b8764db9850bcb67f13617ce90159574ad11f6a02->enter($__internal_2c107b52c5f4d80a3e63bf8b8764db9850bcb67f13617ce90159574ad11f6a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dcissMyAppBlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c107b52c5f4d80a3e63bf8b8764db9850bcb67f13617ce90159574ad11f6a02->leave($__internal_2c107b52c5f4d80a3e63bf8b8764db9850bcb67f13617ce90159574ad11f6a02_prof);

    }

    // line 2
    public function block_dciss_body($context, array $blocks = array())
    {
        $__internal_93849a7c89b8653ab9b53c8c55d3cc33a7aef8949f80f7d25f303455db06b41a = $this->env->getExtension("native_profiler");
        $__internal_93849a7c89b8653ab9b53c8c55d3cc33a7aef8949f80f7d25f303455db06b41a->enter($__internal_93849a7c89b8653ab9b53c8c55d3cc33a7aef8949f80f7d25f303455db06b41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dciss_body"));

        // line 3
        echo "<h1>The Last Post(s) : </h1>
<div class=\"count\">
    Total :<strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</strong>
</div>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["all_posts"]) {
            // line 9
            echo "  <div class=\"post-preview\">
                    <a href=\"post.html\">
                        <h2 class=\"post-title\">
                           ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_posts"], "title", array()), "html", null, true);
            echo "
                        </h2>
                        <h3 class=\"post-subtitle\">
                           ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_posts"], "subtitle", array()), "html", null, true);
            echo "
                        </h3>
                        
                        <h3 class=\"post-subtitle\">
                           ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["all_posts"], "subject", array()), "html", null, true);
            echo "
                        </h3>
                    </a>
                    <p class=\"post-meta\">Posted by <a href=\"#\">Nadir Fouka</a>
                    \t";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["all_posts"], "date", array()), "Y-m-d H:m:s"), "html", null, true);
            echo "
                    </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['all_posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div class=\"pagination\" style=\"width: 500px;
  display: block;
  margin-left: auto;
  margin-right: auto;\">
    ";
        // line 31
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>
";
        
        $__internal_93849a7c89b8653ab9b53c8c55d3cc33a7aef8949f80f7d25f303455db06b41a->leave($__internal_93849a7c89b8653ab9b53c8c55d3cc33a7aef8949f80f7d25f303455db06b41a_prof);

    }

    public function getTemplateName()
    {
        return "dcissMyAppBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  89 => 27,  79 => 23,  72 => 19,  65 => 15,  59 => 12,  54 => 9,  50 => 8,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block dciss_body %}*/
/* <h1>The Last Post(s) : </h1>*/
/* <div class="count">*/
/*     Total :<strong>{{ pagination.getTotalItemCount }}</strong>*/
/* </div>*/
/* */
/* {% for all_posts in pagination %}*/
/*   <div class="post-preview">*/
/*                     <a href="post.html">*/
/*                         <h2 class="post-title">*/
/*                            {{ all_posts.title}}*/
/*                         </h2>*/
/*                         <h3 class="post-subtitle">*/
/*                            {{ all_posts.subtitle}}*/
/*                         </h3>*/
/*                         */
/*                         <h3 class="post-subtitle">*/
/*                            {{ all_posts.subject}}*/
/*                         </h3>*/
/*                     </a>*/
/*                     <p class="post-meta">Posted by <a href="#">Nadir Fouka</a>*/
/*                     	{{ all_posts.date |date('Y-m-d H:m:s')}}*/
/*                     </p>*/
/*     </div>*/
/* {% endfor %}*/
/* <div class="pagination" style="width: 500px;*/
/*   display: block;*/
/*   margin-left: auto;*/
/*   margin-right: auto;">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
