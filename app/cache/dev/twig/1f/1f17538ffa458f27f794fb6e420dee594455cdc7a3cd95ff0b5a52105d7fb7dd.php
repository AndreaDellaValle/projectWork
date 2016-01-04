<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_13f7ad34943e49c197a07c5eb9b8f30d391730f7f28e1452b950c38b478f63dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6a141b26ef9f3aa80f2de778e2ef289ab874c7cbb621669fb5aea32ea4fd59ca = $this->env->getExtension("native_profiler");
        $__internal_6a141b26ef9f3aa80f2de778e2ef289ab874c7cbb621669fb5aea32ea4fd59ca->enter($__internal_6a141b26ef9f3aa80f2de778e2ef289ab874c7cbb621669fb5aea32ea4fd59ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a141b26ef9f3aa80f2de778e2ef289ab874c7cbb621669fb5aea32ea4fd59ca->leave($__internal_6a141b26ef9f3aa80f2de778e2ef289ab874c7cbb621669fb5aea32ea4fd59ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a0b0edfedae6a3ae135630605cac1bf93927d87d0f2d8b19cadb2065c5d1833 = $this->env->getExtension("native_profiler");
        $__internal_5a0b0edfedae6a3ae135630605cac1bf93927d87d0f2d8b19cadb2065c5d1833->enter($__internal_5a0b0edfedae6a3ae135630605cac1bf93927d87d0f2d8b19cadb2065c5d1833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5a0b0edfedae6a3ae135630605cac1bf93927d87d0f2d8b19cadb2065c5d1833->leave($__internal_5a0b0edfedae6a3ae135630605cac1bf93927d87d0f2d8b19cadb2065c5d1833_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
