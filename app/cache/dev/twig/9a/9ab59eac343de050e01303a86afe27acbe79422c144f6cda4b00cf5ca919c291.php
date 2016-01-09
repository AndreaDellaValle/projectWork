<?php

/* AppBundle::operatore_campagne_attive.html.twig */
class __TwigTemplate_218da88e13d6bab0f9dbd08bd541eed5b209f62df4b01a0c1cbd3fa885f70e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout_operatori.html.twig", "AppBundle::operatore_campagne_attive.html.twig", 1);
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
        $__internal_d8cc680fbe2c35f946f84bd36ce4e04c06bd16082c025cf8f35de3c22990e30c = $this->env->getExtension("native_profiler");
        $__internal_d8cc680fbe2c35f946f84bd36ce4e04c06bd16082c025cf8f35de3c22990e30c->enter($__internal_d8cc680fbe2c35f946f84bd36ce4e04c06bd16082c025cf8f35de3c22990e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_attive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8cc680fbe2c35f946f84bd36ce4e04c06bd16082c025cf8f35de3c22990e30c->leave($__internal_d8cc680fbe2c35f946f84bd36ce4e04c06bd16082c025cf8f35de3c22990e30c_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_332702c28b45737638edf52d94ee7f07601f409288b944bcc7b14d7fe6296b8a = $this->env->getExtension("native_profiler");
        $__internal_332702c28b45737638edf52d94ee7f07601f409288b944bcc7b14d7fe6296b8a->enter($__internal_332702c28b45737638edf52d94ee7f07601f409288b944bcc7b14d7fe6296b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_332702c28b45737638edf52d94ee7f07601f409288b944bcc7b14d7fe6296b8a->leave($__internal_332702c28b45737638edf52d94ee7f07601f409288b944bcc7b14d7fe6296b8a_prof);

    }

    // line 16
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_2adcfe4f2b66bb3475fecf624423dfe406f6ec0d1f99173794a74586980fc2c5 = $this->env->getExtension("native_profiler");
        $__internal_2adcfe4f2b66bb3475fecf624423dfe406f6ec0d1f99173794a74586980fc2c5->enter($__internal_2adcfe4f2b66bb3475fecf624423dfe406f6ec0d1f99173794a74586980fc2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 17
        echo "
\t\t<!--<aside class=\"contenitore_principale cf\">-->
\t\t\t\t<div class=\"titolo_contenuti\">Campagne attive

\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>
\t\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Christmas</br>Vodafone</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-check-circle fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><i class=\"fa fa-bullhorn fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><i class=\"\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Christmas</br>Vodafone</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-check-circle fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><i class=\"fa fa-bullhorn fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><i class=\"\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>


\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Christmas</br>Vodafone</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><i class=\"fa fa-check-circle fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><i class=\"fa fa-bullhorn fa-1x\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><i class=\"\"></i></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t<!--</aside>-->
";
        
        $__internal_2adcfe4f2b66bb3475fecf624423dfe406f6ec0d1f99173794a74586980fc2c5->leave($__internal_2adcfe4f2b66bb3475fecf624423dfe406f6ec0d1f99173794a74586980fc2c5_prof);

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
/* */
/* 		<!--<aside class="contenitore_principale cf">-->*/
/* 				<div class="titolo_contenuti">Campagne attive*/
/* */
/* 				</div>*/
/* 					<div class="informazioni_operatori_campagne cf">*/
/* 						<div class="profilo_operatori_campagne">Campagna</div>*/
/* 						<div class="campagne_passate">Status</div> */
/* 					</div>*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 						<a href="operatore_visualizza_campagna">*/
/* 							<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Christmas</br>Vodafone</i></div>*/
/* 								<div>*/
/* 								*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-check-circle fa-1x"></i></div>*/
/* 										<div class="icona_pausa"><i class="fa fa-bullhorn fa-1x"></i></div>*/
/* 										<div class="icona_assegna_contatti"><i class=""></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 						</a>*/
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 							<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Christmas</br>Vodafone</i></div>*/
/* 								<div>*/
/* 								*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-check-circle fa-1x"></i></div>*/
/* 										<div class="icona_pausa"><i class="fa fa-bullhorn fa-1x"></i></div>*/
/* 										<div class="icona_assegna_contatti"><i class=""></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 						</a>*/
/* */
/* */
/* 						<a href="operatore_visualizza_campagna">*/
/* 							<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome"><i>Christmas</br>Vodafone</i></div>*/
/* 								<div>*/
/* 								*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><i class="fa fa-check-circle fa-1x"></i></div>*/
/* 										<div class="icona_pausa"><i class="fa fa-bullhorn fa-1x"></i></div>*/
/* 										<div class="icona_assegna_contatti"><i class=""></i></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 							</div>*/
/* 						</a>*/
/* */
/* 					</nav>*/
/* 					*/
/* 		<!--</aside>-->*/
/* {% endblock %}*/
/* */
