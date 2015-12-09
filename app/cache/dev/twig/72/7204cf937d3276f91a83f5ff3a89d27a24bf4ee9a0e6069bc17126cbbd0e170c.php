<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2b1175a3639e7ccc736232d7a46a6edc8017f6bd222bbbe429cc261f87cd2f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87ce02ad9baef7d66ad937973cedd37e3109f375145efad56e48477e4e29de71 = $this->env->getExtension("native_profiler");
        $__internal_87ce02ad9baef7d66ad937973cedd37e3109f375145efad56e48477e4e29de71->enter($__internal_87ce02ad9baef7d66ad937973cedd37e3109f375145efad56e48477e4e29de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87ce02ad9baef7d66ad937973cedd37e3109f375145efad56e48477e4e29de71->leave($__internal_87ce02ad9baef7d66ad937973cedd37e3109f375145efad56e48477e4e29de71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d485b5f394bbd16de169964b4002f06203a59720a7c1439a79b7f61448561a2f = $this->env->getExtension("native_profiler");
        $__internal_d485b5f394bbd16de169964b4002f06203a59720a7c1439a79b7f61448561a2f->enter($__internal_d485b5f394bbd16de169964b4002f06203a59720a7c1439a79b7f61448561a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d485b5f394bbd16de169964b4002f06203a59720a7c1439a79b7f61448561a2f->leave($__internal_d485b5f394bbd16de169964b4002f06203a59720a7c1439a79b7f61448561a2f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
