<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ee89a42196c7524625636f81dce150dfd765b38dc5551f65245b575ae12521bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acbe9760aa090e7fd0ef289a836b473e0fa50c31a3a8d6399dc7794cbd853910 = $this->env->getExtension("native_profiler");
        $__internal_acbe9760aa090e7fd0ef289a836b473e0fa50c31a3a8d6399dc7794cbd853910->enter($__internal_acbe9760aa090e7fd0ef289a836b473e0fa50c31a3a8d6399dc7794cbd853910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acbe9760aa090e7fd0ef289a836b473e0fa50c31a3a8d6399dc7794cbd853910->leave($__internal_acbe9760aa090e7fd0ef289a836b473e0fa50c31a3a8d6399dc7794cbd853910_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90c9b8bf2b8c09b4c943b522f98ec1ad513ce3f9ae7a58c2287b65b57e0b4b69 = $this->env->getExtension("native_profiler");
        $__internal_90c9b8bf2b8c09b4c943b522f98ec1ad513ce3f9ae7a58c2287b65b57e0b4b69->enter($__internal_90c9b8bf2b8c09b4c943b522f98ec1ad513ce3f9ae7a58c2287b65b57e0b4b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_90c9b8bf2b8c09b4c943b522f98ec1ad513ce3f9ae7a58c2287b65b57e0b4b69->leave($__internal_90c9b8bf2b8c09b4c943b522f98ec1ad513ce3f9ae7a58c2287b65b57e0b4b69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f405e3007d8d938054cd267d7d043b072ec71d564439d57d711065120a6b75d6 = $this->env->getExtension("native_profiler");
        $__internal_f405e3007d8d938054cd267d7d043b072ec71d564439d57d711065120a6b75d6->enter($__internal_f405e3007d8d938054cd267d7d043b072ec71d564439d57d711065120a6b75d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f405e3007d8d938054cd267d7d043b072ec71d564439d57d711065120a6b75d6->leave($__internal_f405e3007d8d938054cd267d7d043b072ec71d564439d57d711065120a6b75d6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_810ec4364a905e4523e7046ca25f8e019e7c470918e2268d93bd76a2a819db9d = $this->env->getExtension("native_profiler");
        $__internal_810ec4364a905e4523e7046ca25f8e019e7c470918e2268d93bd76a2a819db9d->enter($__internal_810ec4364a905e4523e7046ca25f8e019e7c470918e2268d93bd76a2a819db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_810ec4364a905e4523e7046ca25f8e019e7c470918e2268d93bd76a2a819db9d->leave($__internal_810ec4364a905e4523e7046ca25f8e019e7c470918e2268d93bd76a2a819db9d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f559eac2893e469a39e9ab58e3144d8f42e2998f34da6b2e52c8d26f5e3e0bf1 = $this->env->getExtension("native_profiler");
        $__internal_f559eac2893e469a39e9ab58e3144d8f42e2998f34da6b2e52c8d26f5e3e0bf1->enter($__internal_f559eac2893e469a39e9ab58e3144d8f42e2998f34da6b2e52c8d26f5e3e0bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f559eac2893e469a39e9ab58e3144d8f42e2998f34da6b2e52c8d26f5e3e0bf1->leave($__internal_f559eac2893e469a39e9ab58e3144d8f42e2998f34da6b2e52c8d26f5e3e0bf1_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
