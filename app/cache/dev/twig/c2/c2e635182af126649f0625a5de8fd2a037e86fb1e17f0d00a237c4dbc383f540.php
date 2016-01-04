<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_8d4f30f172948955e256f86d19ddaa9a39a0ed4a1b8eab783b2b925c5d23e67c extends Twig_Template
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
        $__internal_b37e17c3eafba4619e6cabf539a5ad151fefad298b2ef8a6d43eda85e07f52a2 = $this->env->getExtension("native_profiler");
        $__internal_b37e17c3eafba4619e6cabf539a5ad151fefad298b2ef8a6d43eda85e07f52a2->enter($__internal_b37e17c3eafba4619e6cabf539a5ad151fefad298b2ef8a6d43eda85e07f52a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_b37e17c3eafba4619e6cabf539a5ad151fefad298b2ef8a6d43eda85e07f52a2->leave($__internal_b37e17c3eafba4619e6cabf539a5ad151fefad298b2ef8a6d43eda85e07f52a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
