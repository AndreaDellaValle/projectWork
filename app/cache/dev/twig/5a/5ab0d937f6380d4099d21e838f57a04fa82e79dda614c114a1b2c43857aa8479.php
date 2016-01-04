<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_697ff9c310be60f1e1f6338e02fb541954c94471cb85e82931a0fb53b48ff438 extends Twig_Template
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
        $__internal_f35538e3f013a53f0e762572a2d4c6e9006ceb120add810f921444ef67c31f1b = $this->env->getExtension("native_profiler");
        $__internal_f35538e3f013a53f0e762572a2d4c6e9006ceb120add810f921444ef67c31f1b->enter($__internal_f35538e3f013a53f0e762572a2d4c6e9006ceb120add810f921444ef67c31f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f35538e3f013a53f0e762572a2d4c6e9006ceb120add810f921444ef67c31f1b->leave($__internal_f35538e3f013a53f0e762572a2d4c6e9006ceb120add810f921444ef67c31f1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
