<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e3b56f62f810fd44fd6526a9f4c76bdc9b9b86e5728838eba7ba943e824dfb23 extends Twig_Template
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
        $__internal_6fbc797972331b9d52dbdceab2b518456404543ee837820a04721967eb340235 = $this->env->getExtension("native_profiler");
        $__internal_6fbc797972331b9d52dbdceab2b518456404543ee837820a04721967eb340235->enter($__internal_6fbc797972331b9d52dbdceab2b518456404543ee837820a04721967eb340235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6fbc797972331b9d52dbdceab2b518456404543ee837820a04721967eb340235->leave($__internal_6fbc797972331b9d52dbdceab2b518456404543ee837820a04721967eb340235_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
