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
        $__internal_d3d2c7136a3b891bfd99c94f7677f3e357d61faa7832ef6dde6eb0a356d6d5d1 = $this->env->getExtension("native_profiler");
        $__internal_d3d2c7136a3b891bfd99c94f7677f3e357d61faa7832ef6dde6eb0a356d6d5d1->enter($__internal_d3d2c7136a3b891bfd99c94f7677f3e357d61faa7832ef6dde6eb0a356d6d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        
        $__internal_d3d2c7136a3b891bfd99c94f7677f3e357d61faa7832ef6dde6eb0a356d6d5d1->leave($__internal_d3d2c7136a3b891bfd99c94f7677f3e357d61faa7832ef6dde6eb0a356d6d5d1_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_21c64b336f65d2bf559a4f37cca2c6575d40d964d1d890071928270fd79ed00e = $this->env->getExtension("native_profiler");
        $__internal_21c64b336f65d2bf559a4f37cca2c6575d40d964d1d890071928270fd79ed00e->enter($__internal_21c64b336f65d2bf559a4f37cca2c6575d40d964d1d890071928270fd79ed00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout.html.twig", 16)->display($context);
        // line 17
        echo "\t\t\t";
        
        $__internal_21c64b336f65d2bf559a4f37cca2c6575d40d964d1d890071928270fd79ed00e->leave($__internal_21c64b336f65d2bf559a4f37cca2c6575d40d964d1d890071928270fd79ed00e_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea08c03dcc8f8eb7e4919f5596bdd64161c55e29a49f3e64ce82aaf08ba5a822 = $this->env->getExtension("native_profiler");
        $__internal_ea08c03dcc8f8eb7e4919f5596bdd64161c55e29a49f3e64ce82aaf08ba5a822->enter($__internal_ea08c03dcc8f8eb7e4919f5596bdd64161c55e29a49f3e64ce82aaf08ba5a822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t";
        
        $__internal_ea08c03dcc8f8eb7e4919f5596bdd64161c55e29a49f3e64ce82aaf08ba5a822->leave($__internal_ea08c03dcc8f8eb7e4919f5596bdd64161c55e29a49f3e64ce82aaf08ba5a822_prof);

    }

    // line 34
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_6f73a085e08098af25d446e79ddee2b18901be376ba74c900147881ab18224d6 = $this->env->getExtension("native_profiler");
        $__internal_6f73a085e08098af25d446e79ddee2b18901be376ba74c900147881ab18224d6->enter($__internal_6f73a085e08098af25d446e79ddee2b18901be376ba74c900147881ab18224d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 35
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t";
        
        $__internal_6f73a085e08098af25d446e79ddee2b18901be376ba74c900147881ab18224d6->leave($__internal_6f73a085e08098af25d446e79ddee2b18901be376ba74c900147881ab18224d6_prof);

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
