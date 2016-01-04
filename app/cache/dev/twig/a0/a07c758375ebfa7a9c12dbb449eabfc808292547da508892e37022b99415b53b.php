<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e974353081a034aa4503f5df79dc32c0198da9deb2f73be5063d93cc70972fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_dcddd86e43b85a9b75ee226a6d7bbe434dd1cd45167bb56be5df9fef72706c47 = $this->env->getExtension("native_profiler");
        $__internal_dcddd86e43b85a9b75ee226a6d7bbe434dd1cd45167bb56be5df9fef72706c47->enter($__internal_dcddd86e43b85a9b75ee226a6d7bbe434dd1cd45167bb56be5df9fef72706c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcddd86e43b85a9b75ee226a6d7bbe434dd1cd45167bb56be5df9fef72706c47->leave($__internal_dcddd86e43b85a9b75ee226a6d7bbe434dd1cd45167bb56be5df9fef72706c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91dab1e1e60643b899a713cf46c3536724751f8b585ade21d2a4c4172a1b3d3f = $this->env->getExtension("native_profiler");
        $__internal_91dab1e1e60643b899a713cf46c3536724751f8b585ade21d2a4c4172a1b3d3f->enter($__internal_91dab1e1e60643b899a713cf46c3536724751f8b585ade21d2a4c4172a1b3d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_91dab1e1e60643b899a713cf46c3536724751f8b585ade21d2a4c4172a1b3d3f->leave($__internal_91dab1e1e60643b899a713cf46c3536724751f8b585ade21d2a4c4172a1b3d3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
