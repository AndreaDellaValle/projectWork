<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f9b130e50492236e5c32fd2747fb1e971c8815cd1249c40ebce372346fe630b3 extends Twig_Template
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
        $__internal_538c8eee6ca9b795f3205d6246e18c20df720158ae58525db34cd1c4ea905fdf = $this->env->getExtension("native_profiler");
        $__internal_538c8eee6ca9b795f3205d6246e18c20df720158ae58525db34cd1c4ea905fdf->enter($__internal_538c8eee6ca9b795f3205d6246e18c20df720158ae58525db34cd1c4ea905fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_538c8eee6ca9b795f3205d6246e18c20df720158ae58525db34cd1c4ea905fdf->leave($__internal_538c8eee6ca9b795f3205d6246e18c20df720158ae58525db34cd1c4ea905fdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
