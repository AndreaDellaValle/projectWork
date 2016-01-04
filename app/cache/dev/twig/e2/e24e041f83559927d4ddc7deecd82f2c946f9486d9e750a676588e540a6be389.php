<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4c81c09550f4b58f952f50fb455f9865e7af32850bc7edf3a2f8e3a4aa3e1d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7e13d7961532f7ed5a6937383ce173894f66c7049b40ff7762bd5ed1d0ae0beb = $this->env->getExtension("native_profiler");
        $__internal_7e13d7961532f7ed5a6937383ce173894f66c7049b40ff7762bd5ed1d0ae0beb->enter($__internal_7e13d7961532f7ed5a6937383ce173894f66c7049b40ff7762bd5ed1d0ae0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e13d7961532f7ed5a6937383ce173894f66c7049b40ff7762bd5ed1d0ae0beb->leave($__internal_7e13d7961532f7ed5a6937383ce173894f66c7049b40ff7762bd5ed1d0ae0beb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_407ef86796157b5496b0fd448e3fb7587b3952b82e5f18a9369311bc51ac9da4 = $this->env->getExtension("native_profiler");
        $__internal_407ef86796157b5496b0fd448e3fb7587b3952b82e5f18a9369311bc51ac9da4->enter($__internal_407ef86796157b5496b0fd448e3fb7587b3952b82e5f18a9369311bc51ac9da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_407ef86796157b5496b0fd448e3fb7587b3952b82e5f18a9369311bc51ac9da4->leave($__internal_407ef86796157b5496b0fd448e3fb7587b3952b82e5f18a9369311bc51ac9da4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
