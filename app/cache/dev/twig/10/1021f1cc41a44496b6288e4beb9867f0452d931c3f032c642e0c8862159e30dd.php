<?php

/* AppBundle::dettagli_campagna.html.twig */
class __TwigTemplate_b1cfb16e5c955ebcc9019395e90580835bd420f95d9b7a03e801366b2a801fbd extends Twig_Template
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
        $__internal_081f69fddc0abbbf9b3150baf963b593fe575f80b7dd9aa6b70cfff1a1916111 = $this->env->getExtension("native_profiler");
        $__internal_081f69fddc0abbbf9b3150baf963b593fe575f80b7dd9aa6b70cfff1a1916111->enter($__internal_081f69fddc0abbbf9b3150baf963b593fe575f80b7dd9aa6b70cfff1a1916111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::dettagli_campagna.html.twig"));

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

\t
\t\t
\t\t<div class=\"contenitore_header_pp_operatore cf\">
\t\t\t<span><i class=\"fa fa-flag fa-11x\"></i><i> Campagna:</i></span><i> Prima Campagna</i><i><span> &nbsp&nbspAzienda:</i></span><i> Prima Azienda</i>
\t\t\t<div class=\"titolo_contenuti_sinistra_pp_operatore\">Info</div>
\t\t\t\t<div class=\"contenuti_sinistra_pp_campagna\">
\t\t\t\t<p class=\"contatti_chiamati\"><b>Contatti chiamati:</b><span>  146</span></p>
\t\t\t\t<p class=\"contatti_da_chiamare\"><b>Contatti da chiamare:</b><span>  89</span></p>
\t\t\t\t<p class=\"data_inizio\"><b>Data di inizio:</b><span>  16/09/2015</span></p>
\t\t\t\t<p class=\"feedback_negativi\"><b>----FEEDBACK NEGATIVI----</b><span>
\t\t\t\t<p class=\"feedback_negativi\"><b>Prezzo elevato:</b><span>  12</span></p>
\t\t\t\t<p class=\"feedback_negativi\"><b>Scarsa attrattiva:</b><span>  98</span></p>
\t\t\t\t<p class=\"feedback_negativi\"><b>Mancanze funzionali:</b><span>  3</span></p>
\t\t\t\t<p class=\"feedback_negativi\"><b>Offerta non chiara:</b><span>  2</span></p>
\t\t\t\t</div>

\t\t\t<div class=\"titolo_contenuti_destra_pp\">Operatori Assegnati</div>
\t\t\t\t<div class=\"contenuti_destra_pp_operatore\">
\t\t\t\t\t<p>Operatore4</br>Operatore6</br></p>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"numero_chiamate_operatore\">
\t\t\t\t\tTasso di conversione attuale:</br><span><b>27%</b></span></br>
\t\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<a href=\"Admin_campagne.html\"><button type=\"submit\" name=\"annulla_operatore\" value=\"annulla\">ritorna</button></a>
\t\t\t\t<a href=\"Admin_campagne.html\"><button type=\"submit\" name=\"stampa_report_operatore\" value=\"avanti\">stampa report</button></a>
\t\t</div>



<div class=\"contenitore_sfondo_pp\">



</div>


<!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->
\t</body>
</html>
";
        
        $__internal_081f69fddc0abbbf9b3150baf963b593fe575f80b7dd9aa6b70cfff1a1916111->leave($__internal_081f69fddc0abbbf9b3150baf963b593fe575f80b7dd9aa6b70cfff1a1916111_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::dettagli_campagna.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
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
/* */
/* 	*/
/* 		*/
/* 		<div class="contenitore_header_pp_operatore cf">*/
/* 			<span><i class="fa fa-flag fa-11x"></i><i> Campagna:</i></span><i> Prima Campagna</i><i><span> &nbsp&nbspAzienda:</i></span><i> Prima Azienda</i>*/
/* 			<div class="titolo_contenuti_sinistra_pp_operatore">Info</div>*/
/* 				<div class="contenuti_sinistra_pp_campagna">*/
/* 				<p class="contatti_chiamati"><b>Contatti chiamati:</b><span>  146</span></p>*/
/* 				<p class="contatti_da_chiamare"><b>Contatti da chiamare:</b><span>  89</span></p>*/
/* 				<p class="data_inizio"><b>Data di inizio:</b><span>  16/09/2015</span></p>*/
/* 				<p class="feedback_negativi"><b>----FEEDBACK NEGATIVI----</b><span>*/
/* 				<p class="feedback_negativi"><b>Prezzo elevato:</b><span>  12</span></p>*/
/* 				<p class="feedback_negativi"><b>Scarsa attrattiva:</b><span>  98</span></p>*/
/* 				<p class="feedback_negativi"><b>Mancanze funzionali:</b><span>  3</span></p>*/
/* 				<p class="feedback_negativi"><b>Offerta non chiara:</b><span>  2</span></p>*/
/* 				</div>*/
/* */
/* 			<div class="titolo_contenuti_destra_pp">Operatori Assegnati</div>*/
/* 				<div class="contenuti_destra_pp_operatore">*/
/* 					<p>Operatore4</br>Operatore6</br></p>*/
/* 				</div>*/
/* 					<div class="numero_chiamate_operatore">*/
/* 					Tasso di conversione attuale:</br><span><b>27%</b></span></br>*/
/* 					</div>*/
/* */
/* 				*/
/* */
/* 				<a href="Admin_campagne.html"><button type="submit" name="annulla_operatore" value="annulla">ritorna</button></a>*/
/* 				<a href="Admin_campagne.html"><button type="submit" name="stampa_report_operatore" value="avanti">stampa report</button></a>*/
/* 		</div>*/
/* */
/* */
/* */
/* <div class="contenitore_sfondo_pp">*/
/* */
/* */
/* */
/* </div>*/
/* */
/* */
/* <!--INSERIRE JQUERY per FAR FUNZIONARE LO SCRIPT-->*/
/* 	</body>*/
/* </html>*/
/* */
