<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_01df9a0d5eb72a9a2039d0536dc8ac9238a6c30b56cd0aebbcb95c35b2852369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_cde501cb8e8f5664d8f2800917efb7aa3f85f47f4ff68b9db84bcda4b997ca39 = $this->env->getExtension("native_profiler");
        $__internal_cde501cb8e8f5664d8f2800917efb7aa3f85f47f4ff68b9db84bcda4b997ca39->enter($__internal_cde501cb8e8f5664d8f2800917efb7aa3f85f47f4ff68b9db84bcda4b997ca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde501cb8e8f5664d8f2800917efb7aa3f85f47f4ff68b9db84bcda4b997ca39->leave($__internal_cde501cb8e8f5664d8f2800917efb7aa3f85f47f4ff68b9db84bcda4b997ca39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_523fc796497c1fa771161b76b5f6d3c2903703ebf5c907fc21e9c8c5d58e7c3e = $this->env->getExtension("native_profiler");
        $__internal_523fc796497c1fa771161b76b5f6d3c2903703ebf5c907fc21e9c8c5d58e7c3e->enter($__internal_523fc796497c1fa771161b76b5f6d3c2903703ebf5c907fc21e9c8c5d58e7c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_523fc796497c1fa771161b76b5f6d3c2903703ebf5c907fc21e9c8c5d58e7c3e->leave($__internal_523fc796497c1fa771161b76b5f6d3c2903703ebf5c907fc21e9c8c5d58e7c3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
