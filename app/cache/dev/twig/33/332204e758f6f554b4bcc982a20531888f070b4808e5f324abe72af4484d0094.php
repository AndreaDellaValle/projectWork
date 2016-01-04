<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2a98bf9b45f29ef8099f1ce6419ec9b5ead497e8eee6d083d39c0e5b25d58bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0aa19550f926b63894a8391978caf0a91c34003e12514a805736c02be8dd4346 = $this->env->getExtension("native_profiler");
        $__internal_0aa19550f926b63894a8391978caf0a91c34003e12514a805736c02be8dd4346->enter($__internal_0aa19550f926b63894a8391978caf0a91c34003e12514a805736c02be8dd4346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa19550f926b63894a8391978caf0a91c34003e12514a805736c02be8dd4346->leave($__internal_0aa19550f926b63894a8391978caf0a91c34003e12514a805736c02be8dd4346_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca9e23b14800a1218403701c6d313105a36f8ccfc0873ed1c2ac003fe59223a = $this->env->getExtension("native_profiler");
        $__internal_0ca9e23b14800a1218403701c6d313105a36f8ccfc0873ed1c2ac003fe59223a->enter($__internal_0ca9e23b14800a1218403701c6d313105a36f8ccfc0873ed1c2ac003fe59223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0ca9e23b14800a1218403701c6d313105a36f8ccfc0873ed1c2ac003fe59223a->leave($__internal_0ca9e23b14800a1218403701c6d313105a36f8ccfc0873ed1c2ac003fe59223a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
