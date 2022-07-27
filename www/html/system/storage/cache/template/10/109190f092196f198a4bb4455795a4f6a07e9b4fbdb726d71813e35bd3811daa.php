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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_7a5d9872e57a4e32e6a6fa9bb73dcf57ad26b10cde24083159a2520b5253b103 extends Template
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
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row mb-3\">
        <div class=\"col-sm\">
          ";
        // line 13
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 14
            echo "            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 18
            echo "              ";
            if (($context["images"] ?? null)) {
                // line 19
                echo "                <div>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                </div>
              ";
            }
            // line 25
            echo "            </div>
          ";
        }
        // line 27
        echo "
        </div>
        <div class=\"col-sm\">
          <h1>";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>

          <ul class=\"list-unstyled\">
            ";
        // line 33
        if (($context["manufacturer"] ?? null)) {
            // line 34
            echo "              <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 37
        if (($context["reward"] ?? null)) {
            // line 38
            echo "              <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 40
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " ";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>

          ";
        // line 43
        if (($context["price"] ?? null)) {
            // line 44
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 45
            if ( !($context["special"] ?? null)) {
                // line 46
                echo "                <li>
                  <h2><span class=\"price-new\">";
                // line 47
                echo ($context["price"] ?? null);
                echo "</span></h2>
                </li>
              ";
            } else {
                // line 50
                echo "                <li><span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li><h2><span class=\"price-new\">";
                // line 51
                echo ($context["special"] ?? null);
                echo "</span></h2></li>
              ";
            }
            // line 53
            echo "
              ";
            // line 54
            if (($context["tax"] ?? null)) {
                // line 55
                echo "                <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
              ";
            }
            // line 57
            echo "
              ";
            // line 58
            if (($context["points"] ?? null)) {
                // line 59
                echo "                <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
              ";
            }
            // line 61
            echo "              ";
            if (($context["discounts"] ?? null)) {
                // line 62
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 66
                    echo "                  <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 66);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 66);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "              ";
            }
            // line 69
            echo "            </ul>
          ";
        }
        // line 71
        echo "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 73
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 74
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 76
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <br/>

          <div id=\"product\">
            <form id=\"form-product\">

              ";
        // line 83
        if (($context["options"] ?? null)) {
            // line 84
            echo "            <hr>
              <h3>";
            // line 85
            echo ($context["text_option"] ?? null);
            echo "</h3>
              <div>
                ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 88
                echo "
                  ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 89) == "select")) {
                    // line 90
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 90)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 91);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 92
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 93));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 94
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 94);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 94);
                        echo "
                            ";
                        // line 95
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 95)) {
                            // line 96
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 96);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 96);
                            echo ")
                            ";
                        }
                        // line 97
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 103
                echo "
                  ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 104) == "radio")) {
                    // line 105
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 105)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 107);
                    echo "\">
                        ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 109
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 110)) {
                            echo "<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 110);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 110);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 110);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 111
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 111);
                        echo "
                              ";
                        // line 112
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 112)) {
                            // line 113
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 113);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113);
                            echo ")
                              ";
                        }
                        // line 115
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 122
                echo "
                  ";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 123) == "checkbox")) {
                    // line 124
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 124)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 125);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                    echo "\">

                        ";
                    // line 128
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 128));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 129
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 130);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 130);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 130);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 130);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 131
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 131)) {
                            // line 132
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 132);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 132);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 133
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133);
                        echo "
                              ";
                        // line 134
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134)) {
                            // line 135
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 135);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 135);
                            echo ")
                              ";
                        }
                        // line 136
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "
                      </div>
                      <div id=\"error-option-";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 144
                echo "
                  ";
                // line 145
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 145) == "text")) {
                    // line 146
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 146)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 147);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 151
                echo "
                  ";
                // line 152
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "textarea")) {
                    // line 153
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 153)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 154);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 158
                echo "
                  ";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "file")) {
                    // line 160
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 160)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    echo "\" class=\"btn btn-light btn-block\"><i class=\"fas fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 169
                echo "
                  ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) == "date")) {
                    // line 171
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 171)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 174);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 180
                echo "
                  ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 181) == "datetime")) {
                    // line 182
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 182)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 185);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>

                      <div id=\"error-option-";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 192
                echo "
                  ";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "time")) {
                    // line 194
                    echo "                    <div class=\"mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 197);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 203
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                ";
        }
        // line 206
        echo "
                ";
        // line 207
        if (($context["subscription_plans"] ?? null)) {
            // line 208
            echo "                  <hr/>
                  <h3>";
            // line 209
            echo ($context["text_subscription"] ?? null);
            echo "</h3>

                  <div class=\"mb-3 required\">
                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 213
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 215
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 215);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 215);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                    </select>

                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 220
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 220);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 220);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "
                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>

                  </div>
                ";
        }
        // line 227
        echo "
                <div class=\"mb-3\">
                  <label for=\"input-quantity\" class=\"form-label\">";
        // line 229
        echo ($context["entry_qty"] ?? null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                  <br/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 232
        echo ($context["button_cart"] ?? null);
        echo "</button>
                </div>
                ";
        // line 234
        if ((($context["minimum"] ?? null) > 1)) {
            // line 235
            echo "                  <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 237
        echo "              </div>

              ";
        // line 239
        if (($context["review_status"] ?? null)) {
            // line 240
            echo "                <div class=\"rating\">
                  <p>";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fas fa-stack\"><i class=\"far fa-star fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-1x\"></i><i class=\"far fa-star fa-stack-1x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
                </div>
              ";
        }
        // line 244
        echo "
            </form>
          </div>
        </div>


        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-description\" id=\"description-tab\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 251
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
          ";
        // line 252
        if (($context["attribute_groups"] ?? null)) {
            // line 253
            echo "            <li class=\"nav-item\"><a href=\"#tab-specification\" id=\"specification-tab\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
          ";
        }
        // line 255
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 256
            echo "            <li class=\"nav-item\"><a href=\"#tab-review\" id=\"review-tab\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
          ";
        }
        // line 258
        echo "        </ul>

        <div class=\"tab-content\">
          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\" role=\"tabpanel\" aria-labelledby=\"description-tab\">";
        // line 261
        echo ($context["description"] ?? null);
        echo "</div>
          ";
        // line 262
        if (($context["attribute_groups"] ?? null)) {
            // line 263
            echo "            <div id=\"tab-specification\" class=\"tab-pane fade\" role=\"tabpanel\" aria-labelledby=\"specification-tab\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 267
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 269);
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 273
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 273));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 274
                    echo "                        <tr>
                          <td>";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 275);
                    echo "</td>
                          <td>";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 276);
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "                </table>
              </div>
            </div>
          ";
        }
        // line 285
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 286
            echo "            <div id=\"tab-review\" class=\"tab-pane fade\">
              <form id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 289
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 290
            if (($context["review_guest"] ?? null)) {
                // line 291
                echo "                  <div class=\"mb-3 required\">
                    <label for=\"input-name\" class=\"form-label\">";
                // line 292
                echo ($context["entry_name"] ?? null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                  <div class=\"mb-3 required\">
                    <label for=\"input-review\" class=\"form-label\">";
                // line 296
                echo ($context["entry_review"] ?? null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\"></textarea>
                    <div id=\"error-text\" class=\"invalid-feedback\"></div>
                    <div class=\"invalid-feedback\">";
                // line 298
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label class=\"form-label\">";
                // line 301
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    <div id=\"input-rating\">
                      ";
                // line 303
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
                      &nbsp;
                      <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
                      &nbsp;";
                // line 313
                echo ($context["entry_good"] ?? null);
                echo "
                    </div>
                    <div id=\"error-rating\" class=\"invalid-feedback\"></div>
                  </div>
                  ";
                // line 317
                echo ($context["captcha"] ?? null);
                echo "
                  <div class=\"d-inline-block pt-2 pd-2 w-100\">
                    <div class=\"float-end\">
                      <button type=\"button\" id=\"button-review\" class=\"btn btn-primary\">";
                // line 320
                echo ($context["button_continue"] ?? null);
                echo "</button>
                    </div>
                  </div>
                ";
            } else {
                // line 324
                echo "                  ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 326
            echo "              </form>
            </div>
          ";
        }
        // line 328
        echo "</div>
      </div>


      ";
        // line 332
        if (($context["products"] ?? null)) {
            // line 333
            echo "        <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
          ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 336
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "        </div>
      ";
        }
        // line 340
        echo "
      ";
        // line 341
        if (($context["tags"] ?? null)) {
            // line 342
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 344
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 345
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 345);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 345);
                    echo "</a>,
            ";
                } else {
                    // line 347
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 347);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 347);
                    echo "</a>
            ";
                }
                // line 349
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "        </p>
      ";
        }
        // line 352
        echo "
      ";
        // line 353
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 355
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 371
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function () {
            \$('#button-cart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-cart').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#header-cart').load('index.php?route=common/cart|info');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#review').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/review|review&product_id=";
        // line 417
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
    \$.ajax({
        url: 'index.php?route=product/review|write&product_id=";
        // line 421
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$('#form-review').serialize(),
        beforeSend: function () {
            \$('#button-review').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-review').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-name').val('');
                \$('#input-text').val('');
                \$('input[name=\\'rating\\']:checked').prop('checked', false);
            }
        }
    });
});

