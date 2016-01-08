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
        $__internal_8eeb989e854947b725433d1b5f5430ebb0fcaf0908397f92257bb144109e6e13 = $this->env->getExtension("native_profiler");
        $__internal_8eeb989e854947b725433d1b5f5430ebb0fcaf0908397f92257bb144109e6e13->enter($__internal_8eeb989e854947b725433d1b5f5430ebb0fcaf0908397f92257bb144109e6e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout_operatori.html.twig"));

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
        echo "\" rel=\"stylesheet\" type=\"text/css\" charset=\"utf-8\"/>
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
\t<i>breadcrums</i>
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
\$('.apriFinestraDettagliCampagna').on('click', function(evt){
\tevt.preventDefault();
\t\$('#tendina').removeClass('hidden');
\t\$('.body').
});
</script>
\t</body>
</html>";
        
        $__internal_8eeb989e854947b725433d1b5f5430ebb0fcaf0908397f92257bb144109e6e13->leave($__internal_8eeb989e854947b725433d1b5f5430ebb0fcaf0908397f92257bb144109e6e13_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_1bb33a56b0204d3085b5e85500e961895ea0afedf6d3c0ccfb63c3d9daabf98a = $this->env->getExtension("native_profiler");
        $__internal_1bb33a56b0204d3085b5e85500e961895ea0afedf6d3c0ccfb63c3d9daabf98a->enter($__internal_1bb33a56b0204d3085b5e85500e961895ea0afedf6d3c0ccfb63c3d9daabf98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout_operatori.html.twig", 15)->display($context);
        // line 16
        echo "\t\t\t";
        
        $__internal_1bb33a56b0204d3085b5e85500e961895ea0afedf6d3c0ccfb63c3d9daabf98a->leave($__internal_1bb33a56b0204d3085b5e85500e961895ea0afedf6d3c0ccfb63c3d9daabf98a_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6df77452f50758aab9a3ce5603bceaec694ea9eac0cfcf65156df4728686a056 = $this->env->getExtension("native_profiler");
        $__internal_6df77452f50758aab9a3ce5603bceaec694ea9eac0cfcf65156df4728686a056->enter($__internal_6df77452f50758aab9a3ce5603bceaec694ea9eac0cfcf65156df4728686a056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout_operatori.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t";
        
        $__internal_6df77452f50758aab9a3ce5603bceaec694ea9eac0cfcf65156df4728686a056->leave($__internal_6df77452f50758aab9a3ce5603bceaec694ea9eac0cfcf65156df4728686a056_prof);

    }

    // line 33
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_be5dbe6c4a71c60fba4414510aba4276f14b5e128954dea2152843cdbab038b6 = $this->env->getExtension("native_profiler");
        $__internal_be5dbe6c4a71c60fba4414510aba4276f14b5e128954dea2152843cdbab038b6->enter($__internal_be5dbe6c4a71c60fba4414510aba4276f14b5e128954dea2152843cdbab038b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 34
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout_operatori.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t";
        
        $__internal_be5dbe6c4a71c60fba4414510aba4276f14b5e128954dea2152843cdbab038b6->leave($__internal_be5dbe6c4a71c60fba4414510aba4276f14b5e128954dea2152843cdbab038b6_prof);

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
        return array (  137 => 35,  134 => 34,  128 => 33,  121 => 29,  118 => 28,  112 => 27,  105 => 16,  102 => 15,  96 => 14,  72 => 36,  70 => 33,  65 => 30,  63 => 27,  51 => 17,  49 => 14,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/ico">*/
/* <meta charset = "UTF-8">		*/
/* <title>CS Crm</title>*/
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
