<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_1e9ee498b78cf6d57804915cbdb7c4d0fd1b0734b78b7f34b93f255410aeea69 extends Twig_Template
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
        $__internal_9fc3610e957fe05c3d3d17c18f90bf03711e7cb4573684b8c3c0cff2fa1ef77f = $this->env->getExtension("native_profiler");
        $__internal_9fc3610e957fe05c3d3d17c18f90bf03711e7cb4573684b8c3c0cff2fa1ef77f->enter($__internal_9fc3610e957fe05c3d3d17c18f90bf03711e7cb4573684b8c3c0cff2fa1ef77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9fc3610e957fe05c3d3d17c18f90bf03711e7cb4573684b8c3c0cff2fa1ef77f->leave($__internal_9fc3610e957fe05c3d3d17c18f90bf03711e7cb4573684b8c3c0cff2fa1ef77f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
