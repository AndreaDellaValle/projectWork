<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fbc4e317b73e95478d723eeeae11de2eda978643ecc0f9689f6ac414784d6d00 extends Twig_Template
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
        $__internal_7a79f6c36514d1b4b45713497d701f2d6c68431fb0409eb681e3c6c560d40958 = $this->env->getExtension("native_profiler");
        $__internal_7a79f6c36514d1b4b45713497d701f2d6c68431fb0409eb681e3c6c560d40958->enter($__internal_7a79f6c36514d1b4b45713497d701f2d6c68431fb0409eb681e3c6c560d40958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<link href=\"/assets/icons/favicon.ico\" rel=\"icon\" type=\"image/ico\">
<meta charset = \"UTF-8\">\t\t
<title>CS Crm</title>

<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style_Project_Work.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" charset=\"utf-8\"/>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t</head>
\t<body class=\"body\">

\t\t
\t\t<div class=\"contenitore_header_login cf\">
\t\t\t<b>CS Crm - LOGIN</b>
\t\t\t\t\t<div class=\"contenuti_login\">

\t\t\t\t\t\t\t";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "\t\t\t\t\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 21
        echo "
\t\t\t\t\t\t\t<form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t\t\t    <label for=\"username\"></label>
\t\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("inserisci username"), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t\t\t    <label for=\"password\"></label>
\t\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("inserisci password"), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t\t\t    <input class=\"send_login\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("login")), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t


\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 38
            echo "\t\t\t\t\t\t<div class='flash-notice'>
\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["flash_message"]), "html", null, true);
            echo "
\t\t\t\t\t\t</div class='flash-notice'>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t\t\t\t\t\t\t\t
\t\t\t\t<!--
\t\t\t\t<a href=\"/PROJECTWORK/Admin_campagne.html\"><button type=\"submit\" name=\"annulla_campagna\" value=\"annulla\">_____annulla______</button></a>-->
\t\t\t\t<!--<a href=\"/PROJECTWORK/Admin_index.html\"><button type=\"submit\" name=\"login\" value=\"avanti\">LOGIN</button></a>
\t\t--></div>




<div class=\"contenitore_sfondo_pp\">\t


</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->
\t</body>
</html>";
        
        $__internal_7a79f6c36514d1b4b45713497d701f2d6c68431fb0409eb681e3c6c560d40958->leave($__internal_7a79f6c36514d1b4b45713497d701f2d6c68431fb0409eb681e3c6c560d40958_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  97 => 39,  94 => 38,  90 => 37,  81 => 31,  76 => 29,  68 => 26,  62 => 23,  58 => 22,  55 => 21,  49 => 19,  47 => 18,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<link href="/assets/icons/favicon.ico" rel="icon" type="image/ico">*/
/* <meta charset = "UTF-8">		*/
/* <title>CS Crm</title>*/
/* */
/* <link href="{{ asset('css/style_Project_Work.css') }}" rel="stylesheet" type="text/css" charset="utf-8"/>*/
/* <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">*/
/* 	</head>*/
/* 	<body class="body">*/
/* */
/* 		*/
/* 		<div class="contenitore_header_login cf">*/
/* 			<b>CS Crm - LOGIN</b>*/
/* 					<div class="contenuti_login">*/
/* */
/* 							{% if error %}*/
/* 							    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* 							{% endif %}*/
/* */
/* 							<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 							    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 							    <label for="username"></label>*/
/* 							    <input type="text" id="username" name="_username" value="{{ last_username }}" placeholder="{{ 'inserisci username'|trans }}" required="required" />*/
/* */
/* 							    <label for="password"></label>*/
/* 							    <input type="password" id="password" name="_password" placeholder="{{ 'inserisci password'|trans }}" required="required" />*/
/* */
/* 							    <input class="send_login" type="submit" id="_submit" name="_submit" value="{{ 'login'|trans|upper }}" />*/
/* 							</form>*/
/* 							*/
/* */
/* */
/* 							</div>*/
/* 					{% for flash_message in app.session.flashbag.get('notice') %}*/
/* 						<div class='flash-notice'>*/
/* 							{{ flash_message|upper }}*/
/* 						</div class='flash-notice'>*/
/* 					{% endfor %}*/
/* */
/* 									*/
/* 				<!--*/
/* 				<a href="/PROJECTWORK/Admin_campagne.html"><button type="submit" name="annulla_campagna" value="annulla">_____annulla______</button></a>-->*/
/* 				<!--<a href="/PROJECTWORK/Admin_index.html"><button type="submit" name="login" value="avanti">LOGIN</button></a>*/
/* 		--></div>*/
/* */
/* */
/* */
/* */
/* <div class="contenitore_sfondo_pp">	*/
/* */
/* */
/* </div>*/
/* */
/* */
/* <!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->*/
/* 	</body>*/
/* </html>*/
