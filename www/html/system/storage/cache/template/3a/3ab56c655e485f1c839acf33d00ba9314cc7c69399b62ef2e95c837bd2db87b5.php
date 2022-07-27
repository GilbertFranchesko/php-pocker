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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_f3d8622ab575c71c6dbb75dc35aec7e7dc8eb349e873aab22e2cc9973f45d528 extends Template
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
        echo "<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-inverse btn-block dropdown-toggle\"><i class=\"fas fa-shopping-cart\"></i> ";
        // line 2
        echo ($context["text_items"] ?? null);
        echo "</button>

  <ul class=\"dropdown-menu dropdown-menu-right\" style=\"width: 500px;\">
    ";
        // line 5
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 6
            echo "      <li>

        <table class=\"table table-sm table-striped\">
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "            <tr>
              <td class=\"text-center\">";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
              <td class=\"text-start\"><a href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a>
                ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 15
                        echo "                    <br/>
                    <small> - ";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 16);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 16);
                        echo "</small>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                  <br/>
                  <small> - ";
                    // line 21
                    echo ($context["text_subscription"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 21);
                    echo "</small>
                ";
                }
                // line 23
                echo "              </td>
              <td class=\"text-end\">x ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-end\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 25);
                echo "</td>
              <td class=\"text-center\">
                <form action=\"";
                // line 27
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 28);
                echo "\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 29
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-times-circle\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 35
                echo "            <tr>
              <td class=\"text-center\"></td>
              <td class=\"text-start\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 37);
                echo "</td>
              <td class=\"text-end\">x&nbsp;1</td>
              <td class=\"text-end\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 39);
                echo "</td>
              <td class=\"text-center\">
                <form action=\"";
                // line 41
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 42);
                echo "\"/>
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 43
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-times-circle\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </table>

        <div>
          <table class=\"table table-sm table-bordered\">
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 53
                echo "              <tr>
                <td class=\"text-end\"><strong>";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 54);
                echo "</strong></td>
                <td class=\"text-end\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 55);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </table>
          <p class=\"text-end\"><a href=\"";
            // line 59
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fas fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fas fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
        </div>

      </li>
    ";
        } else {
            // line 64
            echo "      <li>
        <p class=\"text-center\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      </li>
    ";
        }
        // line 68
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 68,  235 => 65,  232 => 64,  218 => 59,  215 => 58,  206 => 55,  202 => 54,  199 => 53,  195 => 52,  189 => 48,  178 => 43,  174 => 42,  168 => 41,  163 => 39,  158 => 37,  154 => 35,  149 => 34,  138 => 29,  134 => 28,  128 => 27,  123 => 25,  119 => 24,  116 => 23,  109 => 21,  106 => 20,  103 => 19,  100 => 18,  90 => 16,  87 => 15,  82 => 14,  80 => 13,  74 => 12,  60 => 11,  57 => 10,  53 => 9,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "/var/www/html/catalog/view/template/common/cart.twig");
    }
}
