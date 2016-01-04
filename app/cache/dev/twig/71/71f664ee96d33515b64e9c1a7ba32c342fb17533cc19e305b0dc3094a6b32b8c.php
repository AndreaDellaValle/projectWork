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
        $__internal_9f0ef9b8d9c43b531c14605e8be14893bfc0b2977edc47d3f4d08007f4189882 = $this->env->getExtension("native_profiler");
        $__internal_9f0ef9b8d9c43b531c14605e8be14893bfc0b2977edc47d3f4d08007f4189882->enter($__internal_9f0ef9b8d9c43b531c14605e8be14893bfc0b2977edc47d3f4d08007f4189882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_passate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0ef9b8d9c43b531c14605e8be14893bfc0b2977edc47d3f4d08007f4189882->leave($__internal_9f0ef9b8d9c43b531c14605e8be14893bfc0b2977edc47d3f4d08007f4189882_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67ebc89c6d2a85506166b212d6d095c0faf363b9dcb05aa6cb714001dac702c4 = $this->env->getExtension("native_profiler");
        $__internal_67ebc89c6d2a85506166b212d6d095c0faf363b9dcb05aa6cb714001dac702c4->enter($__internal_67ebc89c6d2a85506166b212d6d095c0faf363b9dcb05aa6cb714001dac702c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_67ebc89c6d2a85506166b212d6d095c0faf363b9dcb05aa6cb714001dac702c4->leave($__internal_67ebc89c6d2a85506166b212d6d095c0faf363b9dcb05aa6cb714001dac702c4_prof);

    }

    // line 16
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_7f08f3ad7ef3fae3e6838ae89ba840103ffcdc2967a5088f600df3ec8b83b8bd = $this->env->getExtension("native_profiler");
        $__internal_7f08f3ad7ef3fae3e6838ae89ba840103ffcdc2967a5088f600df3ec8b83b8bd->enter($__internal_7f08f3ad7ef3fae3e6838ae89ba840103ffcdc2967a5088f600df3ec8b83b8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 17
        echo "\t\t\t\t
\t\t\t
\t\t<aside class=\"contenitore_principale cf\">
\t\t\t\t<div class=\"titolo_contenuti\">Campagne concluse</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>  
\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>\t
\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-pause fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><a href=\"indirizzo pagina profilo\"><i class=\"fa fa-flag fa-11x\"></i></a></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\"><i>Campagna</br>Azienda</i></div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"contenitore_icone\">

\t\t\t\t\t\t\t\t\t\t<div class=\"icona_rimuovere\"><a href=\"------------\"><i class=\"fa fa-check-circle fa-1x\"></i></a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t</nav>
\t\t\t\t\t
\t\t</aside>
\t\t";
        
        $__internal_7f08f3ad7ef3fae3e6838ae89ba840103ffcdc2967a5088f600df3ec8b83b8bd->leave($__internal_7f08f3ad7ef3fae3e6838ae89ba840103ffcdc2967a5088f600df3ec8b83b8bd_prof);

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
/* 		<aside class="contenitore_principale cf">*/
/* 				<div class="titolo_contenuti">Campagne concluse</div>*/
/* 					<div class="informazioni_operatori_campagne cf">*/
/* 						<div class="profilo_operatori_campagne">Campagna</div>  */
/* 					<div class="campagne_passate">Status</div> */
/* 					</div>	*/
/* 				<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-pause fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* */
/* 						<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><a href="indirizzo pagina profilo"><i class="fa fa-flag fa-11x"></i></a></div>*/
/* 								<div class="nomeEcognome"><i>Campagna</br>Azienda</i></div>*/
/* 								<div>*/
/* 									*/
/* 										<div class="contenitore_icone">*/
/* */
/* 										<div class="icona_rimuovere"><a href="------------"><i class="fa fa-check-circle fa-1x"></i></a></div>*/
/* 										</div>*/
/* 								</div>*/
/* */
/* 						</div>*/
/* */
/* 				</nav>*/
/* 					*/
/* 		</aside>*/
/* 		{% endblock %}*/
/* */
