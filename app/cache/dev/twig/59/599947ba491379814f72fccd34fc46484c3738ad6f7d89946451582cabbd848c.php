<?php

/* AppBundle::admin_campagne.html.twig */
class __TwigTemplate_1bc8c6af0d78c8182a6ce1facfdac41b7899dbbde5779fde7753227c6292636e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::admin_campagne.html.twig", 1);
        $this->blocks = array(
            'contenuti' => array($this, 'block_contenuti'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e89207580b15b2fcc9dbd8b6b64b564104f834f8a8d8e284395438bcd64e5b24 = $this->env->getExtension("native_profiler");
        $__internal_e89207580b15b2fcc9dbd8b6b64b564104f834f8a8d8e284395438bcd64e5b24->enter($__internal_e89207580b15b2fcc9dbd8b6b64b564104f834f8a8d8e284395438bcd64e5b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::admin_campagne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89207580b15b2fcc9dbd8b6b64b564104f834f8a8d8e284395438bcd64e5b24->leave($__internal_e89207580b15b2fcc9dbd8b6b64b564104f834f8a8d8e284395438bcd64e5b24_prof);

    }

    // line 2
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_369a3779045244096b93541ed6f7a58b4f328ea4a79c2c8dabaae3839caadeb9 = $this->env->getExtension("native_profiler");
        $__internal_369a3779045244096b93541ed6f7a58b4f328ea4a79c2c8dabaae3839caadeb9->enter($__internal_369a3779045244096b93541ed6f7a58b4f328ea4a79c2c8dabaae3839caadeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 3
        echo "<div class=\"titolo_contenuti\">Campagne
\t\t\t\t\t<a href=\"Nuova_campagna_1.html\"><nav class=\"aggiungi_elemento\">Aggiungi nuova campagna</nav></a>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatore cf\">
\t\t\t\t\t\t<div class=\"profilo_operatore\">Campagna</div>
\t\t\t\t\t\t<div class=\"assegna_contatti_operatore\"></div>
\t\t\t\t\t\t<div class=\"pausa_operatore\"></div>
\t\t\t\t\t\t<div class=\"rimuovi_operatore\">Rimuovi</div>
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Dettagli_campagna.html\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t<!--<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-wrench fa-1x\"></i></a></div>-->
\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"#\"><i class=\"\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</nav>
";
        
        $__internal_369a3779045244096b93541ed6f7a58b4f328ea4a79c2c8dabaae3839caadeb9->leave($__internal_369a3779045244096b93541ed6f7a58b4f328ea4a79c2c8dabaae3839caadeb9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::admin_campagne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* {% block contenuti %}*/
/* <div class="titolo_contenuti">Campagne*/
/* 					<a href="Nuova_campagna_1.html"><nav class="aggiungi_elemento">Aggiungi nuova campagna</nav></a>*/
/* 				</div>*/
/* 					<div class="informazioni_operatore cf">*/
/* 						<div class="profilo_operatore">Campagna</div>*/
/* 						<div class="assegna_contatti_operatore"></div>*/
/* 						<div class="pausa_operatore"></div>*/
/* 						<div class="rimuovi_operatore">Rimuovi</div>*/
/* 					</div>*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Dettagli_campagna.html"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									<div class="contenuto_tendine"><p></p>*/
/* 									</div>*/
/* 										<div class="contenitore_icone">*/
/* 										<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 										<!--<div class="icona_pausa"><a href="------------"><i class="fa fa-wrench fa-1x"></i></a></div>-->*/
/* 										<div class="icona_assegna_contatti"><a href="#"><i class=""></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 					</nav>*/
/* {% endblock %}*/
