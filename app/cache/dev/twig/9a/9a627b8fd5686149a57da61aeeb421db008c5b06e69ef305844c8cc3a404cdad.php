<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8de438181de0d6e631c7b436938a77d18d73127c8514987a982eddc408077862 extends Twig_Template
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
        $__internal_dba8de7aad30eb0ac20d27183e5207863c197446eb06fdf7fe7a2c7f6e627e96 = $this->env->getExtension("native_profiler");
        $__internal_dba8de7aad30eb0ac20d27183e5207863c197446eb06fdf7fe7a2c7f6e627e96->enter($__internal_dba8de7aad30eb0ac20d27183e5207863c197446eb06fdf7fe7a2c7f6e627e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_dba8de7aad30eb0ac20d27183e5207863c197446eb06fdf7fe7a2c7f6e627e96->leave($__internal_dba8de7aad30eb0ac20d27183e5207863c197446eb06fdf7fe7a2c7f6e627e96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
