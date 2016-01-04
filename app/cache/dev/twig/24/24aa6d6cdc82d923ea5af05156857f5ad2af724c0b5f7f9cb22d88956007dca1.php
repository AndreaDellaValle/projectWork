<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2204d1360226936669ad8e379c317b7add2cd2667b1468e912bbb71bfa923808 extends Twig_Template
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
        $__internal_75a740e8f4f837a70bac70dcc068fbbd0f3debdce5fd00c19e52bffd168645c4 = $this->env->getExtension("native_profiler");
        $__internal_75a740e8f4f837a70bac70dcc068fbbd0f3debdce5fd00c19e52bffd168645c4->enter($__internal_75a740e8f4f837a70bac70dcc068fbbd0f3debdce5fd00c19e52bffd168645c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_75a740e8f4f837a70bac70dcc068fbbd0f3debdce5fd00c19e52bffd168645c4->leave($__internal_75a740e8f4f837a70bac70dcc068fbbd0f3debdce5fd00c19e52bffd168645c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