\$(document).ready(function () {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

    \$('.date').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    \$('.time').daterangepicker({
        singleDatePicker: true,
        datePicker: false,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'HH:mm'
        }
    }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find('.calendar-table').hide();
    });

    \$('.datetime').daterangepicker({
        singleDatePicker: true,
        autoApply: true,
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'YYYY-MM-DD HH:mm'
        }
    });
});
//--></script>
";
        // line 493
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1286 => 493,  1211 => 421,  1204 => 417,  1155 => 371,  1136 => 355,  1131 => 353,  1128 => 352,  1124 => 350,  1118 => 349,  1110 => 347,  1102 => 345,  1099 => 344,  1095 => 343,  1090 => 342,  1088 => 341,  1085 => 340,  1081 => 338,  1072 => 336,  1068 => 335,  1062 => 333,  1060 => 332,  1054 => 328,  1049 => 326,  1043 => 324,  1036 => 320,  1030 => 317,  1023 => 313,  1010 => 303,  1005 => 301,  999 => 298,  994 => 296,  985 => 292,  982 => 291,  980 => 290,  976 => 289,  971 => 286,  968 => 285,  962 => 281,  955 => 279,  946 => 276,  942 => 275,  939 => 274,  935 => 273,  928 => 269,  924 => 267,  920 => 266,  915 => 263,  913 => 262,  909 => 261,  904 => 258,  898 => 256,  895 => 255,  889 => 253,  887 => 252,  883 => 251,  874 => 244,  853 => 241,  850 => 240,  848 => 239,  844 => 237,  838 => 235,  836 => 234,  831 => 232,  821 => 229,  817 => 227,  810 => 222,  799 => 220,  795 => 219,  791 => 217,  780 => 215,  776 => 214,  772 => 213,  765 => 209,  762 => 208,  760 => 207,  757 => 206,  754 => 205,  747 => 203,  741 => 200,  731 => 197,  724 => 195,  717 => 194,  715 => 193,  712 => 192,  706 => 189,  695 => 185,  688 => 183,  681 => 182,  679 => 181,  676 => 180,  670 => 177,  660 => 174,  653 => 172,  646 => 171,  644 => 170,  641 => 169,  635 => 166,  628 => 164,  614 => 163,  607 => 161,  600 => 160,  598 => 159,  595 => 158,  589 => 155,  575 => 154,  568 => 153,  566 => 152,  563 => 151,  557 => 148,  543 => 147,  536 => 146,  534 => 145,  531 => 144,  525 => 141,  521 => 139,  513 => 136,  506 => 135,  504 => 134,  499 => 133,  486 => 132,  484 => 131,  474 => 130,  471 => 129,  467 => 128,  462 => 126,  458 => 125,  451 => 124,  449 => 123,  446 => 122,  440 => 119,  437 => 118,  429 => 115,  422 => 113,  420 => 112,  415 => 111,  393 => 110,  390 => 109,  386 => 108,  382 => 107,  378 => 106,  371 => 105,  369 => 104,  366 => 103,  360 => 100,  357 => 99,  350 => 97,  343 => 96,  341 => 95,  334 => 94,  330 => 93,  326 => 92,  316 => 91,  309 => 90,  307 => 89,  304 => 88,  300 => 87,  295 => 85,  292 => 84,  290 => 83,  280 => 76,  271 => 74,  263 => 73,  259 => 71,  255 => 69,  252 => 68,  241 => 66,  237 => 65,  232 => 62,  229 => 61,  221 => 59,  219 => 58,  216 => 57,  208 => 55,  206 => 54,  203 => 53,  198 => 51,  193 => 50,  187 => 47,  184 => 46,  182 => 45,  179 => 44,  177 => 43,  168 => 40,  160 => 38,  158 => 37,  151 => 36,  141 => 34,  139 => 33,  133 => 30,  128 => 27,  124 => 25,  120 => 23,  103 => 21,  99 => 20,  96 => 19,  93 => 18,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "/var/www/html/catalog/view/template/product/product.twig");
    }
}
