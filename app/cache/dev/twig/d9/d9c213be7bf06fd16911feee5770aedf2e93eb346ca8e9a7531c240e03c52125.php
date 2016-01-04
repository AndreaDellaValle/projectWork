<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_012077045927a32377246e805cfb68c315d47958d0437ffb043cb199f122d77f extends Twig_Template
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
        $__internal_327acb2ff14b62a6b6921c2ac476939c5161e7ce6d054bf1a9041c59f7f55bd3 = $this->env->getExtension("native_profiler");
        $__internal_327acb2ff14b62a6b6921c2ac476939c5161e7ce6d054bf1a9041c59f7f55bd3->enter($__internal_327acb2ff14b62a6b6921c2ac476939c5161e7ce6d054bf1a9041c59f7f55bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_327acb2ff14b62a6b6921c2ac476939c5161e7ce6d054bf1a9041c59f7f55bd3->leave($__internal_327acb2ff14b62a6b6921c2ac476939c5161e7ce6d054bf1a9041c59f7f55bd3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_group_edit', {'groupName': group_name} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
