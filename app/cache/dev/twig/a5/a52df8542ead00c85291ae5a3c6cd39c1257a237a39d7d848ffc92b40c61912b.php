<?php

/* AppBundle::header.html.twig */
class __TwigTemplate_bc3c8f25a85ab5e574154319ad91832da3160dcbd0afdc20f6b4d7c600c7af49 extends Twig_Template
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
        $__internal_88b1f38502ac7a02baa73e57c9b8a0e22aecde3f03ccf0fa9358535fe8bf6114 = $this->env->getExtension("native_profiler");
        $__internal_88b1f38502ac7a02baa73e57c9b8a0e22aecde3f03ccf0fa9358535fe8bf6114->enter($__internal_88b1f38502ac7a02baa73e57c9b8a0e22aecde3f03ccf0fa9358535fe8bf6114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::header.html.twig"));

        // line 1
        echo "<div class=\"contenitore_header cf\">
\t\t<p class = \"logo\"><a href=\"admin_index\"><img src= \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo_bianco.png"), "html", null, true);
        echo "\" width=\"100\" height=\"40\"></a></p>
\t\t\t<div class=\"header_info\">
\t\t\t\t<p class = \"admin\"><span class=\"scrittaAdmin\">Admin:</span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t<p id = \"dataEora\"></p>
\t\t\t</div>
\t\t
\t\t\t<div class=\"contenitore_logout\">
\t\t\t\t<a href=\"login\"><p class = \"logout\">ESCI</p>
\t\t\t\t<i class=\"fa fa-sign-out fa-1x\"></i></a>
\t\t\t</div>
\t\t\t<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var month = today.getMonth()+1;
\tvar day = today.getDate();
    var year = today.getFullYear();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('dataEora').innerHTML =
    \"<strong>Data: </strong>\" + day + \"-\" + month + \"-\" + year + \"<b>&nbsp;&nbsp; Ora:&nbsp;</b>\" +  h + \":\" + m + \":\" + s + \"&nbsp;&nbsp;\";
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = \"0\" + i};  // add zero in front of numbers < 10
    return i;
}

</script>
</div>";
        
        $__internal_88b1f38502ac7a02baa73e57c9b8a0e22aecde3f03ccf0fa9358535fe8bf6114->leave($__internal_88b1f38502ac7a02baa73e57c9b8a0e22aecde3f03ccf0fa9358535fe8bf6114_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <div class="contenitore_header cf">*/
/* 		<p class = "logo"><a href="admin_index"><img src= "{{ asset ('img/logo_bianco.png') }}" width="100" height="40"></a></p>*/
/* 			<div class="header_info">*/
/* 				<p class = "admin"><span class="scrittaAdmin">Admin:</span> {{ app.user.username }}</p>*/
/* 				<p id = "dataEora"></p>*/
/* 			</div>*/
/* 		*/
/* 			<div class="contenitore_logout">*/
/* 				<a href="login"><p class = "logout">ESCI</p>*/
/* 				<i class="fa fa-sign-out fa-1x"></i></a>*/
/* 			</div>*/
/* 			<script>*/
/* function startTime() {*/
/*     var today = new Date();*/
/*     var h = today.getHours();*/
/*     var m = today.getMinutes();*/
/*     var s = today.getSeconds();*/
/*     var month = today.getMonth()+1;*/
/* 	var day = today.getDate();*/
/*     var year = today.getFullYear();*/
/*     m = checkTime(m);*/
/*     s = checkTime(s);*/
/*     document.getElementById('dataEora').innerHTML =*/
/*     "<strong>Data: </strong>" + day + "-" + month + "-" + year + "<b>&nbsp;&nbsp; Ora:&nbsp;</b>" +  h + ":" + m + ":" + s + "&nbsp;&nbsp;";*/
/*     var t = setTimeout(startTime, 500);*/
/* }*/
/* function checkTime(i) {*/
/*     if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10*/
/*     return i;*/
/* }*/
/* */
/* </script>*/
/* </div>*/
