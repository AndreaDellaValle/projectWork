<?php

/* ::base.html.twig */
class __TwigTemplate_80a08024e10c1ca995090478dab929a9644f175200765e6e01b419dfdd152bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ae691c1f805deed7d7208417f0fc768048f8bbba380d3e8d4d7a8192dd8a93 = $this->env->getExtension("native_profiler");
        $__internal_86ae691c1f805deed7d7208417f0fc768048f8bbba380d3e8d4d7a8192dd8a93->enter($__internal_86ae691c1f805deed7d7208417f0fc768048f8bbba380d3e8d4d7a8192dd8a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_86ae691c1f805deed7d7208417f0fc768048f8bbba380d3e8d4d7a8192dd8a93->leave($__internal_86ae691c1f805deed7d7208417f0fc768048f8bbba380d3e8d4d7a8192dd8a93_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf58559ffaf56f59be25280fbb6c2ed514f76863f65bf1fef66d7e66fe85ea7 = $this->env->getExtension("native_profiler");
        $__internal_7cf58559ffaf56f59be25280fbb6c2ed514f76863f65bf1fef66d7e66fe85ea7->enter($__internal_7cf58559ffaf56f59be25280fbb6c2ed514f76863f65bf1fef66d7e66fe85ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7cf58559ffaf56f59be25280fbb6c2ed514f76863f65bf1fef66d7e66fe85ea7->leave($__internal_7cf58559ffaf56f59be25280fbb6c2ed514f76863f65bf1fef66d7e66fe85ea7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_135e282d0592b04a8a3942c5b7dc307b696236cd7ddacf74955d6c225fe45dc0 = $this->env->getExtension("native_profiler");
        $__internal_135e282d0592b04a8a3942c5b7dc307b696236cd7ddacf74955d6c225fe45dc0->enter($__internal_135e282d0592b04a8a3942c5b7dc307b696236cd7ddacf74955d6c225fe45dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_135e282d0592b04a8a3942c5b7dc307b696236cd7ddacf74955d6c225fe45dc0->leave($__internal_135e282d0592b04a8a3942c5b7dc307b696236cd7ddacf74955d6c225fe45dc0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d41be886eab727aa633453577d3e745cc02bbeade53c38fb6efc7bc8b1275acb = $this->env->getExtension("native_profiler");
        $__internal_d41be886eab727aa633453577d3e745cc02bbeade53c38fb6efc7bc8b1275acb->enter($__internal_d41be886eab727aa633453577d3e745cc02bbeade53c38fb6efc7bc8b1275acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d41be886eab727aa633453577d3e745cc02bbeade53c38fb6efc7bc8b1275acb->leave($__internal_d41be886eab727aa633453577d3e745cc02bbeade53c38fb6efc7bc8b1275acb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_993923d9674b4ba506589eaa9eb354120dd11f0715753f05d2223178a80ae5ad = $this->env->getExtension("native_profiler");
        $__internal_993923d9674b4ba506589eaa9eb354120dd11f0715753f05d2223178a80ae5ad->enter($__internal_993923d9674b4ba506589eaa9eb354120dd11f0715753f05d2223178a80ae5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_993923d9674b4ba506589eaa9eb354120dd11f0715753f05d2223178a80ae5ad->leave($__internal_993923d9674b4ba506589eaa9eb354120dd11f0715753f05d2223178a80ae5ad_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
