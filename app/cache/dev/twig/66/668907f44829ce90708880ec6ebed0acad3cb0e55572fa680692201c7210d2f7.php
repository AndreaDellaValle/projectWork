<?php

/* AppBundle::admin_report.html.twig */
class __TwigTemplate_8fb0481e740f430dbc2b5d457e2a60ffd994fc9059d770e0a51270dd8c97afce extends Twig_Template
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
        $__internal_e6ca8132fb115d787f71f3129e7be7d05e74eb5b1bad8b9069c366171fbc4134 = $this->env->getExtension("native_profiler");
        $__internal_e6ca8132fb115d787f71f3129e7be7d05e74eb5b1bad8b9069c366171fbc4134->enter($__internal_e6ca8132fb115d787f71f3129e7be7d05e74eb5b1bad8b9069c366171fbc4134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::admin_report.html.twig"));

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
\t<body class=\"body\">
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script> 
\t\t
\t\t<header class=\"contenitore_header cf\">
\t\t<p class = \"logo\"> <a href=\"Admin_Index.html\"><img src= \"assets/icons/logo_bianco.png\" width=\"100\" height=\"40\"></a></p>
\t\t\t<div class=\"header_info\">
\t\t\t\t<p class = \"admin\"><span class=\"scrittaAdmin\">Admin:</span> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nome", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p class = \"dataEora\">LUN 01/10/2015 - 16:33.05</p>
\t\t\t</div>
\t\t
\t\t\t<div class=\"contenitore_logout\">
\t\t\t\t<p class = \"logout\"><a href=\"Login_admin.html\">Logout</p>
\t\t\t\t<i class=\"fa fa-sign-out fa-1x\"></a></i>
\t\t\t</div>
\t\t</header>


\t<div class=\"contenitore_breadcrumb\">
\t<i>Home</i>
\t</div>



\t\t<nav class=\"contenitore_menu\">
\t\t\t<p class=\"home\"><a href=\"Admin_Index.html\">HOME</a></p>
\t\t\t<!--<p class=\"aziende\"><a href=\"http://localhost/PROJECTWORK/Admin_aziende.html\">AZIENDE</a></p>
\t\t\t<p class=\"contatti\"><a href=\"http://localhost/PROJECTWORK/-----------.html\">CONTATTI</a></p>-->
\t\t\t<p class=\"campagne\"><a href=\"Admin_campagne.html\">CAMPAGNE</a></p>
\t\t\t<p class=\"operatori\"><a href=\"Admin_operatori.html\">OPERATORI</a></p>
\t\t\t<p class=\"report\"><a href=\"Admin_report.html\">REPORT</a></p>
\t\t</nav>

\t\t<aside class=\"contenitore_principale cf\">
\t\t\t\t<div class=\"titolo_contenuti\">Report
\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatore cf\">
\t\t\t\t\t\t<div class=\"profilo_operatore\">Sezione</div>  
\t\t\t\t\t\t<!--<div class=\"assegna_contatti_operatore\">Assegna contatti</div>
\t\t\t\t\t\t<div class=\"pausa_operatore\">Sospendi</div>
\t\t\t\t\t\t<div class=\"rimuovi_operatore\">Definisci</div>-->
\t\t\t\t\t</div>\t
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><b>Report</br>Campagne</b></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Seleziona_campagne_1.html\"><nav class=\"modifica_elemento\">Seleziona Campagna/e</nav></a>
\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-user fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><b>Report</br>Operatori</b></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Seleziona_operatori_1.html\"><nav class=\"modifica_elemento\">Seleziona Operatore/i</nav></a>
\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t</aside>



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
</html>
";
        
        $__internal_e6ca8132fb115d787f71f3129e7be7d05e74eb5b1bad8b9069c366171fbc4134->leave($__internal_e6ca8132fb115d787f71f3129e7be7d05e74eb5b1bad8b9069c366171fbc4134_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::admin_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
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
/* 	<body class="body">*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> */
/* 		*/
/* 		<header class="contenitore_header cf">*/
/* 		<p class = "logo"> <a href="Admin_Index.html"><img src= "assets/icons/logo_bianco.png" width="100" height="40"></a></p>*/
/* 			<div class="header_info">*/
/* 				<p class = "admin"><span class="scrittaAdmin">Admin:</span> {{ app.user.nome }}</p>*/
/* 				<p class = "dataEora">LUN 01/10/2015 - 16:33.05</p>*/
/* 			</div>*/
/* 		*/
/* 			<div class="contenitore_logout">*/
/* 				<p class = "logout"><a href="Login_admin.html">Logout</p>*/
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
/* 		<nav class="contenitore_menu">*/
/* 			<p class="home"><a href="Admin_Index.html">HOME</a></p>*/
/* 			<!--<p class="aziende"><a href="http://localhost/PROJECTWORK/Admin_aziende.html">AZIENDE</a></p>*/
/* 			<p class="contatti"><a href="http://localhost/PROJECTWORK/-----------.html">CONTATTI</a></p>-->*/
/* 			<p class="campagne"><a href="Admin_campagne.html">CAMPAGNE</a></p>*/
/* 			<p class="operatori"><a href="Admin_operatori.html">OPERATORI</a></p>*/
/* 			<p class="report"><a href="Admin_report.html">REPORT</a></p>*/
/* 		</nav>*/
/* */
/* 		<aside class="contenitore_principale cf">*/
/* 				<div class="titolo_contenuti">Report*/
/* 				</div>*/
/* 					<div class="informazioni_operatore cf">*/
/* 						<div class="profilo_operatore">Sezione</div>  */
/* 						<!--<div class="assegna_contatti_operatore">Assegna contatti</div>*/
/* 						<div class="pausa_operatore">Sospendi</div>*/
/* 						<div class="rimuovi_operatore">Definisci</div>-->*/
/* 					</div>	*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 					*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><b>Report</br>Campagne</b></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<a href="Seleziona_campagne_1.html"><nav class="modifica_elemento">Seleziona Campagna/e</nav></a>*/
/* 											<!--<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>-->*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-user fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><b>Report</br>Operatori</b></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<a href="Seleziona_operatori_1.html"><nav class="modifica_elemento">Seleziona Operatore/i</nav></a>*/
/* 											<!--<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>-->*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						*/
/* 					</nav>*/
/* 					*/
/* 		</aside>*/
/* */
/* */
/* */
/* <div class="contenitore_sfondo cf">*/
/* */
/* </div>*/
/* */
/* */
/* <!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->*/
/* <script type="text/javascript">*/
/* $('.apriFinestraDettagliCampagna').on('click', function(evt){*/
/* 	evt.preventDefault();*/
/* 	$('#tendina').removeClass('hidden');*/
/* 	$('.body').*/
/* });*/
/* </script>*/
/* 	</body>*/
/* </html>*/
/* */
