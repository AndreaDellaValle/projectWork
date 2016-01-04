<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a2c49108b882cf2a1870d6b9ce8fad6c3b600c2ebc78fcb7112716ceeccc16c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_b07578dc05b9fb21d23e800f59fce5d32d3f4342087f10ca3795649e8a192d81 = $this->env->getExtension("native_profiler");
        $__internal_b07578dc05b9fb21d23e800f59fce5d32d3f4342087f10ca3795649e8a192d81->enter($__internal_b07578dc05b9fb21d23e800f59fce5d32d3f4342087f10ca3795649e8a192d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07578dc05b9fb21d23e800f59fce5d32d3f4342087f10ca3795649e8a192d81->leave($__internal_b07578dc05b9fb21d23e800f59fce5d32d3f4342087f10ca3795649e8a192d81_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c13bdf8fb5b20aa8f0b5b2b4edf6cf7fd572a2d44077cbf6d0395fbe9b3e4cbf = $this->env->getExtension("native_profiler");
        $__internal_c13bdf8fb5b20aa8f0b5b2b4edf6cf7fd572a2d44077cbf6d0395fbe9b3e4cbf->enter($__internal_c13bdf8fb5b20aa8f0b5b2b4edf6cf7fd572a2d44077cbf6d0395fbe9b3e4cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c13bdf8fb5b20aa8f0b5b2b4edf6cf7fd572a2d44077cbf6d0395fbe9b3e4cbf->leave($__internal_c13bdf8fb5b20aa8f0b5b2b4edf6cf7fd572a2d44077cbf6d0395fbe9b3e4cbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
