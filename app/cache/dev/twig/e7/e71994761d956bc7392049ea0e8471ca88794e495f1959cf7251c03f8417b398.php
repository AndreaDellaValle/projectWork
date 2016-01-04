<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e2854fef424f0e1964ecbe4c4a309745b07699efcbc6a193f718fa873b99b6a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_82d52ad90df3fd778b42d9ba979fd0b8496facaf824570444ff4c1b1426894d6 = $this->env->getExtension("native_profiler");
        $__internal_82d52ad90df3fd778b42d9ba979fd0b8496facaf824570444ff4c1b1426894d6->enter($__internal_82d52ad90df3fd778b42d9ba979fd0b8496facaf824570444ff4c1b1426894d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d52ad90df3fd778b42d9ba979fd0b8496facaf824570444ff4c1b1426894d6->leave($__internal_82d52ad90df3fd778b42d9ba979fd0b8496facaf824570444ff4c1b1426894d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_590a4c6fad8ad1b805d91dbd2cd6d3685d241d3080eaec10ad68cd0d8e9b1757 = $this->env->getExtension("native_profiler");
        $__internal_590a4c6fad8ad1b805d91dbd2cd6d3685d241d3080eaec10ad68cd0d8e9b1757->enter($__internal_590a4c6fad8ad1b805d91dbd2cd6d3685d241d3080eaec10ad68cd0d8e9b1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_590a4c6fad8ad1b805d91dbd2cd6d3685d241d3080eaec10ad68cd0d8e9b1757->leave($__internal_590a4c6fad8ad1b805d91dbd2cd6d3685d241d3080eaec10ad68cd0d8e9b1757_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
