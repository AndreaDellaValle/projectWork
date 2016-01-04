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
        $__internal_1c48dd3901b0235ec0d3c704ff1f55c24717f619775c0d4d028e98f69aaa9fb8 = $this->env->getExtension("native_profiler");
        $__internal_1c48dd3901b0235ec0d3c704ff1f55c24717f619775c0d4d028e98f69aaa9fb8->enter($__internal_1c48dd3901b0235ec0d3c704ff1f55c24717f619775c0d4d028e98f69aaa9fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout_operatori.html.twig"));

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
<link href=\"\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style_Project_Work2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" charset=\"utf-8\"/>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t</head>
\t<body class=\"body\" onload=\"startTime()\">
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script> 

\t\t
\t\t\t";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "\t\t


\t<div class=\"contenitore_breadcrumb\">
\t<i>breadcrums</i>
\t</div>



\t\t<div class=\"contenitore_menu\">
\t\t\t";
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 31
        echo "\t\t</div>

\t\t<div class=\"contenitore_principale cf\">
\t\t\t";
        // line 34
        $this->displayBlock('contenuti', $context, $blocks);
        // line 37
        echo "\t\t</div>

<div class=\"contenitore_sfondo cf\">

</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->
<!--<script type=\"text/javascript\">
var d = new Date();
document.getElementById(\"dataEora\").innerHTML = d.toString();
</script>-->

<script type=\"text/javascript\">
\$('.apriFinestraDettagliCampagna').on('click', function(evt){
\tevt.preventDefault();
\t\$('#tendina').removeClass('hidden');
\t\$('.body').
});
</script>
\t</body>
</html>";
        
        $__internal_1c48dd3901b0235ec0d3c704ff1f55c24717f619775c0d4d028e98f69aaa9fb8->leave($__internal_1c48dd3901b0235ec0d3c704ff1f55c24717f619775c0d4d028e98f69aaa9fb8_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_57d2a8e58d69fd8f5173bc0d9558ece09c4681ba241b491ca0a8f36096975f16 = $this->env->getExtension("native_profiler");
        $__internal_57d2a8e58d69fd8f5173bc0d9558ece09c4681ba241b491ca0a8f36096975f16->enter($__internal_57d2a8e58d69fd8f5173bc0d9558ece09c4681ba241b491ca0a8f36096975f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout_operatori.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t";
        
        $__internal_57d2a8e58d69fd8f5173bc0d9558ece09c4681ba241b491ca0a8f36096975f16->leave($__internal_57d2a8e58d69fd8f5173bc0d9558ece09c4681ba241b491ca0a8f36096975f16_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3463730cac1240e2f91f1670caf9990f812987a772319ca8b082d3cce1cb1a6 = $this->env->getExtension("native_profiler");
        $__internal_b3463730cac1240e2f91f1670caf9990f812987a772319ca8b082d3cce1cb1a6->enter($__internal_b3463730cac1240e2f91f1670caf9990f812987a772319ca8b082d3cce1cb1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout_operatori.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t";
        
        $__internal_b3463730cac1240e2f91f1670caf9990f812987a772319ca8b082d3cce1cb1a6->leave($__internal_b3463730cac1240e2f91f1670caf9990f812987a772319ca8b082d3cce1cb1a6_prof);

    }

    // line 34
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_175abf4eb5804691b5939e4d29b769adfc7e54f164c56cdb21ccd068072f4c83 = $this->env->getExtension("native_profiler");
        $__internal_175abf4eb5804691b5939e4d29b769adfc7e54f164c56cdb21ccd068072f4c83->enter($__internal_175abf4eb5804691b5939e4d29b769adfc7e54f164c56cdb21ccd068072f4c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 35
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout_operatori.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t";
        
        $__internal_175abf4eb5804691b5939e4d29b769adfc7e54f164c56cdb21ccd068072f4c83->leave($__internal_175abf4eb5804691b5939e4d29b769adfc7e54f164c56cdb21ccd068072f4c83_prof);

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
        return array (  142 => 36,  139 => 35,  133 => 34,  126 => 30,  123 => 29,  117 => 28,  110 => 17,  107 => 16,  101 => 15,  73 => 37,  71 => 34,  66 => 31,  64 => 28,  52 => 18,  50 => 15,  41 => 9,  37 => 8,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/ico">*/
/* <meta charset = "UTF-8">		*/
/* <title>CS Crm</title>*/
/* <link href="">*/
/* <link href="{{ asset('css/style_Project_Work2.css') }}" rel="stylesheet" type="text/css" charset="utf-8"/>*/
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
/* 	<i>breadcrums</i>*/
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
/* <!--<script type="text/javascript">*/
/* var d = new Date();*/
/* document.getElementById("dataEora").innerHTML = d.toString();*/
/* </script>-->*/
/* */
/* <script type="text/javascript">*/
/* $('.apriFinestraDettagliCampagna').on('click', function(evt){*/
/* 	evt.preventDefault();*/
/* 	$('#tendina').removeClass('hidden');*/
/* 	$('.body').*/
/* });*/
/* </script>*/
/* 	</body>*/
/* </html>*/
