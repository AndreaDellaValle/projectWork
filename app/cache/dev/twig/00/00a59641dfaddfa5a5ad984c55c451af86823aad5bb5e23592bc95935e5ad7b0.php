<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_32a6435d368040624601de9a744fc7e613456bb63c2f64baf7d46b25afa66c41 extends Twig_Template
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
        $__internal_e6b937b826882e6a1dbe49d82fb93d831a22901cb0de56c7ca85677e3c38efe6 = $this->env->getExtension("native_profiler");
        $__internal_e6b937b826882e6a1dbe49d82fb93d831a22901cb0de56c7ca85677e3c38efe6->enter($__internal_e6b937b826882e6a1dbe49d82fb93d831a22901cb0de56c7ca85677e3c38efe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e6b937b826882e6a1dbe49d82fb93d831a22901cb0de56c7ca85677e3c38efe6->leave($__internal_e6b937b826882e6a1dbe49d82fb93d831a22901cb0de56c7ca85677e3c38efe6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
