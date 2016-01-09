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
        $__internal_2c39fd87a4add89e86df84b642f928eee712c5d1065ceaa5a8441fb716dc68b6 = $this->env->getExtension("native_profiler");
        $__internal_2c39fd87a4add89e86df84b642f928eee712c5d1065ceaa5a8441fb716dc68b6->enter($__internal_2c39fd87a4add89e86df84b642f928eee712c5d1065ceaa5a8441fb716dc68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c39fd87a4add89e86df84b642f928eee712c5d1065ceaa5a8441fb716dc68b6->leave($__internal_2c39fd87a4add89e86df84b642f928eee712c5d1065ceaa5a8441fb716dc68b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74a5ab8a08869dc34b5ef92bd364cb2f061cb35c8ceb401ec921e20e51ab3df3 = $this->env->getExtension("native_profiler");
        $__internal_74a5ab8a08869dc34b5ef92bd364cb2f061cb35c8ceb401ec921e20e51ab3df3->enter($__internal_74a5ab8a08869dc34b5ef92bd364cb2f061cb35c8ceb401ec921e20e51ab3df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_74a5ab8a08869dc34b5ef92bd364cb2f061cb35c8ceb401ec921e20e51ab3df3->leave($__internal_74a5ab8a08869dc34b5ef92bd364cb2f061cb35c8ceb401ec921e20e51ab3df3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef0024e595fc536e0230d2542cb5cc91f1012b94f490ffa9d2085426cb1f6b62 = $this->env->getExtension("native_profiler");
        $__internal_ef0024e595fc536e0230d2542cb5cc91f1012b94f490ffa9d2085426cb1f6b62->enter($__internal_ef0024e595fc536e0230d2542cb5cc91f1012b94f490ffa9d2085426cb1f6b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef0024e595fc536e0230d2542cb5cc91f1012b94f490ffa9d2085426cb1f6b62->leave($__internal_ef0024e595fc536e0230d2542cb5cc91f1012b94f490ffa9d2085426cb1f6b62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97bbb7a999d7779ab73d0b24c285b0e8d04a6158e56f0b89fc5e784740c6417 = $this->env->getExtension("native_profiler");
        $__internal_e97bbb7a999d7779ab73d0b24c285b0e8d04a6158e56f0b89fc5e784740c6417->enter($__internal_e97bbb7a999d7779ab73d0b24c285b0e8d04a6158e56f0b89fc5e784740c6417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e97bbb7a999d7779ab73d0b24c285b0e8d04a6158e56f0b89fc5e784740c6417->leave($__internal_e97bbb7a999d7779ab73d0b24c285b0e8d04a6158e56f0b89fc5e784740c6417_prof);

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
