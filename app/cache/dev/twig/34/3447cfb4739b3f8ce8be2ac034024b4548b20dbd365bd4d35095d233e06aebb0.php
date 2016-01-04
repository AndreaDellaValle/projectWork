<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4b72a38863c11870c637e669fda9f28245370868a9ced265a610f74bd585e114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_10466b59ce4e3af20744fe1a7b335f10b1d15b94984594f53dd6f1783258eea5 = $this->env->getExtension("native_profiler");
        $__internal_10466b59ce4e3af20744fe1a7b335f10b1d15b94984594f53dd6f1783258eea5->enter($__internal_10466b59ce4e3af20744fe1a7b335f10b1d15b94984594f53dd6f1783258eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10466b59ce4e3af20744fe1a7b335f10b1d15b94984594f53dd6f1783258eea5->leave($__internal_10466b59ce4e3af20744fe1a7b335f10b1d15b94984594f53dd6f1783258eea5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5432ceb7ff7fa3d00c943fa7f3dff96d29ad2bcd6c4c7dc73235afec51518354 = $this->env->getExtension("native_profiler");
        $__internal_5432ceb7ff7fa3d00c943fa7f3dff96d29ad2bcd6c4c7dc73235afec51518354->enter($__internal_5432ceb7ff7fa3d00c943fa7f3dff96d29ad2bcd6c4c7dc73235afec51518354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5432ceb7ff7fa3d00c943fa7f3dff96d29ad2bcd6c4c7dc73235afec51518354->leave($__internal_5432ceb7ff7fa3d00c943fa7f3dff96d29ad2bcd6c4c7dc73235afec51518354_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
