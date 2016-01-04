<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_74a22625b8494587fa602a2b78b44a16dd095126244c9a5bab58f6c652b37cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4330cefc39ca10c307386570aa3e14369e2fb2de5938bfcad34f9feaf040d63 = $this->env->getExtension("native_profiler");
        $__internal_a4330cefc39ca10c307386570aa3e14369e2fb2de5938bfcad34f9feaf040d63->enter($__internal_a4330cefc39ca10c307386570aa3e14369e2fb2de5938bfcad34f9feaf040d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4330cefc39ca10c307386570aa3e14369e2fb2de5938bfcad34f9feaf040d63->leave($__internal_a4330cefc39ca10c307386570aa3e14369e2fb2de5938bfcad34f9feaf040d63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192fe57798494faa0ab7d0b4d5004089259b24af36c1089c338db76bdd4f83cf = $this->env->getExtension("native_profiler");
        $__internal_192fe57798494faa0ab7d0b4d5004089259b24af36c1089c338db76bdd4f83cf->enter($__internal_192fe57798494faa0ab7d0b4d5004089259b24af36c1089c338db76bdd4f83cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_192fe57798494faa0ab7d0b4d5004089259b24af36c1089c338db76bdd4f83cf->leave($__internal_192fe57798494faa0ab7d0b4d5004089259b24af36c1089c338db76bdd4f83cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
