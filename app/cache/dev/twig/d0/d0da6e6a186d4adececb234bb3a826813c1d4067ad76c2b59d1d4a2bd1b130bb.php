<?php

/* AppBundle::user.html.twig */
class __TwigTemplate_9da814fba0d2165e1f993ae56a636a38ad679a43d41867b00cb766b5338f429f extends Twig_Template
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
        $__internal_3df0f694d2208b86c5cfc767ec8972c0104e8a7f138f0859b742ac90269378c2 = $this->env->getExtension("native_profiler");
        $__internal_3df0f694d2208b86c5cfc767ec8972c0104e8a7f138f0859b742ac90269378c2->enter($__internal_3df0f694d2208b86c5cfc767ec8972c0104e8a7f138f0859b742ac90269378c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>User ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</title>
</head>
\t<body>
\t<h1>Username ";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username"))), "html", null, true);
        echo "</h1>
\t</body>
</html>";
        
        $__internal_3df0f694d2208b86c5cfc767ec8972c0104e8a7f138f0859b742ac90269378c2->leave($__internal_3df0f694d2208b86c5cfc767ec8972c0104e8a7f138f0859b742ac90269378c2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>User {{ username }}</title>*/
/* </head>*/
/* 	<body>*/
/* 	<h1>Username {{ username|upper }}</h1>*/
/* 	</body>*/
/* </html>*/
