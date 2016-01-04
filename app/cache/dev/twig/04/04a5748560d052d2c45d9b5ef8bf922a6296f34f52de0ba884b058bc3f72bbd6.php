<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_988fc522ceef3e4f54bb37b914d1ca2dc8725ef290f147785565c3158eb12310 extends Twig_Template
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
        $__internal_29355c05a608eebcf08182e80a104204fb20b9fb43146767e48f4587ff5490ef = $this->env->getExtension("native_profiler");
        $__internal_29355c05a608eebcf08182e80a104204fb20b9fb43146767e48f4587ff5490ef->enter($__internal_29355c05a608eebcf08182e80a104204fb20b9fb43146767e48f4587ff5490ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_29355c05a608eebcf08182e80a104204fb20b9fb43146767e48f4587ff5490ef->leave($__internal_29355c05a608eebcf08182e80a104204fb20b9fb43146767e48f4587ff5490ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6612b37e7d0f96d4238fc5d60a0e1018da0ab2b53568591d698c6849c986a801 = $this->env->getExtension("native_profiler");
        $__internal_6612b37e7d0f96d4238fc5d60a0e1018da0ab2b53568591d698c6849c986a801->enter($__internal_6612b37e7d0f96d4238fc5d60a0e1018da0ab2b53568591d698c6849c986a801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6612b37e7d0f96d4238fc5d60a0e1018da0ab2b53568591d698c6849c986a801->leave($__internal_6612b37e7d0f96d4238fc5d60a0e1018da0ab2b53568591d698c6849c986a801_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fb9d2a339ee47eb58efb5bb853992f12dc243e3fff5d50f4734462a902a8c5a7 = $this->env->getExtension("native_profiler");
        $__internal_fb9d2a339ee47eb58efb5bb853992f12dc243e3fff5d50f4734462a902a8c5a7->enter($__internal_fb9d2a339ee47eb58efb5bb853992f12dc243e3fff5d50f4734462a902a8c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fb9d2a339ee47eb58efb5bb853992f12dc243e3fff5d50f4734462a902a8c5a7->leave($__internal_fb9d2a339ee47eb58efb5bb853992f12dc243e3fff5d50f4734462a902a8c5a7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df8eeb299109d267a9b882b207c563385ec868e791ca9145589720eab0f478bc = $this->env->getExtension("native_profiler");
        $__internal_df8eeb299109d267a9b882b207c563385ec868e791ca9145589720eab0f478bc->enter($__internal_df8eeb299109d267a9b882b207c563385ec868e791ca9145589720eab0f478bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df8eeb299109d267a9b882b207c563385ec868e791ca9145589720eab0f478bc->leave($__internal_df8eeb299109d267a9b882b207c563385ec868e791ca9145589720eab0f478bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
