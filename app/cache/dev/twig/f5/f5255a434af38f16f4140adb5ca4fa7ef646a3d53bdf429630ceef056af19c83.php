<?php

/* AppBundle::example.html.twig */
class __TwigTemplate_37b5ba87e6b1b13fafb430d842dd94b6bafaaa638e3dbe4cc6cc44ecdd2320c7 extends Twig_Template
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
        $__internal_42754db71c02940dfec1c56a378381834530de534211ee0bc39084462ed26f60 = $this->env->getExtension("native_profiler");
        $__internal_42754db71c02940dfec1c56a378381834530de534211ee0bc39084462ed26f60->enter($__internal_42754db71c02940dfec1c56a378381834530de534211ee0bc39084462ed26f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::example.html.twig"));

        // line 1
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 3
            echo "\t\t<li>Utente ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cognome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "getRoles", array(), "method"), 0, array(), "array"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
        
        $__internal_42754db71c02940dfec1c56a378381834530de534211ee0bc39084462ed26f60->leave($__internal_42754db71c02940dfec1c56a378381834530de534211ee0bc39084462ed26f60_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul>*/
/* 	{% for user in users %}*/
/* 		<li>Utente {{ user.id }}: {{ user.nome }} {{ user.cognome }} {{ user.username }} {{ user.getRoles()[0] }}</li>*/
/* 	{% endfor %}*/
/* </ul>*/
/* */
