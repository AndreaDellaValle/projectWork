<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f4c3189a3842270d62b6a400493ec65e3e22c244562abb8decd0e3161bb24a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c90d0c6af5488704b4a715ac62fb4d1783f88a1dfafedc2f64621748ee437265 = $this->env->getExtension("native_profiler");
        $__internal_c90d0c6af5488704b4a715ac62fb4d1783f88a1dfafedc2f64621748ee437265->enter($__internal_c90d0c6af5488704b4a715ac62fb4d1783f88a1dfafedc2f64621748ee437265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90d0c6af5488704b4a715ac62fb4d1783f88a1dfafedc2f64621748ee437265->leave($__internal_c90d0c6af5488704b4a715ac62fb4d1783f88a1dfafedc2f64621748ee437265_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c8a507d2027130d10464cbc798e9eae172c616d9ed2c78a31e484e268bbfb45 = $this->env->getExtension("native_profiler");
        $__internal_7c8a507d2027130d10464cbc798e9eae172c616d9ed2c78a31e484e268bbfb45->enter($__internal_7c8a507d2027130d10464cbc798e9eae172c616d9ed2c78a31e484e268bbfb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7c8a507d2027130d10464cbc798e9eae172c616d9ed2c78a31e484e268bbfb45->leave($__internal_7c8a507d2027130d10464cbc798e9eae172c616d9ed2c78a31e484e268bbfb45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
