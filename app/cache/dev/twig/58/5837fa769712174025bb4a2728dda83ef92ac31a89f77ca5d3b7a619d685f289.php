<?php

/* AppBundle::admin_index.html.twig */
class __TwigTemplate_ec6fed8b50e4d27ea84cd398cbeafbf13c7a5aee4c1dafe1c6f7e72a713d5787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle::admin_index.html.twig", 1);
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
        $__internal_ef3a61698f0d20e6cbc76f5a5b15472ff21465d7ddcec0ae53156e6c3c73aa38 = $this->env->getExtension("native_profiler");
        $__internal_ef3a61698f0d20e6cbc76f5a5b15472ff21465d7ddcec0ae53156e6c3c73aa38->enter($__internal_ef3a61698f0d20e6cbc76f5a5b15472ff21465d7ddcec0ae53156e6c3c73aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::admin_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3a61698f0d20e6cbc76f5a5b15472ff21465d7ddcec0ae53156e6c3c73aa38->leave($__internal_ef3a61698f0d20e6cbc76f5a5b15472ff21465d7ddcec0ae53156e6c3c73aa38_prof);

    }

    // line 2
    public function block_contenuti($context, array $blocks = array())
    {
        $__internal_b710a655a02eaf06c202c5ce6d0b803db355e3be91454536623fb56e35d9d2fa = $this->env->getExtension("native_profiler");
        $__internal_b710a655a02eaf06c202c5ce6d0b803db355e3be91454536623fb56e35d9d2fa->enter($__internal_b710a655a02eaf06c202c5ce6d0b803db355e3be91454536623fb56e35d9d2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuti"));

        // line 3
        echo "\t\t\t\t\t<div class=\"titolo_contenuti\">Ultime Attività
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"Dettagli_campagna.html\">
\t\t\t\t\t<div class=\"tendina_1\"><i>Campagna 1</i><i class=\"fa fa-flag fa-1x\"></i></br>Azienda 1
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"Dettagli_campagna.html\">
\t\t\t\t\t<div class=\"tendina_2\"><i>Campagna 2</i><i class=\"fa fa-flag fa-1x\"></i></br>Azienda 2
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"Dettagli_campagna.html\">
\t\t\t\t\t<div class=\"tendina_3\"><i>Campagna 3</i><i class=\"fa fa-flag fa-1x\"></i></br>Azienda 3
\t\t\t\t\t\t<div class=\"contenuto_tendine\"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%
\t\t\t\t\t\t\t<div class=\"barre_completamento\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></a>
\t\t\t\t</div>

";
        
        $__internal_b710a655a02eaf06c202c5ce6d0b803db355e3be91454536623fb56e35d9d2fa->leave($__internal_b710a655a02eaf06c202c5ce6d0b803db355e3be91454536623fb56e35d9d2fa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::admin_index.html.twig";
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
/* 					<div class="titolo_contenuti">Ultime Attività*/
/* 					</div>*/
/* 					<a href="Dettagli_campagna.html">*/
/* 					<div class="tendina_1"><i>Campagna 1</i><i class="fa fa-flag fa-1x"></i></br>Azienda 1*/
/* 						<div class="contenuto_tendine"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 					<a href="Dettagli_campagna.html">*/
/* 					<div class="tendina_2"><i>Campagna 2</i><i class="fa fa-flag fa-1x"></i></br>Azienda 2*/
/* 						<div class="contenuto_tendine"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 					<a href="Dettagli_campagna.html">*/
/* 					<div class="tendina_3"><i>Campagna 3</i><i class="fa fa-flag fa-1x"></i></br>Azienda 3*/
/* 						<div class="contenuto_tendine"><b>Operatori</b> </br>- Giuliano</br>- Marco</br></br><b>Data inizio:</b> 08/09/2015</br></br>Completamento 100%*/
/* 							<div class="barre_completamento"></div>*/
/* 						</div>*/
/* 					</div></a>*/
/* 				</div>*/
/* */
/* {% endblock %}*/
