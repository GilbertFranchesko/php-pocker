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

/* install/view/template/install/step_2.twig */
class __TwigTemplate_0c9a854016ae017f3dc09e2864ba8613e5826da586737bd7244b52a4337df4f7 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"float-right\">";
        // line 5
        echo ($context["language"] ?? null);
        echo "</div>
\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t";
        // line 10
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-bs-dismiss=\"alert\"></button>
\t\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 17
        echo ($context["text_step_2"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 20
        echo ($context["text_install_php"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"35%\"><b>";
        // line 24
        echo ($context["text_setting"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 25
        echo ($context["text_current"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 26
        echo ($context["text_required"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"15%\" class=\"text-center\"><b>";
        // line 27
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 32
        echo ($context["text_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 33
        echo ($context["php_version"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>8.0+</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 36
        if (($context["version"] ?? null)) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fas fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fas fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 42
        if (($context["register_globals"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 43
        echo ($context["text_global"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 44
        if (($context["register_globals"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 49
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        if ( !($context["register_globals"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fas fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fas fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 57
        if (($context["magic_quotes_gpc"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 58
        echo ($context["text_magic"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 59
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 64
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
        // line 66
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 72
        if ( !($context["file_uploads"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 73
        echo ($context["text_file_upload"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 74
        if (($context["file_uploads"] ?? null)) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 79
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 80
        if (($context["file_uploads"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 86
        if (($context["session_auto_start"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 87
        echo ($context["text_session"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 88
        if (($context["session_auto_start"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 93
        echo ($context["text_off"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 94
        if ( !($context["session_auto_start"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 104
        echo ($context["text_install_extension"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td width=\"35%\"><b>";
        // line 108
        echo ($context["text_extension"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 109
        echo ($context["text_current"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"25%\"><b>";
        // line 110
        echo ($context["text_required"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td width=\"15%\" class=\"text-center\"><b>";
        // line 111
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr";
        // line 115
        if ( !($context["db"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 116
        echo ($context["text_db"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 117
        if (($context["db"] ?? null)) {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 122
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 123
        if (($context["db"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 127
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 129
        if ( !($context["gd"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 130
        echo ($context["text_gd"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 131
        if (($context["gd"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 135
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 136
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 137
        if (($context["gd"] ?? null)) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 141
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 143
        if ( !($context["curl"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 144
        echo ($context["text_curl"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 145
        if (($context["curl"] ?? null)) {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 149
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 150
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 151
        if (($context["curl"] ?? null)) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 155
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 157
        if ( !($context["openssl"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 158
        echo ($context["text_openssl"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 159
        if (($context["openssl"] ?? null)) {
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 163
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 164
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 165
        if (($context["openssl"] ?? null)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 169
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 171
        if ( !($context["zlib"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 172
        echo ($context["text_zlib"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 173
        if (($context["zlib"] ?? null)) {
            // line 174
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 178
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 179
        if (($context["zlib"] ?? null)) {
            // line 180
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 182
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 185
        if ( !($context["zip"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 186
        echo ($context["text_zip"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 187
        if (($context["zip"] ?? null)) {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_on"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["text_off"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 191
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 192
        echo ($context["text_on"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 193
        if (($context["zip"] ?? null)) {
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 197
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        // line 199
        if ( !($context["iconv"] ?? null)) {
            // line 200
            echo "\t\t\t\t\t\t\t\t\t<tr";
            if ( !($context["mbstring"] ?? null)) {
                echo " class=\"table-danger\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 201
            echo ($context["text_mbstring"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 202
            if (($context["mbstring"] ?? null)) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo ($context["text_on"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo ($context["text_off"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 206
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 207
            echo ($context["text_on"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 208
            if (($context["mbstring"] ?? null)) {
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"><i class=\"fa fa-check\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 212
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>";
        // line 219
        echo ($context["text_install_file"] ?? null);
        echo "</legend>
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 223
        echo ($context["text_file"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t\t<td><b>";
        // line 224
        echo ($context["text_status"] ?? null);
        echo "</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr";
        // line 228
        if (($context["error_catalog_config"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 229
        echo ($context["catalog_config"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 230
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
            echo ($context["error_catalog_config"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 234
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr";
        // line 236
        if (($context["error_admin_config"] ?? null)) {
            echo " class=\"table-danger\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t<td>";
        // line 237
        echo ($context["admin_config"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 238
        if ( !($context["error_admin_config"] ?? null)) {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 241
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
            echo ($context["error_admin_config"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 242
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"col\"><a href=\"";
        // line 248
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"col text-right\"><input type=\"submit\" value=\"";
        // line 249
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\"/></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
        // line 256
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/view/template/install/step_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  759 => 256,  749 => 249,  743 => 248,  735 => 242,  729 => 241,  723 => 239,  721 => 238,  717 => 237,  711 => 236,  707 => 234,  701 => 233,  695 => 231,  693 => 230,  689 => 229,  683 => 228,  676 => 224,  672 => 223,  665 => 219,  659 => 215,  654 => 212,  650 => 211,  646 => 209,  644 => 208,  640 => 207,  637 => 206,  631 => 205,  625 => 203,  623 => 202,  619 => 201,  612 => 200,  610 => 199,  606 => 197,  602 => 196,  598 => 194,  596 => 193,  592 => 192,  589 => 191,  583 => 190,  577 => 188,  575 => 187,  571 => 186,  565 => 185,  561 => 183,  557 => 182,  553 => 180,  551 => 179,  547 => 178,  544 => 177,  538 => 176,  532 => 174,  530 => 173,  526 => 172,  520 => 171,  516 => 169,  512 => 168,  508 => 166,  506 => 165,  502 => 164,  499 => 163,  493 => 162,  487 => 160,  485 => 159,  481 => 158,  475 => 157,  471 => 155,  467 => 154,  463 => 152,  461 => 151,  457 => 150,  454 => 149,  448 => 148,  442 => 146,  440 => 145,  436 => 144,  430 => 143,  426 => 141,  422 => 140,  418 => 138,  416 => 137,  412 => 136,  409 => 135,  403 => 134,  397 => 132,  395 => 131,  391 => 130,  385 => 129,  381 => 127,  377 => 126,  373 => 124,  371 => 123,  367 => 122,  364 => 121,  358 => 120,  352 => 118,  350 => 117,  346 => 116,  340 => 115,  333 => 111,  329 => 110,  325 => 109,  321 => 108,  314 => 104,  306 => 98,  302 => 97,  298 => 95,  296 => 94,  292 => 93,  289 => 92,  283 => 91,  277 => 89,  275 => 88,  271 => 87,  265 => 86,  261 => 84,  257 => 83,  253 => 81,  251 => 80,  247 => 79,  244 => 78,  238 => 77,  232 => 75,  230 => 74,  226 => 73,  220 => 72,  216 => 70,  212 => 69,  208 => 67,  206 => 66,  201 => 64,  198 => 63,  192 => 62,  186 => 60,  184 => 59,  180 => 58,  174 => 57,  170 => 55,  166 => 54,  162 => 52,  160 => 51,  155 => 49,  152 => 48,  146 => 47,  140 => 45,  138 => 44,  134 => 43,  128 => 42,  124 => 40,  120 => 39,  116 => 37,  114 => 36,  108 => 33,  104 => 32,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  77 => 20,  71 => 17,  65 => 15,  57 => 11,  55 => 10,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/view/template/install/step_2.twig", "/var/www/html/install/view/template/install/step_2.twig");
    }
}
