<?php

/* AppBundle::operatore_index.html.twig */
class __TwigTemplate_d759559c1df6cec3758ede32c6a29fbe3a31e44a9997f917d3e30841292a2fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout_operatori.html.twig", "AppBundle::operatore_index.html.twig", 1);
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
        $__internal_cb20883811e45de4412c52039f25f67deb97762526897ad251e974dac44a395a = $this->env->getExtension("native_profiler");
        $__internal_cb20883811e45de4412c52039f25f67deb97762526897ad251e974dac44a395a->enter($__internal_cb20883811e45de4412c52039f25f67deb97762526897ad251e974dac44a395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb20883811e45de4412c52039f25f67deb97762526897ad251e974dac44a395a->leave($__internal_cb20883811e45de4412c52039f25f67deb97762526897ad251e974dac44a395a_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd7908791439b2589efe50b6ffe192e2099a2572f01517c01b4904643f6d1d48 = $this->env->getExtension("native_profiler");
        $__internal_cd7908791439b2589efe50b6ffe192e2099a2572f01517c01b4904643f6d1d48->enter($__internal_cd7908791439b2589efe50b6ffe192e2099a2572f01517c01b4904643f6d1d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cd7908791439b2589efe50b6ffe192e2099a2572f01517c01b4904643f6d1d48->leave($__internal_cd7908791439b2589efe50b6ffe192e2099a2572f01517c01b4904643f6d1d48_prof);

    }

    // line 16
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_9b3571361f400ebb3335753f7c2ede51a37fadacb16f3ba7e6c66f50df7312bd = $this->env->getExtension("native_profiler");
        $__internal_9b3571361f400ebb3335753f7c2ede51a37fadacb16f3ba7e6c66f50df7312bd->enter($__internal_9b3571361f400ebb3335753f7c2ede51a37fadacb16f3ba7e6c66f50df7312bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 17
        echo "
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
\t\t\t\t

";
        
        $__internal_9b3571361f400ebb3335753f7c2ede51a37fadacb16f3ba7e6c66f50df7312bd->leave($__internal_9b3571361f400ebb3335753f7c2ede51a37fadacb16f3ba7e6c66f50df7312bd_prof);

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
/* 				*/
/* */
/* {% endblock %}*/
