<?php

/* AppBundle::layout_operatori.html.twig */
class __TwigTemplate_8ab2ed586b19d332bddba1208740e4ddd494b06a91b61a413807b087c8cc9fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'contenuti' => array($this, 'block_contenuti'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a2d5c6a0e1d35ebe948bc11eaa17276a30a34fc5f913e76748f409f36a030ec = $this->env->getExtension("native_profiler");
        $__internal_1a2d5c6a0e1d35ebe948bc11eaa17276a30a34fc5f913e76748f409f36a030ec->enter($__internal_1a2d5c6a0e1d35ebe948bc11eaa17276a30a34fc5f913e76748f409f36a030ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout_operatori.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/ico\">
<meta charset = \"UTF-8\">\t\t
<title>CS Crm</title>
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style_Project_Work2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" charset=\"utf-8\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t</head>
\t<body class=\"body\" onload=\"startTime()\">
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script> 

\t\t
\t\t\t";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "\t\t


\t<div class=\"contenitore_breadcrumb\">
\t<i><!--breadcrums--></i>
\t</div>



\t\t<div class=\"contenitore_menu\">
\t\t\t";
        // line 27
        $this->displayBlock('menu', $context, $blocks);
        // line 30
        echo "\t\t</div>

\t\t<div class=\"contenitore_principale cf\">
\t\t\t";
        // line 33
        $this->displayBlock('contenuti', $context, $blocks);
        // line 36
        echo "\t\t</div>

<div class=\"contenitore_sfondo cf\">

</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->

<script type=\"text/javascript\">

</script>
\t</body>
</html>";
        
        $__internal_1a2d5c6a0e1d35ebe948bc11eaa17276a30a34fc5f913e76748f409f36a030ec->leave($__internal_1a2d5c6a0e1d35ebe948bc11eaa17276a30a34fc5f913e76748f409f36a030ec_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_ec33f509cf41b3d6ec691b085de3ddac3366d68ec36af16db7b6eb400b897a83 = $this->env->getExtension("native_profiler");
        $__internal_ec33f509cf41b3d6ec691b085de3ddac3366d68ec36af16db7b6eb400b897a83->enter($__internal_ec33f509cf41b3d6ec691b085de3ddac3366d68ec36af16db7b6eb400b897a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout_operatori.html.twig", 15)->display($context);
        // line 16
        echo "\t\t\t";
        
        $__internal_ec33f509cf41b3d6ec691b085de3ddac3366d68ec36af16db7b6eb400b897a83->leave($__internal_ec33f509cf41b3d6ec691b085de3ddac3366d68ec36af16db7b6eb400b897a83_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_661a10e7f04de7912c6b314a79c71b0e398fa975099160f40c34c1caa3198dc2 = $this->env->getExtension("native_profiler");
        $__internal_661a10e7f04de7912c6b314a79c71b0e398fa975099160f40c34c1caa3198dc2->enter($__internal_661a10e7f04de7912c6b314a79c71b0e398fa975099160f40c34c1caa3198dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout_operatori.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t";
        
        $__internal_661a10e7f04de7912c6b314a79c71b0e398fa975099160f40c34c1caa3198dc2->leave($__internal_661a10e7f04de7912c6b314a79c71b0e398fa975099160f40c34c1caa3198dc2_prof);

    }

    // line 33
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_53eb4decd32389f9d08efd5a3bb087e21a604c56e9d6be1680b60059f66bcc0a = $this->env->getExtension("native_profiler");
        $__internal_53eb4decd32389f9d08efd5a3bb087e21a604c56e9d6be1680b60059f66bcc0a->enter($__internal_53eb4decd32389f9d08efd5a3bb087e21a604c56e9d6be1680b60059f66bcc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 34
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout_operatori.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t";
        
        $__internal_53eb4decd32389f9d08efd5a3bb087e21a604c56e9d6be1680b60059f66bcc0a->leave($__internal_53eb4decd32389f9d08efd5a3bb087e21a604c56e9d6be1680b60059f66bcc0a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout_operatori.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  130 => 34,  124 => 33,  117 => 29,  114 => 28,  108 => 27,  101 => 16,  98 => 15,  92 => 14,  72 => 36,  70 => 33,  65 => 30,  63 => 27,  51 => 17,  49 => 14,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/ico">*/
/* <meta charset = "UTF-8">		*/
/* <title>CS Crm</title>*/
/* <link href="{{ asset('css/style_Project_Work2.css') }}" rel="stylesheet" type="text/css" charset="utf-8">*/
/* <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">*/
/* 	</head>*/
/* 	<body class="body" onload="startTime()">*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> */
/* */
/* 		*/
/* 			{% block header %}*/
/* 				{% include 'AppBundle::header.html.twig' %}*/
/* 			{% endblock %}*/
/* 		*/
/* */
/* */
/* 	<div class="contenitore_breadcrumb">*/
/* 	<i><!--breadcrums--></i>*/
/* 	</div>*/
/* */
/* */
/* */
/* 		<div class="contenitore_menu">*/
/* 			{% block menu %}*/
/* 				{% include 'AppBundle::menu.html.twig' %}*/
/* 			{% endblock %}*/
/* 		</div>*/
/* */
/* 		<div class="contenitore_principale cf">*/
/* 			{% block contenuti %}*/
/* 				{% include 'AppBundle::contenuti.html.twig' %}*/
/* 			{% endblock %}*/
/* 		</div>*/
/* */
/* <div class="contenitore_sfondo cf">*/
/* */
/* </div>*/
/* */
/* */
/* <!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->*/
/* */
/* <script type="text/javascript">*/
/* */
/* </script>*/
/* 	</body>*/
/* </html>*/
