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
        $__internal_693cfdf830e91afbdfbd01dd0ccaf8ad8d050950a49e072f76994ca92db970d8 = $this->env->getExtension("native_profiler");
        $__internal_693cfdf830e91afbdfbd01dd0ccaf8ad8d050950a49e072f76994ca92db970d8->enter($__internal_693cfdf830e91afbdfbd01dd0ccaf8ad8d050950a49e072f76994ca92db970d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::operatore_campagne_attive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693cfdf830e91afbdfbd01dd0ccaf8ad8d050950a49e072f76994ca92db970d8->leave($__internal_693cfdf830e91afbdfbd01dd0ccaf8ad8d050950a49e072f76994ca92db970d8_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f203db3080bfe9d0a7efed578ac2f90b2e0dcbcf399b2647c62f270bb27c6d8d = $this->env->getExtension("native_profiler");
        $__internal_f203db3080bfe9d0a7efed578ac2f90b2e0dcbcf399b2647c62f270bb27c6d8d->enter($__internal_f203db3080bfe9d0a7efed578ac2f90b2e0dcbcf399b2647c62f270bb27c6d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
\t\t<nav class=\"contenitore_menu\">
\t\t\t<!--<p class=\"home\"><a href=\"operatore_index\">HOME</a></p>
\t\t\t-->
\t\t\t<p class=\"campagne\"><a href=\"operatore_campagne_attive\">CAMPAGNE</a></p>

\t\t\t<!--<p class=\"campagne\"><a href=\"operatore_campagne_passate\">CAMPAGNE CONCLUSE</a></p>-->
\t\t</nav>

";
        
        $__internal_f203db3080bfe9d0a7efed578ac2f90b2e0dcbcf399b2647c62f270bb27c6d8d->leave($__internal_f203db3080bfe9d0a7efed578ac2f90b2e0dcbcf399b2647c62f270bb27c6d8d_prof);

    }

    // line 14
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_bd066c01f88d75cbafe45bf6e4ac2532866c707ce2d6c1ab651edee3572d865e = $this->env->getExtension("native_profiler");
        $__internal_bd066c01f88d75cbafe45bf6e4ac2532866c707ce2d6c1ab651edee3572d865e->enter($__internal_bd066c01f88d75cbafe45bf6e4ac2532866c707ce2d6c1ab651edee3572d865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 15
        echo "

\t\t\t\t<div class=\"titolo_contenuti\">Campagne 

\t\t\t\t</div>
\t\t\t\t\t<div class=\"informazioni_operatori_campagne cf\">
\t\t\t\t\t\t<div class=\"profilo_operatori_campagne\">Campagna</div>
\t\t\t\t\t\t<div class=\"campagne_passate\">Status</div> 
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"contenitore_elenco_operatori\">
\t\t\t\t\t\t
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listaCampagne"]) ? $context["listaCampagne"] : $this->getContext($context, "listaCampagne")));
        foreach ($context['_seq'] as $context["_key"] => $context["singolaCampagna"]) {
            // line 27
            echo "\t\t\t\t\t\t<a href=\"operatore_visualizza_campagna\">
\t\t\t\t\t\t\t<div class=\"tendina_1_operatore cf\">
\t\t\t\t\t\t\t\t<div class=\"icona_tendina\"><i class=\"fa fa-flag fa-11x\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"nomeEcognome\">";
            // line 30
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
        // line 44
        echo "
\t\t\t\t\t</nav>

";
        
        $__internal_bd066c01f88d75cbafe45bf6e4ac2532866c707ce2d6c1ab651edee3572d865e->leave($__internal_bd066c01f88d75cbafe45bf6e4ac2532866c707ce2d6c1ab651edee3572d865e_prof);

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
        return array (  105 => 44,  85 => 30,  80 => 27,  76 => 26,  63 => 15,  57 => 14,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout_operatori.html.twig" %}*/
/* */
/* {% block menu %}*/
/* */
/* 		<nav class="contenitore_menu">*/
/* 			<!--<p class="home"><a href="operatore_index">HOME</a></p>*/
/* 			-->*/
/* 			<p class="campagne"><a href="operatore_campagne_attive">CAMPAGNE</a></p>*/
/* */
/* 			<!--<p class="campagne"><a href="operatore_campagne_passate">CAMPAGNE CONCLUSE</a></p>-->*/
/* 		</nav>*/
/* */
/* {% endblock %}*/
/* {% block contenuti %}*/
/* */
/* */
/* 				<div class="titolo_contenuti">Campagne */
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
