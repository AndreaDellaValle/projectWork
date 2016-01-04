<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a1b313c57ed4a68b815b5c0dec0aa7f25ac03fbeddef57f8b1701d3c5d8b00bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19aa9b45e1eb6d342a252ea1efbdf30c4dcbf829de84f46495ff606714ba926c = $this->env->getExtension("native_profiler");
        $__internal_19aa9b45e1eb6d342a252ea1efbdf30c4dcbf829de84f46495ff606714ba926c->enter($__internal_19aa9b45e1eb6d342a252ea1efbdf30c4dcbf829de84f46495ff606714ba926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19aa9b45e1eb6d342a252ea1efbdf30c4dcbf829de84f46495ff606714ba926c->leave($__internal_19aa9b45e1eb6d342a252ea1efbdf30c4dcbf829de84f46495ff606714ba926c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83ec51982dfc50ec5f64cad85bcb242ce2f8f3bedfe76eee5d2c21d407c1cf22 = $this->env->getExtension("native_profiler");
        $__internal_83ec51982dfc50ec5f64cad85bcb242ce2f8f3bedfe76eee5d2c21d407c1cf22->enter($__internal_83ec51982dfc50ec5f64cad85bcb242ce2f8f3bedfe76eee5d2c21d407c1cf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83ec51982dfc50ec5f64cad85bcb242ce2f8f3bedfe76eee5d2c21d407c1cf22->leave($__internal_83ec51982dfc50ec5f64cad85bcb242ce2f8f3bedfe76eee5d2c21d407c1cf22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_391def2401442ca546fc6c86f1bc4ba6847a1bd635b0f8043d1f120dbdbf1f5a = $this->env->getExtension("native_profiler");
        $__internal_391def2401442ca546fc6c86f1bc4ba6847a1bd635b0f8043d1f120dbdbf1f5a->enter($__internal_391def2401442ca546fc6c86f1bc4ba6847a1bd635b0f8043d1f120dbdbf1f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_391def2401442ca546fc6c86f1bc4ba6847a1bd635b0f8043d1f120dbdbf1f5a->leave($__internal_391def2401442ca546fc6c86f1bc4ba6847a1bd635b0f8043d1f120dbdbf1f5a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86965dd4aa68a117f98ae94557f8db5b8e4ce17f7dce9f482999ae1fb763c677 = $this->env->getExtension("native_profiler");
        $__internal_86965dd4aa68a117f98ae94557f8db5b8e4ce17f7dce9f482999ae1fb763c677->enter($__internal_86965dd4aa68a117f98ae94557f8db5b8e4ce17f7dce9f482999ae1fb763c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_86965dd4aa68a117f98ae94557f8db5b8e4ce17f7dce9f482999ae1fb763c677->leave($__internal_86965dd4aa68a117f98ae94557f8db5b8e4ce17f7dce9f482999ae1fb763c677_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
