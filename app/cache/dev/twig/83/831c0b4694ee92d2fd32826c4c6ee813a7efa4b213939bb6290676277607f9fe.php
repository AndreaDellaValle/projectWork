<?php

/* AppBundle::admin_operatori.html.twig */
class __TwigTemplate_709747bb218480d7674d71930a1f177f3a869d5fa0aadbf6495e251ff0389622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::admin_operatori.html.twig", 1);
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
        $__internal_91fb66e090db4ab23bc0b3a9583963f4d633eaeab8cd9c2eec5043cba9798635 = $this->env->getExtension("native_profiler");
        $__internal_91fb66e090db4ab23bc0b3a9583963f4d633eaeab8cd9c2eec5043cba9798635->enter($__internal_91fb66e090db4ab23bc0b3a9583963f4d633eaeab8cd9c2eec5043cba9798635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::admin_operatori.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fb66e090db4ab23bc0b3a9583963f4d633eaeab8cd9c2eec5043cba9798635->leave($__internal_91fb66e090db4ab23bc0b3a9583963f4d633eaeab8cd9c2eec5043cba9798635_prof);

    }

    // line 2
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_88f1ff4b1a6c69a208b59fb58f4ca510967257f6f6ea55ab40f0652b71eb5f38 = $this->env->getExtension("native_profiler");
        $__internal_88f1ff4b1a6c69a208b59fb58f4ca510967257f6f6ea55ab40f0652b71eb5f38->enter($__internal_88f1ff4b1a6c69a208b59fb58f4ca510967257f6f6ea55ab40f0652b71eb5f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 3
        echo "
\t\t\t\t<div class=\"titolo_contenuti\">Operatori
\t\t\t\t\t<a href=\"Nuova_operatore_1.html\"><nav class=\"aggiungi_elemento\">Aggiungi un operatore</nav></a>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatore cf\">
\t\t\t\t\t\t<div class=\"profilo_operatore\">Profilo</div>  
\t\t\t\t\t\t<div class=\"assegna_contatti_operatore\">Assegna contatti</div>
\t\t\t\t\t\t<div class=\"pausa_operatore\">Sospendi</div>
\t\t\t\t\t\t<div class=\"rimuovi_operatore\">Rimuovi</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"Profilo_operatore.html\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"#\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"assegna_contatti_operatore.html\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-user fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Cognome</br>Nome</i></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"contenuto_tendine\"><p></p></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-trash-o fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_pausa\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icona_assegna_contatti\"><a href=\"--------------\"><i class=\"fa fa-link fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</nav>
";
        
        $__internal_88f1ff4b1a6c69a208b59fb58f4ca510967257f6f6ea55ab40f0652b71eb5f38->leave($__internal_88f1ff4b1a6c69a208b59fb58f4ca510967257f6f6ea55ab40f0652b71eb5f38_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::admin_operatori.html.twig";
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
/* */
/* 				<div class="titolo_contenuti">Operatori*/
/* 					<a href="Nuova_operatore_1.html"><nav class="aggiungi_elemento">Aggiungi un operatore</nav></a>*/
/* 				</div>*/
/* 					<div class="informazioni_operatore cf">*/
/* 						<div class="profilo_operatore">Profilo</div>  */
/* 						<div class="assegna_contatti_operatore">Assegna contatti</div>*/
/* 						<div class="pausa_operatore">Sospendi</div>*/
/* 						<div class="rimuovi_operatore">Rimuovi</div>*/
/* 					</div>	*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 					*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="Profilo_operatore.html"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="#"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="assegna_contatti_operatore.html"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-user fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Cognome</br>Nome</i></div>*/
/* 								*/
/* 									<div class="contenuto_tendine"><p></p></div>*/
/* 										<div class="contenitore_icone">*/
/* 											<div class="icona_rimuovere"><a href="------------"><i class="fa fa-trash-o fa-1x"></i></a></div>*/
/* 											<div class="icona_pausa"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 											<div class="icona_assegna_contatti"><a href="--------------"><i class="fa fa-link fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								*/
/* 						</div>*/
/* */
/* 					</nav>*/
/* {% endblock %}*/
