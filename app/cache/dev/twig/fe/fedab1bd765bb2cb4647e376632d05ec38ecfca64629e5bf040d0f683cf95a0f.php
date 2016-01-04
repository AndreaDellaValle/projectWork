<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8cc6f9b8d478a5fe626dcda174623f6beeb792d464ef3250b19bdd6900f67905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afd1ca3de7a72f71700f00047dab594b32f1de7c989463d6215f52b97e2c1d3d = $this->env->getExtension("native_profiler");
        $__internal_afd1ca3de7a72f71700f00047dab594b32f1de7c989463d6215f52b97e2c1d3d->enter($__internal_afd1ca3de7a72f71700f00047dab594b32f1de7c989463d6215f52b97e2c1d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_afd1ca3de7a72f71700f00047dab594b32f1de7c989463d6215f52b97e2c1d3d->leave($__internal_afd1ca3de7a72f71700f00047dab594b32f1de7c989463d6215f52b97e2c1d3d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e393a75d942f6e47f758b1d6100206b79a0b842e1009efaf04fbe7d79534e87a = $this->env->getExtension("native_profiler");
        $__internal_e393a75d942f6e47f758b1d6100206b79a0b842e1009efaf04fbe7d79534e87a->enter($__internal_e393a75d942f6e47f758b1d6100206b79a0b842e1009efaf04fbe7d79534e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e393a75d942f6e47f758b1d6100206b79a0b842e1009efaf04fbe7d79534e87a->leave($__internal_e393a75d942f6e47f758b1d6100206b79a0b842e1009efaf04fbe7d79534e87a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9bc21d46f6a3c7932b7f7fbd11273d97aad11d8c0cba4700c24b46a3fd9c9cef = $this->env->getExtension("native_profiler");
        $__internal_9bc21d46f6a3c7932b7f7fbd11273d97aad11d8c0cba4700c24b46a3fd9c9cef->enter($__internal_9bc21d46f6a3c7932b7f7fbd11273d97aad11d8c0cba4700c24b46a3fd9c9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9bc21d46f6a3c7932b7f7fbd11273d97aad11d8c0cba4700c24b46a3fd9c9cef->leave($__internal_9bc21d46f6a3c7932b7f7fbd11273d97aad11d8c0cba4700c24b46a3fd9c9cef_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_04886392c86848e1fc283faa53b1c5e3a338bf5e0fcd666df8901dab6b6d8ad2 = $this->env->getExtension("native_profiler");
        $__internal_04886392c86848e1fc283faa53b1c5e3a338bf5e0fcd666df8901dab6b6d8ad2->enter($__internal_04886392c86848e1fc283faa53b1c5e3a338bf5e0fcd666df8901dab6b6d8ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_04886392c86848e1fc283faa53b1c5e3a338bf5e0fcd666df8901dab6b6d8ad2->leave($__internal_04886392c86848e1fc283faa53b1c5e3a338bf5e0fcd666df8901dab6b6d8ad2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
