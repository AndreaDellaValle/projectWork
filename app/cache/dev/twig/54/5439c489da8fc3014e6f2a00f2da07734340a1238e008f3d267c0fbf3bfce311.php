<?php

/* AppBundle::operatore_index.html.twig */
class __TwigTemplate_d759559c1df6cec3758ede32c6a29fbe3a31e44a9997f917d3e30841292a2fd6 extends Twig_Template
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
        $__internal_f5aed3514b4dc1a949f131e9fc65ce720baffc803e18a8465862a1d30439ad22 = $this->env->getExtension("native_profiler");
        $__internal_f5aed3514b4dc1a949f131e9fc65ce720baffc803e18a8465862a1d30439ad22->enter($__internal_f5aed3514b4dc1a949f131e9fc65ce720baffc803e18a8465862a1d30439ad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_index.html.twig"));

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

\t\t
\t\t<header class=\"contenitore_header cf\">
\t\t<p class = \"logo\"><a href=\"operatore_index\"><img src= \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo_bianco.png"), "html", null, true);
        echo "\" width=\"100\" height=\"40\"></a></p>
\t\t\t<div class=\"header_info\">
\t\t\t\t<p class = \"admin\"><span class=\"scrittaAdmin\">Operatore:</span> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nome", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p class = \"dataEora\">LUN 01/10/2015 - 16:33.05</p>
\t\t\t</div>
\t\t
\t\t\t<div class=\"contenitore_logout\">
\t\t\t\t<p class = \"logout\"><a href=\"login\">Logout</p>
\t\t\t\t<i class=\"fa fa-sign-out fa-1x\"></a></i>
\t\t\t</div>
\t\t</header>


\t<div class=\"contenitore_breadcrumb\">
\t<i>Home</i>
\t</div>



\t\t<div class=\"contenitore_menu\">
\t\t\t<p class=\"home\"><a href=\"operatore_index\">HOME</a></p>
\t\t\t<!--<p class=\"aziende\"><a href=\"http://localhost/PROJECTWORK/Admin_aziende.html\">AZIENDE</a></p>
\t\t\t<p class=\"contatti\"><a href=\"http://localhost/PROJECTWORK/-----------.html\">CONTATTI</a></p>-->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_attive\">CAMPAGNE ATTIVE</a></p>
\t<!--\t\t<p class=\"operatori\"><a href=\"http://localhost/PROJECTWORK/Admin_operatori.html\">OPERATORI</a></p>
\t\t\t<p class=\"report\"><a href=\"http://localhost/PROJECTWORK/----------.html\">REPORT</a></p> -->
\t\t\t<p class=\"campagne\"><a href=\"operatori_campagne_passate\">CAMPAGNE CONCLUSE</a></p>
\t\t</div>

\t\t<div class=\"contenitore_principale cf\">
\t\t\t\t\t<div class=\"titolo_contenuti\">Ultime Attività
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"dettagli_campagna\">
\t\t\t\t\t<div class=\"tendina_1\"><i>Christmas</i><i class=\"fa fa-flag fa-1x\"></i></br>Vodafone
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 54
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"/PROJECTWORK/-----------.html\">
\t\t\t\t\t<div class=\"tendina_2\"><i>Campagna 2</i><i class=\"fa fa-flag fa-1x\"></i></br>Azienda 3
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 24
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"/PROJECTWORK/-----------.html\">
\t\t\t\t\t<div class=\"tendina_3\"><i>Campagna 1</i><i class=\"fa fa-flag fa-1x\"></i></br>Azienda 1
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 2
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t</div>

<div class=\"contenitore_sfondo cf\">


</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->
<script type=\"text/javascript\">
\$('#logo').parents('test').css('background-color', 'red');
</script>
\t</body>
</html>
";
        
        $__internal_f5aed3514b4dc1a949f131e9fc65ce720baffc803e18a8465862a1d30439ad22->leave($__internal_f5aed3514b4dc1a949f131e9fc65ce720baffc803e18a8465862a1d30439ad22_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::operatore_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 15,  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
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
/* */
/* 		*/
/* 		<header class="contenitore_header cf">*/
/* 		<p class = "logo"><a href="operatore_index"><img src= "{{ asset ('img/logo_bianco.png') }}" width="100" height="40"></a></p>*/
/* 			<div class="header_info">*/
/* 				<p class = "admin"><span class="scrittaAdmin">Operatore:</span> {{ app.user.nome }}</p>*/
/* 				<p class = "dataEora">LUN 01/10/2015 - 16:33.05</p>*/
/* 			</div>*/
/* 		*/
/* 			<div class="contenitore_logout">*/
/* 				<p class = "logout"><a href="login">Logout</p>*/
/* 				<i class="fa fa-sign-out fa-1x"></a></i>*/
/* 			</div>*/
/* 		</header>*/
/* */
/* */
/* 	<div class="contenitore_breadcrumb">*/
/* 	<i>Home</i>*/
/* 	</div>*/
/* */
/* */
/* */
/* 		<div class="contenitore_menu">*/
/* 			<p class="home"><a href="operatore_index">HOME</a></p>*/
/* 			<!--<p class="aziende"><a href="http://localhost/PROJECTWORK/Admin_aziende.html">AZIENDE</a></p>*/
/* 			<p class="contatti"><a href="http://localhost/PROJECTWORK/-----------.html">CONTATTI</a></p>-->*/
/* 			<p class="campagne"><a href="operatore_campagne_attive">CAMPAGNE ATTIVE</a></p>*/
/* 	<!--		<p class="operatori"><a href="http://localhost/PROJECTWORK/Admin_operatori.html">OPERATORI</a></p>*/
/* 			<p class="report"><a href="http://localhost/PROJECTWORK/----------.html">REPORT</a></p> -->*/
/* 			<p class="campagne"><a href="operatori_campagne_passate">CAMPAGNE CONCLUSE</a></p>*/
/* 		</div>*/
/* */
/* 		<div class="contenitore_principale cf">*/
/* 					<div class="titolo_contenuti">Ultime Attività*/
/* 					</div>*/
/* 					<a href="dettagli_campagna">*/
/* 					<div class="tendina_1"><i>Christmas</i><i class="fa fa-flag fa-1x"></i></br>Vodafone*/
/* 						<div class="contenuto_tendine"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 54*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 					<a href="/PROJECTWORK/-----------.html">*/
/* 					<div class="tendina_2"><i>Campagna 2</i><i class="fa fa-flag fa-1x"></i></br>Azienda 3*/
/* 						<div class="contenuto_tendine"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 24*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 					<a href="/PROJECTWORK/-----------.html">*/
/* 					<div class="tendina_3"><i>Campagna 1</i><i class="fa fa-flag fa-1x"></i></br>Azienda 1*/
/* 						<div class="contenuto_tendine"><b>Data inizio:</b> 08/09/2015</br></br>Chiamate rimanenti 2*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 				</div>*/
/* */
/* <div class="contenitore_sfondo cf">*/
/* */
/* */
/* </div>*/
/* */
/* */
/* <!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->*/
/* <script type="text/javascript">*/
/* $('#logo').parents('test').css('background-color', 'red');*/
/* </script>*/
/* 	</body>*/
/* </html>*/
/* */
