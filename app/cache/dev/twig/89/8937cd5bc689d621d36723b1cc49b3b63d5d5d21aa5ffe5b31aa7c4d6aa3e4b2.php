<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_c6c504d2d12831c4733a453b53add1931aef548e03d19a2e5c8a792c9f2da090 extends Twig_Template
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
        $__internal_68f4a67bf4e71abcdd14a2359ea181f9e94c389505f8584b976246a360d3832d = $this->env->getExtension("native_profiler");
        $__internal_68f4a67bf4e71abcdd14a2359ea181f9e94c389505f8584b976246a360d3832d->enter($__internal_68f4a67bf4e71abcdd14a2359ea181f9e94c389505f8584b976246a360d3832d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style_Project_Work.css"), "html", null, true);
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
        
        $__internal_68f4a67bf4e71abcdd14a2359ea181f9e94c389505f8584b976246a360d3832d->leave($__internal_68f4a67bf4e71abcdd14a2359ea181f9e94c389505f8584b976246a360d3832d_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_960ca14ab4c7d473b5b68ad4656dcf05e9a8a330e7ed99f27656064ad7b9c494 = $this->env->getExtension("native_profiler");
        $__internal_960ca14ab4c7d473b5b68ad4656dcf05e9a8a330e7ed99f27656064ad7b9c494->enter($__internal_960ca14ab4c7d473b5b68ad4656dcf05e9a8a330e7ed99f27656064ad7b9c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t";
        
        $__internal_960ca14ab4c7d473b5b68ad4656dcf05e9a8a330e7ed99f27656064ad7b9c494->leave($__internal_960ca14ab4c7d473b5b68ad4656dcf05e9a8a330e7ed99f27656064ad7b9c494_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78a1a8515038f305480b5ee52a74db738f65c5fcff0b009eb196f5cd58175659 = $this->env->getExtension("native_profiler");
        $__internal_78a1a8515038f305480b5ee52a74db738f65c5fcff0b009eb196f5cd58175659->enter($__internal_78a1a8515038f305480b5ee52a74db738f65c5fcff0b009eb196f5cd58175659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t";
        
        $__internal_78a1a8515038f305480b5ee52a74db738f65c5fcff0b009eb196f5cd58175659->leave($__internal_78a1a8515038f305480b5ee52a74db738f65c5fcff0b009eb196f5cd58175659_prof);

    }

    // line 34
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_020c3d4c1e2629dbaddb378c20e240cff72a3e2c19030c0aee137f87b1781cb4 = $this->env->getExtension("native_profiler");
        $__internal_020c3d4c1e2629dbaddb378c20e240cff72a3e2c19030c0aee137f87b1781cb4->enter($__internal_020c3d4c1e2629dbaddb378c20e240cff72a3e2c19030c0aee137f87b1781cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 35
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t";
        
        $__internal_020c3d4c1e2629dbaddb378c20e240cff72a3e2c19030c0aee137f87b1781cb4->leave($__internal_020c3d4c1e2629dbaddb378c20e240cff72a3e2c19030c0aee137f87b1781cb4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
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
/* <link href="{{ asset('css/style_Project_Work.css') }}" rel="stylesheet" type="text/css" charset="utf-8"/>*/
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
