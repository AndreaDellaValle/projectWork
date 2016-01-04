<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e22474145190700796b1304d793a30f5412e7374da5fdca1a442a0fb927e9e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b049fef6170013e18542fe0971ab534309f7335b9f864e8078817ca714e5f2 = $this->env->getExtension("native_profiler");
        $__internal_b1b049fef6170013e18542fe0971ab534309f7335b9f864e8078817ca714e5f2->enter($__internal_b1b049fef6170013e18542fe0971ab534309f7335b9f864e8078817ca714e5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b1b049fef6170013e18542fe0971ab534309f7335b9f864e8078817ca714e5f2->leave($__internal_b1b049fef6170013e18542fe0971ab534309f7335b9f864e8078817ca714e5f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
