<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/opencart/admin/view/template/dashboard/map_info.twig */
class __TwigTemplate_69d71f221c5edf27ec0915f7a37499cbf4478860eef1b3ec68298194298a3c44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fas fa-globe\"></i> ";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"card-body\">
    <div id=\"vmap\" style=\"width: 100%; height: 260px;\"></div>
  </div>
</div>
<link type=\"text/css\" href=\"view/javascript/jquery/jqvmap/jqvmap.css\" rel=\"stylesheet\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/jquery.vmap.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/jquery/jqvmap/maps/jquery.vmap.world.js\"></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/opencart/dashboard/map|map&user_token=";
        // line 13
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tsuccess: function(json) {
\t\t\tdata = [];

\t\t\tfor (i in json) {
\t\t\t\tdata[i] = json[i]['total'];
\t\t\t}

\t\t\t\$('#vmap').vectorMap({
\t\t\t\tmap: 'world_en',
\t\t\t\tbackgroundColor: '#FFFFFF',
\t\t\t\tborderColor: '#FFFFFF',
\t\t\t\tcolor: '#9FD5F1',
\t\t\t\thoverOpacity: 0.7,
\t\t\t\tselectedColor: '#666666',
\t\t\t\tenableZoom: true,
\t\t\t\tshowTooltip: true,
\t\t\t\tvalues: data,
\t\t\t\tnormalizeFunction: 'polynomial',
\t\t\t\tonLabelShow: function(event, label, code) {
\t\t\t\t\tif (json[code]) {
\t\t\t\t\t\tlabel.html('<strong>' + label.text() + '</strong><br />' + '";
        // line 35
        echo ($context["text_order"] ?? null);
        echo " ' + json[code]['total'] + '<br />' + '";
        echo ($context["text_sale"] ?? null);
        echo " ' + json[code]['amount']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/dashboard/map_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  54 => 13,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/dashboard/map_info.twig", "/var/www/html/extension/opencart/admin/view/template/dashboard/map_info.twig");
    }
}
