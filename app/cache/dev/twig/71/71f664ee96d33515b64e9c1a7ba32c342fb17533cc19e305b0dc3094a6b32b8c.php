<?php

/* AppBundle::operatore_campagne_passate.html.twig */
class __TwigTemplate_b8b29a150d3e2b70648d0db1a8e29589aa8b3a2fa486e42ca4e62a50aa72dbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout_operatori.html.twig", "AppBundle::operatore_campagne_passate.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contenuti' => array($this, 'block_contenuti'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout_operatori.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0975a6a3ad5d69fdea4a4538b0cef746f3d5a4a3e5e55a3c926cb3fee45e3620 = $this->env->getExtension("native_profiler");
        $__internal_0975a6a3ad5d69fdea4a4538b0cef746f3d5a4a3e5e55a3c926cb3fee45e3620->enter($__internal_0975a6a3ad5d69fdea4a4538b0cef746f3d5a4a3e5e55a3c926cb3fee45e3620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_passate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0975a6a3ad5d69fdea4a4538b0cef746f3d5a4a3e5e55a3c926cb3fee45e3620->leave($__internal_0975a6a3ad5d69fdea4a4538b0cef746f3d5a4a3e5e55a3c926cb3fee45e3620_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f32e67741b2f418b37fc4c87b50c7af8b655f73f0c49fd7d6b67d19b4d1c331f = $this->env->getExtension("native_profiler");
        $__internal_f32e67741b2f418b37fc4c87b50c7af8b655f73f0c49fd7d6b67d19b4d1c331f->enter($__internal_f32e67741b2f418b37fc4c87b50c7af8b655f73f0c49fd7d6b67d19b4d1c331f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
\t\t<nav class=\"contenitore_menu\">
\t\t\t<p class=\"home\"><a href=\"operatore_index\">HOME</a></p>
\t\t\t<!--<p class=\"aziende\"><a href=\"http://localhost/PROJECTWORK/Admin_aziende.html\">AZIENDE</a></p>
\t\t\t<p class=\"contatti\"><a href=\"http://localhost/PROJECTWORK/-----------.html\">CONTATTI</a></p>-->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_attive\">CAMPAGNE ATTIVE</a></p>
<!--\t\t\t<p class=\"operatori\"><a href=\"http://localhost/PROJECTWORK/Admin_operatori.html\">OPERATORI</a></p>
\t\t\t<p class=\"report\"><a href=\"http://localhost/PROJECTWORK/----------.html\">REPORT</a></p> -->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_passate\">CAMPAGNE CONCLUSE</a></p>
\t\t</nav>

";
        
        $__internal_f32e67741b2f418b37fc4c87b50c7af8b655f73f0c49fd7d6b67d19b4d1c331f->leave($__internal_f32e67741b2f418b37fc4c87b50c7af8b655f73f0c49fd7d6b67d19b4d1c331f_prof);

    }

    // line 16
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_54d9b40adfa88a8f01d5d5ef7b8299f321d2a61ff5208de8784c8ed4fb148021 = $this->env->getExtension("native_profiler");
        $__internal_54d9b40adfa88a8f01d5d5ef7b8299f321d2a61ff5208de8784c8ed4fb148021->enter($__internal_54d9b40adfa88a8f01d5d5ef7b8299f321d2a61ff5208de8784c8ed4fb148021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 17
        echo "\t\t\t\t
\t\t\t
\t\t
\t\t\t\t<div class=\"titolo_contenuti\">Campagne concluse</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>  
\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>\t
\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-pause fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div></a>

\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-pause fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div></a>

\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-pause fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div></a>

\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-pause fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div></a>

\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-pause fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div></a>

\t\t\t\t</nav>
\t\t\t\t\t
\t\t
\t\t";
        
        $__internal_54d9b40adfa88a8f01d5d5ef7b8299f321d2a61ff5208de8784c8ed4fb148021->leave($__internal_54d9b40adfa88a8f01d5d5ef7b8299f321d2a61ff5208de8784c8ed4fb148021_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::operatore_campagne_passate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 16,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout_operatori.html.twig" %}*/
/* */
/* {% block menu %}*/
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
/* {% endblock %}*/
/* {% block contenuti %}*/
/* 				*/
/* 			*/
/* 		*/
/* 				<div class="titolo_contenuti">Campagne concluse</div>*/
/* 					<div class="informazioni_operatori_campagne cf">*/
/* 						<div class="profilo_operatori_campagne">Campagna</div>  */
/* 					<div class="campagne_passate">Status</div> */
/* 					</div>	*/
/* 				<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 						<a href="operatore_visualizza_campagna">*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-pause fa-1x"></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div></a>*/
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-pause fa-1x"></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div></a>*/
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-pause fa-1x"></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div></a>*/
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-pause fa-1x"></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div></a>*/
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-pause fa-1x"></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div></a>*/
/* */
/* 				</nav>*/
/* 					*/
/* 		*/
/* 		{% endblock %}*/
/* */
