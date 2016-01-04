<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_43e96542462a931dc1f9b9cdb4096bfe29883edcebf326e667693e151f0e008e extends Twig_Template
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
        $__internal_f57f9236dec3f0184a3426aadf04b6d4ac9a6a792c4ee878e7bb8aa19828f986 = $this->env->getExtension("native_profiler");
        $__internal_f57f9236dec3f0184a3426aadf04b6d4ac9a6a792c4ee878e7bb8aa19828f986->enter($__internal_f57f9236dec3f0184a3426aadf04b6d4ac9a6a792c4ee878e7bb8aa19828f986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f57f9236dec3f0184a3426aadf04b6d4ac9a6a792c4ee878e7bb8aa19828f986->leave($__internal_f57f9236dec3f0184a3426aadf04b6d4ac9a6a792c4ee878e7bb8aa19828f986_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
