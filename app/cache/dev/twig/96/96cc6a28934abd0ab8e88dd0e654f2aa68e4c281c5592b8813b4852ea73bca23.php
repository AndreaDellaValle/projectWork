<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_819076bafe69fb3c6bc04a94f73f972c0d972b558f6a22385d53073767046d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a519babb7d1f04a8c75d8a76b1f46f3c3871e9acfd46abb0cd4b7256c5c1e8ee = $this->env->getExtension("native_profiler");
        $__internal_a519babb7d1f04a8c75d8a76b1f46f3c3871e9acfd46abb0cd4b7256c5c1e8ee->enter($__internal_a519babb7d1f04a8c75d8a76b1f46f3c3871e9acfd46abb0cd4b7256c5c1e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a519babb7d1f04a8c75d8a76b1f46f3c3871e9acfd46abb0cd4b7256c5c1e8ee->leave($__internal_a519babb7d1f04a8c75d8a76b1f46f3c3871e9acfd46abb0cd4b7256c5c1e8ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fec87a6cd3e306fe6fdf7495aaf4feb19eed36842784d75c468eb17b7ec3d01e = $this->env->getExtension("native_profiler");
        $__internal_fec87a6cd3e306fe6fdf7495aaf4feb19eed36842784d75c468eb17b7ec3d01e->enter($__internal_fec87a6cd3e306fe6fdf7495aaf4feb19eed36842784d75c468eb17b7ec3d01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fec87a6cd3e306fe6fdf7495aaf4feb19eed36842784d75c468eb17b7ec3d01e->leave($__internal_fec87a6cd3e306fe6fdf7495aaf4feb19eed36842784d75c468eb17b7ec3d01e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
