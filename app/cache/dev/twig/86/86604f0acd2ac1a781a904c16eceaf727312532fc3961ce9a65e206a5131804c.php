<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8c6c928411be7f5d79e688d69b6774913950d4236d995a8fe1672ea50575a04c extends Twig_Template
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
        $__internal_d440e3bfcdb3a379e32d8d9a5511091885c8438d11d4ee35a6a196871b6a184a = $this->env->getExtension("native_profiler");
        $__internal_d440e3bfcdb3a379e32d8d9a5511091885c8438d11d4ee35a6a196871b6a184a->enter($__internal_d440e3bfcdb3a379e32d8d9a5511091885c8438d11d4ee35a6a196871b6a184a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d440e3bfcdb3a379e32d8d9a5511091885c8438d11d4ee35a6a196871b6a184a->leave($__internal_d440e3bfcdb3a379e32d8d9a5511091885c8438d11d4ee35a6a196871b6a184a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
