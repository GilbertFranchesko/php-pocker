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

/* install/view/template/install/step_3.twig */
class __TwigTemplate_4032a23f72c9a19539a004038e5631f5cfe22b4b251cb135bc4c236be0f6306c extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-right\">";
        // line 5
        echo ($context["language"] ?? null);
        echo "</div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
  </div>
  <div class=\"container\">
    ";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-bs-dismiss=\"alert\"></button>
      </div>
    ";
        }
        // line 15
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-cogs\"></i> ";
        // line 16
        echo ($context["text_step_3"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 18
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <fieldset>
            <legend>";
        // line 20
        echo ($context["text_db_connection"] ?? null);
        echo "</legend>
            <div class=\"row\">
              <div class=\"col-md-4  order-md-2\">
                <div class=\"alert alert-info\">
                  <p>";
        // line 24
        echo ($context["text_help"] ?? null);
        echo "</p>
                  <ul class=\"text-info\">
                    <li><strong><a href=\"https://docs.cpanel.net/cpanel/databases/mysql-databases/\" target=\"_blank\">";
        // line 26
        echo ($context["text_cpanel"] ?? null);
        echo "</a></strong></li>
                    <li><strong><a href=\"https://support.plesk.com/hc/en-us/articles/115004263014-How-to-create-a-database-in-Plesk\" target=\"_blank\">";
        // line 27
        echo ($context["text_plesk"] ?? null);
        echo "</a></strong></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-8 order-md-1\">
                <div class=\"form-row\">
                  <div class=\"form-group col\">
                    <label for=\"input-db-driver\" class=\"col-form-label\">";
        // line 34
        echo ($context["entry_db_driver"] ?? null);
        echo "</label> <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["drivers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["driver"]) {
            // line 36
            echo "                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 36);
            echo "\"";
            if ((($context["db_driver"] ?? null) == twig_get_attribute($this->env, $this->source, $context["driver"], "value", [], "any", false, false, false, 36))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["driver"], "text", [], "any", false, false, false, 36);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['driver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </select>
                    ";
        // line 39
        if (($context["error_db_driver"] ?? null)) {
            // line 40
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_driver"] ?? null);
            echo "</div>
                    ";
        }
        // line 42
        echo "                  </div>
                  <div class=\"form-group col required\">
                    <label for=\"input-db-hostname\" class=\"col-form-label\">";
        // line 44
        echo ($context["entry_db_hostname"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_hostname\" value=\"";
        echo ($context["db_hostname"] ?? null);
        echo "\" id=\"input-db-hostname\" class=\"form-control\"/>
                    ";
        // line 45
        if (($context["error_db_hostname"] ?? null)) {
            // line 46
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_hostname"] ?? null);
            echo "</div>
                    ";
        }
        // line 48
        echo "                  </div>
                </div>
                <div class=\"form-row\">
                  <div class=\"form-group col required\">
                    <label for=\"input-db-username\" class=\"col-form-label\">";
        // line 52
        echo ($context["entry_db_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_username\" value=\"";
        echo ($context["db_username"] ?? null);
        echo "\" id=\"input-db-username\" class=\"form-control\"/>
                    ";
        // line 53
        if (($context["error_db_username"] ?? null)) {
            // line 54
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_username"] ?? null);
            echo "</div>
                    ";
        }
        // line 56
        echo "                  </div>
                  <div class=\"form-group col\">
                    <label for=\"input-db-password\" class=\"col-form-label\">";
        // line 58
        echo ($context["entry_db_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"db_password\" value=\"";
        echo ($context["db_password"] ?? null);
        echo "\" id=\"input-db-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                  </div>
                </div>
                <div class=\"form-row\">
                  <div class=\"form-group col-6 required\">
                    <label for=\"input-db-database\" class=\"col-form-label\">";
        // line 63
        echo ($context["entry_db_database"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_database\" value=\"";
        echo ($context["db_database"] ?? null);
        echo "\" id=\"input-db-database\" class=\"form-control\"/>
                    ";
        // line 64
        if (($context["error_db_database"] ?? null)) {
            // line 65
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_database"] ?? null);
            echo "</div>
                    ";
        }
        // line 67
        echo "                  </div>
                  <div class=\"form-group col-3\">
                    <label for=\"input-db-prefix\" class=\"col-form-label\">";
        // line 69
        echo ($context["entry_db_prefix"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_prefix\" value=\"";
        echo ($context["db_prefix"] ?? null);
        echo "\" id=\"input-db-prefix\" class=\"form-control\"/>
                    ";
        // line 70
        if (($context["error_db_prefix"] ?? null)) {
            // line 71
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_prefix"] ?? null);
            echo "</div>
                    ";
        }
        // line 73
        echo "                  </div>
                  <div class=\"form-group col-3 required\">
                    <label for=\"input-db-port\" class=\"col-form-label\">";
        // line 75
        echo ($context["entry_db_port"] ?? null);
        echo "</label> <input type=\"text\" name=\"db_port\" value=\"";
        echo ($context["db_port"] ?? null);
        echo "\" id=\"input-db-port\" class=\"form-control\"/>
                    ";
        // line 76
        if (($context["error_db_port"] ?? null)) {
            // line 77
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_db_port"] ?? null);
            echo "</div>
                    ";
        }
        // line 79
        echo "                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 85
        echo ($context["text_db_administration"] ?? null);
        echo "</legend>
            <div class=\"form-row\">
              <div class=\"form-group col required\">
                <label for=\"input-username\" class=\"col-form-label\">";
        // line 88
        echo ($context["entry_username"] ?? null);
        echo "</label> <input type=\"text\" name=\"username\" value=\"";
        echo ($context["username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                ";
        // line 89
        if (($context["error_username"] ?? null)) {
            // line 90
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
                ";
        }
        // line 92
        echo "              </div>
              <div class=\"form-group col required\">
                <label for=\"input-password\" class=\"col-form-label\">";
        // line 94
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"text\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                ";
        // line 95
        if (($context["error_password"] ?? null)) {
            // line 96
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                ";
        }
        // line 98
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label for=\"input-email\" class=\"col-form-label\">";
        // line 101
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 102
        if (($context["error_email"] ?? null)) {
            // line 103
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 105
        echo "            </div>
          </fieldset>
          <div class=\"row mt-3\">
            <div class=\"col\"><a href=\"";
        // line 108
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
            <div class=\"col text-right\"><input type=\"submit\" value=\"";
        // line 109
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 116
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "install/view/template/install/step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 116,  316 => 109,  310 => 108,  305 => 105,  299 => 103,  297 => 102,  291 => 101,  286 => 98,  280 => 96,  278 => 95,  272 => 94,  268 => 92,  262 => 90,  260 => 89,  254 => 88,  248 => 85,  240 => 79,  234 => 77,  232 => 76,  226 => 75,  222 => 73,  216 => 71,  214 => 70,  208 => 69,  204 => 67,  198 => 65,  196 => 64,  190 => 63,  180 => 58,  176 => 56,  170 => 54,  168 => 53,  162 => 52,  156 => 48,  150 => 46,  148 => 45,  142 => 44,  138 => 42,  132 => 40,  130 => 39,  127 => 38,  112 => 36,  108 => 35,  104 => 34,  94 => 27,  90 => 26,  85 => 24,  78 => 20,  73 => 18,  68 => 16,  65 => 15,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/install/step_3.twig", "/var/www/html/install/view/template/install/step_3.twig");
    }
}
