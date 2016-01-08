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
        $__internal_d3dd235756a9dcc680642052420e2f6544c2b6394c722044a56a2244143d0bee = $this->env->getExtension("native_profiler");
        $__internal_d3dd235756a9dcc680642052420e2f6544c2b6394c722044a56a2244143d0bee->enter($__internal_d3dd235756a9dcc680642052420e2f6544c2b6394c722044a56a2244143d0bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3dd235756a9dcc680642052420e2f6544c2b6394c722044a56a2244143d0bee->leave($__internal_d3dd235756a9dcc680642052420e2f6544c2b6394c722044a56a2244143d0bee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf81ac1d381a3917a58325b7c23bb199727e3f4d942e1700524af611e68a4782 = $this->env->getExtension("native_profiler");
        $__internal_bf81ac1d381a3917a58325b7c23bb199727e3f4d942e1700524af611e68a4782->enter($__internal_bf81ac1d381a3917a58325b7c23bb199727e3f4d942e1700524af611e68a4782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bf81ac1d381a3917a58325b7c23bb199727e3f4d942e1700524af611e68a4782->leave($__internal_bf81ac1d381a3917a58325b7c23bb199727e3f4d942e1700524af611e68a4782_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a696dca91c20de79aefbbc14a4c83c77b3e5ca958a2bba3e9fdaf1ae0d4115 = $this->env->getExtension("native_profiler");
        $__internal_06a696dca91c20de79aefbbc14a4c83c77b3e5ca958a2bba3e9fdaf1ae0d4115->enter($__internal_06a696dca91c20de79aefbbc14a4c83c77b3e5ca958a2bba3e9fdaf1ae0d4115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_06a696dca91c20de79aefbbc14a4c83c77b3e5ca958a2bba3e9fdaf1ae0d4115->leave($__internal_06a696dca91c20de79aefbbc14a4c83c77b3e5ca958a2bba3e9fdaf1ae0d4115_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15d6fe38e7ebf6df1d4f7887030ddbed461bbfa8eddd2786cc72d2484af2b2f9 = $this->env->getExtension("native_profiler");
        $__internal_15d6fe38e7ebf6df1d4f7887030ddbed461bbfa8eddd2786cc72d2484af2b2f9->enter($__internal_15d6fe38e7ebf6df1d4f7887030ddbed461bbfa8eddd2786cc72d2484af2b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_15d6fe38e7ebf6df1d4f7887030ddbed461bbfa8eddd2786cc72d2484af2b2f9->leave($__internal_15d6fe38e7ebf6df1d4f7887030ddbed461bbfa8eddd2786cc72d2484af2b2f9_prof);

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
