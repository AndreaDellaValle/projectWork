<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d8d6083c6bb9df7f95311234a080abe991743d1cf09ced7c4ddc97d42786816f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_3c9bf71d8cb2c068fcc1e1ae0aff77c020ed94f66c327b883f5e16ae75498a1f = $this->env->getExtension("native_profiler");
        $__internal_3c9bf71d8cb2c068fcc1e1ae0aff77c020ed94f66c327b883f5e16ae75498a1f->enter($__internal_3c9bf71d8cb2c068fcc1e1ae0aff77c020ed94f66c327b883f5e16ae75498a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9bf71d8cb2c068fcc1e1ae0aff77c020ed94f66c327b883f5e16ae75498a1f->leave($__internal_3c9bf71d8cb2c068fcc1e1ae0aff77c020ed94f66c327b883f5e16ae75498a1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78b926ebd66731172961a08d59ab88cbfe832dc3dd24ef572837d1a2efe78429 = $this->env->getExtension("native_profiler");
        $__internal_78b926ebd66731172961a08d59ab88cbfe832dc3dd24ef572837d1a2efe78429->enter($__internal_78b926ebd66731172961a08d59ab88cbfe832dc3dd24ef572837d1a2efe78429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_78b926ebd66731172961a08d59ab88cbfe832dc3dd24ef572837d1a2efe78429->leave($__internal_78b926ebd66731172961a08d59ab88cbfe832dc3dd24ef572837d1a2efe78429_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
