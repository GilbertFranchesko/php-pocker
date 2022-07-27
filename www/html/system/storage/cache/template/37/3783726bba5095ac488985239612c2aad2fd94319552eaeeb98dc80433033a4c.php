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

/* admin/view/template/catalog/product_list.twig */
class __TwigTemplate_7e0da2bdfdcaabdf8bc10360b4b7c880a7d966dc024c65340147b7844eb05ff8 extends Template
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
        echo "<form id=\"form-product\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#product\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-center\">";
        // line 7
        echo ($context["column_image"] ?? null);
        echo "</td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\"><a href=\"";
        // line 9
        echo ($context["sort_model"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_model"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\"><a href=\"";
        // line 10
        echo ($context["sort_price"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_price"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\"><a href=\"";
        // line 11
        echo ($context["sort_quantity"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_quantity"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if (($context["products"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 18)) {
                    echo " class=\"table-warning\"";
                }
                echo ">
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-center\"><img src=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 20);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "\" class=\"img-thumbnail\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"text-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</small>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"text-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</small>
\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start d-none d-lg-table-cell\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 28);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30)) {
                    echo "<span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 35
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37) <= 0)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 38);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 39
$context["product"], "quantity", [], "any", false, false, false, 39) <= 5)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 47);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\"><i class=\"fas fa-caret-down\"></i></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\"><a href=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 49);
                    echo "\" class=\"dropdown-item\"><i class=\"fas fa-plus\"></i> ";
                    echo ($context["text_variant_add"] ?? null);
                    echo "</a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 52);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 59
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 62
        echo "\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-start\">";
        // line 66
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 67
        echo ($context["results"] ?? null);
        echo "</div>
\t\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 67,  258 => 66,  252 => 62,  246 => 59,  243 => 58,  240 => 57,  232 => 54,  224 => 52,  216 => 49,  209 => 47,  206 => 46,  204 => 45,  200 => 43,  194 => 42,  188 => 40,  186 => 39,  181 => 38,  179 => 37,  175 => 35,  169 => 34,  164 => 32,  157 => 30,  152 => 28,  149 => 27,  143 => 26,  137 => 24,  135 => 23,  130 => 21,  124 => 20,  120 => 19,  113 => 18,  108 => 17,  106 => 16,  99 => 12,  87 => 11,  75 => 10,  63 => 9,  51 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/catalog/product_list.twig", "/var/www/html/admin/view/template/catalog/product_list.twig");
    }
}
