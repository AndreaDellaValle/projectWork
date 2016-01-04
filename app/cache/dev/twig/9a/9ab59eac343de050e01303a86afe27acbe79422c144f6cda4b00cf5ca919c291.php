<?php

/* AppBundle::operatore_campagne_attive.html.twig */
class __TwigTemplate_218da88e13d6bab0f9dbd08bd541eed5b209f62df4b01a0c1cbd3fa885f70e06 extends Twig_Template
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
        $__internal_98913e68669a4795617350a8c5847e5ef6505ef84a4d1957307a0e6fc21c3756 = $this->env->getExtension("native_profiler");
        $__internal_98913e68669a4795617350a8c5847e5ef6505ef84a4d1957307a0e6fc21c3756->enter($__internal_98913e68669a4795617350a8c5847e5ef6505ef84a4d1957307a0e6fc21c3756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_attive.html.twig"));

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
\t<body class=\"body\">

\t\t
\t\t<header class=\"contenitore_header cf\">
\t\t<p class = \"logo\"> <a href=\"operatore_index\"><img src= \"";
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
\t<i>Campagne / Campagne attive</i>
\t</div>



\t\t<nav class=\"contenitore_menu\">
\t\t\t<p class=\"home\"><a href=\"operatore_index\">HOME</a></p>
\t\t\t<!--<p class=\"aziende\"><a href=\"http://localhost/PROJECTWORK/Admin_aziende.html\">AZIENDE</a></p>
\t\t\t<p class=\"contatti\"><a href=\"http://localhost/PROJECTWORK/-----------.html\">CONTATTI</a></p>-->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_attive\">CAMPAGNE ATTIVE</a></p>
<!--\t\t\t<p class=\"operatori\"><a href=\"http://localhost/PROJECTWORK/Admin_operatori.html\">OPERATORI</a></p>
\t\t\t<p class=\"report\"><a href=\"http://localhost/PROJECTWORK/----------.html\">REPORT</a></p> -->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_passate\">CAMPAGNE CONCLUSE</a></p>
\t\t</nav>

\t\t<aside class=\"contenitore_principale cf\">
\t\t\t\t<div class=\"titolo_contenuti\">Campagne attive
<!--\t\t\t\t\t<a href=\"http://localhost/PROJECTWORK/Nuova_campagna_1.html\"><nav class=\"aggiungi_elemento\">Aggiungi nuova campagna</nav></a> -->
\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>
\t\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><a href=\"dettagli_campagna\"><i>Christmas</br>Vodafone</i></a></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"Operatori_campagne_attive.html\"><i class=\"fa fa-bullhorn fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><a href=\"dettagli_campagna\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"Operatori_campagne_attive.html\"><i class=\"fa fa-bullhorn fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><a href=\"dettagli_campagna\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"Operatori_campagne_attive.html\"><i class=\"fa fa-bullhorn fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"\"></i></a></div> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t</aside>


<div class=\"contenitore_sfondo cf\">

</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->
<script type=\"text/javascript\">
\$('#logo').parents('test').css('background-color', 'red');
</script>
\t</body>
</html>
";
        
        $__internal_98913e68669a4795617350a8c5847e5ef6505ef84a4d1957307a0e6fc21c3756->leave($__internal_98913e68669a4795617350a8c5847e5ef6505ef84a4d1957307a0e6fc21c3756_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::operatore_campagne_attive.html.twig";
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
/* 	<body class="body">*/
/* */
/* 		*/
/* 		<header class="contenitore_header cf">*/
/* 		<p class = "logo"> <a href="operatore_index"><img src= "{{ asset ('img/logo_bianco.png') }}" width="100" height="40"></a></p>*/
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
/* 	<i>Campagne / Campagne attive</i>*/
/* 	</div>*/
/* */
/* */
/* */
/* 		<nav class="contenitore_menu">*/
/* 			<p class="home"><a href="operatore_index">HOME</a></p>*/
/* 			<!--<p class="aziende"><a href="http://localhost/PROJECTWORK/Admin_aziende.html">AZIENDE</a></p>*/
/* 			<p class="contatti"><a href="http://localhost/PROJECTWORK/-----------.html">CONTATTI</a></p>-->*/
/* 			<p class="campagne"><a href="operatore_campagne_attive">CAMPAGNE ATTIVE</a></p>*/
/* <!--			<p class="operatori"><a href="http://localhost/PROJECTWORK/Admin_operatori.html">OPERATORI</a></p>*/
/* 			<p class="report"><a href="http://localhost/PROJECTWORK/----------.html">REPORT</a></p> -->*/
/* 			<p class="campagne"><a href="operatore_campagne_passate">CAMPAGNE CONCLUSE</a></p>*/
/* 		</nav>*/
/* */
/* 		<aside class="contenitore_principale cf">*/
/* 				<div class="titolo_contenuti">Campagne attive*/
/* <!--					<a href="http://localhost/PROJECTWORK/Nuova_campagna_1.html"><nav class="aggiungi_elemento">Aggiungi nuova campagna</nav></a> -->*/
/* 				</div>*/
/* 					<div class="informazioni_operatori_campagne cf">*/
/* 						<div class="profilo_operatori_campagne">Campagna</div>*/
/* 						<div class="campagne_passate">Status</div> */
/* 					</div>*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><a href="dettagli_campagna"><i>Christmas</br>Vodafone</i></a></div>*/
/* 								<div>*/
/* 								*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										<div class="icona_pausa"><a href="Operatori_campagne_attive.html"><i class="fa fa-bullhorn fa-1x"></i></a></div>*/
/* 										<div class="icona_assegna_contatti"><a href="--------------"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><a href="dettagli_campagna"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 								*/
/* 										<div class="contenitore_icone">*/
/* 										*/
/* 								<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										<div class="icona_pausa"><a href="Operatori_campagne_attive.html"><i class="fa fa-bullhorn fa-1x"></i></a></div>*/
/* 										<div class="icona_assegna_contatti"><a href="--------------"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><a href="dettagli_campagna"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* 										*/
/* 								<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										<div class="icona_pausa"><a href="Operatori_campagne_attive.html"><i class="fa fa-bullhorn fa-1x"></i></a></div>*/
/* 										<div class="icona_assegna_contatti"><a href="--------------"><i class=""></i></a></div> */
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 					</nav>*/
/* 					*/
/* 		</aside>*/
/* */
/* */
/* <div class="contenitore_sfondo cf">*/
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
