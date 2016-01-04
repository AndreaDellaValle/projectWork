<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5fa98f1905247286558383fb11e9512099acb51f24a36edd706e409ed2745209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e121b2426499fdc5cf186af98655a000735219fc217d8283853716a7a1e5bbbd = $this->env->getExtension("native_profiler");
        $__internal_e121b2426499fdc5cf186af98655a000735219fc217d8283853716a7a1e5bbbd->enter($__internal_e121b2426499fdc5cf186af98655a000735219fc217d8283853716a7a1e5bbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e121b2426499fdc5cf186af98655a000735219fc217d8283853716a7a1e5bbbd->leave($__internal_e121b2426499fdc5cf186af98655a000735219fc217d8283853716a7a1e5bbbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_044d941f8d2b8a4f562f5643f403f393d6ca6bd83188da2e3b08cd4d1d165ec6 = $this->env->getExtension("native_profiler");
        $__internal_044d941f8d2b8a4f562f5643f403f393d6ca6bd83188da2e3b08cd4d1d165ec6->enter($__internal_044d941f8d2b8a4f562f5643f403f393d6ca6bd83188da2e3b08cd4d1d165ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_044d941f8d2b8a4f562f5643f403f393d6ca6bd83188da2e3b08cd4d1d165ec6->leave($__internal_044d941f8d2b8a4f562f5643f403f393d6ca6bd83188da2e3b08cd4d1d165ec6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
