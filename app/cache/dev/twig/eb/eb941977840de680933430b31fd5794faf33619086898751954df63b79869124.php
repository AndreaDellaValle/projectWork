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
        $__internal_c92ca37ec6567c787c4e5e1cc81a5cb7f10d0d1023c7f2a705ebd12320dce0ce = $this->env->getExtension("native_profiler");
        $__internal_c92ca37ec6567c787c4e5e1cc81a5cb7f10d0d1023c7f2a705ebd12320dce0ce->enter($__internal_c92ca37ec6567c787c4e5e1cc81a5cb7f10d0d1023c7f2a705ebd12320dce0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout_operatori.html.twig"));

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
        
        $__internal_c92ca37ec6567c787c4e5e1cc81a5cb7f10d0d1023c7f2a705ebd12320dce0ce->leave($__internal_c92ca37ec6567c787c4e5e1cc81a5cb7f10d0d1023c7f2a705ebd12320dce0ce_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_9baf76b893f59618d5b0f178df85a40b7fde9f86b2d7ae6f478318d5465dce70 = $this->env->getExtension("native_profiler");
        $__internal_9baf76b893f59618d5b0f178df85a40b7fde9f86b2d7ae6f478318d5465dce70->enter($__internal_9baf76b893f59618d5b0f178df85a40b7fde9f86b2d7ae6f478318d5465dce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle::layout_operatori.html.twig", 15)->display($context);
        // line 16
        echo "\t\t\t";
        
        $__internal_9baf76b893f59618d5b0f178df85a40b7fde9f86b2d7ae6f478318d5465dce70->leave($__internal_9baf76b893f59618d5b0f178df85a40b7fde9f86b2d7ae6f478318d5465dce70_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f33d026b20061453ed0da78f2ae5e45a9efa30d6eaaa1e9e2a47f0110edd72c = $this->env->getExtension("native_profiler");
        $__internal_9f33d026b20061453ed0da78f2ae5e45a9efa30d6eaaa1e9e2a47f0110edd72c->enter($__internal_9f33d026b20061453ed0da78f2ae5e45a9efa30d6eaaa1e9e2a47f0110edd72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::menu.html.twig", "AppBundle::layout_operatori.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t";
        
        $__internal_9f33d026b20061453ed0da78f2ae5e45a9efa30d6eaaa1e9e2a47f0110edd72c->leave($__internal_9f33d026b20061453ed0da78f2ae5e45a9efa30d6eaaa1e9e2a47f0110edd72c_prof);

    }

    // line 33
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_36a26e9c266730c6c7e6afefecd29d81f7f35874273a06be5949d23c0c1e17e6 = $this->env->getExtension("native_profiler");
        $__internal_36a26e9c266730c6c7e6afefecd29d81f7f35874273a06be5949d23c0c1e17e6->enter($__internal_36a26e9c266730c6c7e6afefecd29d81f7f35874273a06be5949d23c0c1e17e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 34
        echo "\t\t\t\t";
        $this->loadTemplate("AppBundle::contenuti.html.twig", "AppBundle::layout_operatori.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t";
        
        $__internal_36a26e9c266730c6c7e6afefecd29d81f7f35874273a06be5949d23c0c1e17e6->leave($__internal_36a26e9c266730c6c7e6afefecd29d81f7f35874273a06be5949d23c0c1e17e6_prof);

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
