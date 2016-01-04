<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3791fb55722d04a462df3f87d5a20de1e8f2689dd7e84bae65063c99f6868be3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_42369113f57c633af43a71aa8bba3efd5ca634e6de954e5169060e632ecb1b50 = $this->env->getExtension("native_profiler");
        $__internal_42369113f57c633af43a71aa8bba3efd5ca634e6de954e5169060e632ecb1b50->enter($__internal_42369113f57c633af43a71aa8bba3efd5ca634e6de954e5169060e632ecb1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42369113f57c633af43a71aa8bba3efd5ca634e6de954e5169060e632ecb1b50->leave($__internal_42369113f57c633af43a71aa8bba3efd5ca634e6de954e5169060e632ecb1b50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_227c8deadda935aafadaac7566c07d6c3bb93a768d608a915b1a4ef033290d90 = $this->env->getExtension("native_profiler");
        $__internal_227c8deadda935aafadaac7566c07d6c3bb93a768d608a915b1a4ef033290d90->enter($__internal_227c8deadda935aafadaac7566c07d6c3bb93a768d608a915b1a4ef033290d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_227c8deadda935aafadaac7566c07d6c3bb93a768d608a915b1a4ef033290d90->leave($__internal_227c8deadda935aafadaac7566c07d6c3bb93a768d608a915b1a4ef033290d90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c7e753a60312a9725a41030b850171468926892391232bc4ebbb414a0ca96c4 = $this->env->getExtension("native_profiler");
        $__internal_1c7e753a60312a9725a41030b850171468926892391232bc4ebbb414a0ca96c4->enter($__internal_1c7e753a60312a9725a41030b850171468926892391232bc4ebbb414a0ca96c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1c7e753a60312a9725a41030b850171468926892391232bc4ebbb414a0ca96c4->leave($__internal_1c7e753a60312a9725a41030b850171468926892391232bc4ebbb414a0ca96c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
