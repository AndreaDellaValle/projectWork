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
        $__internal_b7c4934b522c4cfe20958a219b4323f7e0033fcac1ae013ed9060a90cde853b6 = $this->env->getExtension("native_profiler");
        $__internal_b7c4934b522c4cfe20958a219b4323f7e0033fcac1ae013ed9060a90cde853b6->enter($__internal_b7c4934b522c4cfe20958a219b4323f7e0033fcac1ae013ed9060a90cde853b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_attive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7c4934b522c4cfe20958a219b4323f7e0033fcac1ae013ed9060a90cde853b6->leave($__internal_b7c4934b522c4cfe20958a219b4323f7e0033fcac1ae013ed9060a90cde853b6_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dbcce4e839fe8f84ec73e59910d159d994ac9e8e0700eb88dfd1318053609f7 = $this->env->getExtension("native_profiler");
        $__internal_9dbcce4e839fe8f84ec73e59910d159d994ac9e8e0700eb88dfd1318053609f7->enter($__internal_9dbcce4e839fe8f84ec73e59910d159d994ac9e8e0700eb88dfd1318053609f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9dbcce4e839fe8f84ec73e59910d159d994ac9e8e0700eb88dfd1318053609f7->leave($__internal_9dbcce4e839fe8f84ec73e59910d159d994ac9e8e0700eb88dfd1318053609f7_prof);

    }

    // line 16
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_6597d6df3ae4b36a977998a6715f38fd8c77cba054e1d8d041d0f09cc16864cd = $this->env->getExtension("native_profiler");
        $__internal_6597d6df3ae4b36a977998a6715f38fd8c77cba054e1d8d041d0f09cc16864cd->enter($__internal_6597d6df3ae4b36a977998a6715f38fd8c77cba054e1d8d041d0f09cc16864cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 17
        echo "

\t\t\t\t<div class=\"titolo_contenuti\">Campagne attive

\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>
\t\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaCampagne"]) ? $context["listaCampagne"] : $this->getContext($context, "listaCampagne")));
        foreach ($context['_seq'] as $context["_key"] => $context["singolaCampagna"]) {
            // line 29
            echo "\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["singolaCampagna"], "getCampagnaContatto", array(), "method"), "html", null, true);
            echo "</div>
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['singolaCampagna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t\t</nav>

";
        
        $__internal_6597d6df3ae4b36a977998a6715f38fd8c77cba054e1d8d041d0f09cc16864cd->leave($__internal_6597d6df3ae4b36a977998a6715f38fd8c77cba054e1d8d041d0f09cc16864cd_prof);

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
        return array (  107 => 46,  87 => 32,  82 => 29,  78 => 28,  65 => 17,  59 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/* 				<div class="titolo_contenuti">Campagne attive*/
/* */
/* 				</div>*/
/* 					<div class="informazioni_operatori_campagne cf">*/
/* 						<div class="profilo_operatori_campagne">Campagna</div>*/
/* 						<div class="campagne_passate">Status</div> */
/* 					</div>*/
/* 					<nav class="contenitore_elenco_operatori">*/
/* 						*/
/* 					{% for singolaCampagna in listaCampagne %}*/
/* 						<a href="operatore_visualizza_campagna">*/
/* 							<div class="tendina_1_operatore cf">*/
/* 								<div class="icona_tendina"><i class="fa fa-flag fa-11x"></i></div>*/
/* 								<div class="nomeEcognome">{{ singolaCampagna.getCampagnaContatto() }}</div>*/
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
/* 					{% endfor %}*/
/* */
/* 					</nav>*/
/* */
/* {% endblock %}*/
/* */
