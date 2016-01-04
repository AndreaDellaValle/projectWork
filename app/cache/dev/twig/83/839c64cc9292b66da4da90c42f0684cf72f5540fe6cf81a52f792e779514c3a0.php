<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_55126df5a37073bab6308bdd98707adae7def7ced0b3bdab5ab418ec7c9101d7 extends Twig_Template
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
        $__internal_31ca6173b3fb976642bfaaf6fb37e2c69466e2c63a5239dc63c281868eee29fc = $this->env->getExtension("native_profiler");
        $__internal_31ca6173b3fb976642bfaaf6fb37e2c69466e2c63a5239dc63c281868eee29fc->enter($__internal_31ca6173b3fb976642bfaaf6fb37e2c69466e2c63a5239dc63c281868eee29fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_31ca6173b3fb976642bfaaf6fb37e2c69466e2c63a5239dc63c281868eee29fc->leave($__internal_31ca6173b3fb976642bfaaf6fb37e2c69466e2c63a5239dc63c281868eee29fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
