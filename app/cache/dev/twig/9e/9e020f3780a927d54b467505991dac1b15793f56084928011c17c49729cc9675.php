<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_925ab966984b5878edfac78737c2d6b8aa4d054c8cfc1012fb680d4320505596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2984fe30a4f474cd013ddd82e0bb503c7c532b4a625fea879f4157215b5c6b5b = $this->env->getExtension("native_profiler");
        $__internal_2984fe30a4f474cd013ddd82e0bb503c7c532b4a625fea879f4157215b5c6b5b->enter($__internal_2984fe30a4f474cd013ddd82e0bb503c7c532b4a625fea879f4157215b5c6b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2984fe30a4f474cd013ddd82e0bb503c7c532b4a625fea879f4157215b5c6b5b->leave($__internal_2984fe30a4f474cd013ddd82e0bb503c7c532b4a625fea879f4157215b5c6b5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be2ed640a736fb43d2ebdab54f9dd813d0ca2f63e02698af6f67c1ffdc05c998 = $this->env->getExtension("native_profiler");
        $__internal_be2ed640a736fb43d2ebdab54f9dd813d0ca2f63e02698af6f67c1ffdc05c998->enter($__internal_be2ed640a736fb43d2ebdab54f9dd813d0ca2f63e02698af6f67c1ffdc05c998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_be2ed640a736fb43d2ebdab54f9dd813d0ca2f63e02698af6f67c1ffdc05c998->leave($__internal_be2ed640a736fb43d2ebdab54f9dd813d0ca2f63e02698af6f67c1ffdc05c998_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
