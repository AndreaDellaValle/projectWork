<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_032ab2ecfb17669db785b3e0445805e72ea7cd595d14345a1ddd9ea6384a43e8 extends Twig_Template
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
        $__internal_7d7043e2f5dcfe0bacae57f8002e942d68a89bb7adb609bb3e6dd647e7cc497d = $this->env->getExtension("native_profiler");
        $__internal_7d7043e2f5dcfe0bacae57f8002e942d68a89bb7adb609bb3e6dd647e7cc497d->enter($__internal_7d7043e2f5dcfe0bacae57f8002e942d68a89bb7adb609bb3e6dd647e7cc497d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7d7043e2f5dcfe0bacae57f8002e942d68a89bb7adb609bb3e6dd647e7cc497d->leave($__internal_7d7043e2f5dcfe0bacae57f8002e942d68a89bb7adb609bb3e6dd647e7cc497d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
