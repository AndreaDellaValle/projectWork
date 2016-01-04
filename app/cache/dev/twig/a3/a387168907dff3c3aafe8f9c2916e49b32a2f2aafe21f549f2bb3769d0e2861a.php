<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a53a676d867ccddf62e6d7ea83cda12600cba5777e9fa1b342cbc215250d93f3 extends Twig_Template
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
        $__internal_39f256c268f7959f3ea1d96cece74dd654d82ec0c9ee0473cd1221d30fa9481b = $this->env->getExtension("native_profiler");
        $__internal_39f256c268f7959f3ea1d96cece74dd654d82ec0c9ee0473cd1221d30fa9481b->enter($__internal_39f256c268f7959f3ea1d96cece74dd654d82ec0c9ee0473cd1221d30fa9481b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_39f256c268f7959f3ea1d96cece74dd654d82ec0c9ee0473cd1221d30fa9481b->leave($__internal_39f256c268f7959f3ea1d96cece74dd654d82ec0c9ee0473cd1221d30fa9481b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
