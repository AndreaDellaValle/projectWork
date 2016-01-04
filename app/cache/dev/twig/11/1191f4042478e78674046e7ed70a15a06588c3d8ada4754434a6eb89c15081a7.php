<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2abadc7e4298c7d98645a8d3c8744b3632cfbd907c1a4ebb8a646d6d19e011d9 extends Twig_Template
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
        $__internal_b7d26be5abec3c6907becbc5e78b3236d55f2678a99a1b482faeef6d475830db = $this->env->getExtension("native_profiler");
        $__internal_b7d26be5abec3c6907becbc5e78b3236d55f2678a99a1b482faeef6d475830db->enter($__internal_b7d26be5abec3c6907becbc5e78b3236d55f2678a99a1b482faeef6d475830db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7d26be5abec3c6907becbc5e78b3236d55f2678a99a1b482faeef6d475830db->leave($__internal_b7d26be5abec3c6907becbc5e78b3236d55f2678a99a1b482faeef6d475830db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
