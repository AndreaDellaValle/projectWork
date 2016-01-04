<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b22a47b5dd9092412bbb50d2888b32df840ddf8f087dad8218b25a505845ab6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_43e7631b8b5916998779c480d1ab783bc471400aab98b8cce88d65f39bef4d3e = $this->env->getExtension("native_profiler");
        $__internal_43e7631b8b5916998779c480d1ab783bc471400aab98b8cce88d65f39bef4d3e->enter($__internal_43e7631b8b5916998779c480d1ab783bc471400aab98b8cce88d65f39bef4d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e7631b8b5916998779c480d1ab783bc471400aab98b8cce88d65f39bef4d3e->leave($__internal_43e7631b8b5916998779c480d1ab783bc471400aab98b8cce88d65f39bef4d3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda7be080d6b1d5fa46425fd39f410879c7cede9bce83b6cd1965b31328bc3f6 = $this->env->getExtension("native_profiler");
        $__internal_cda7be080d6b1d5fa46425fd39f410879c7cede9bce83b6cd1965b31328bc3f6->enter($__internal_cda7be080d6b1d5fa46425fd39f410879c7cede9bce83b6cd1965b31328bc3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cda7be080d6b1d5fa46425fd39f410879c7cede9bce83b6cd1965b31328bc3f6->leave($__internal_cda7be080d6b1d5fa46425fd39f410879c7cede9bce83b6cd1965b31328bc3f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
