<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_649f6be894aef9d909d9796a194bc9f889d23d5a0a0aa0ee5124e0db09383976 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "    </head>

      <body>

        ";
        // line 51
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "
        <div class=\"container\">
            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
    </body>
    ";
        // line 63
        $this->displayBlock('bottom', $context, $blocks);
        // line 64
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"/";
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/style.css", 1 => 101], "method");
        // line 23
        echo "
        ";
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/libs.min.css", 1 => 100], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/media.css", 1 => 100], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/fonts.css", 1 => 100], "method");
        // line 28
        echo "
            ";
        // line 29
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101], "method");
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/libs.min.js"], "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scripts.js"], "method");
        // line 36
        echo "
            ";
        // line 37
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 38
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"], "method");
            // line 39
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 40
            echo "            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
    }

    // line 63
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  195 => 54,  189 => 42,  186 => 41,  183 => 40,  180 => 39,  177 => 38,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  160 => 32,  154 => 29,  151 => 28,  148 => 27,  145 => 26,  142 => 25,  139 => 23,  136 => 22,  134 => 21,  131 => 20,  126 => 44,  124 => 32,  121 => 31,  119 => 20,  110 => 18,  104 => 16,  98 => 14,  95 => 13,  89 => 11,  83 => 9,  81 => 8,  76 => 5,  73 => 4,  69 => 64,  67 => 63,  57 => 55,  55 => 54,  51 => 52,  48 => 51,  42 => 46,  40 => 4,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% if header.description %}
        <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
        <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% endif %}
        <link rel=\"icon\" type=\"image/png\" href=\"/{{ theme_url }}/images/favicon.png\">

        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

        {% block stylesheets %}
            {# Bootstrap core CSS #}
            {% do assets.add('theme://css/style.css',101) %}

        {# Custom styles for this theme #}
            {% do assets.add('theme://css/libs.min.css',100) %}
            {% do assets.add('theme://css/media.css',100) %}
            {% do assets.add('theme://css/fonts.css',100) %}

            {{ assets.css() }}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}
            {% do assets.add('theme://js/libs.min.js') %}
            {% do assets.add('theme://js/scripts.js') %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
            {% endif %}

            {{ assets.js() }}
        {% endblock %}

        {% endblock head %}
    </head>

      <body>

        {# include the header + navigation #}
        {% include 'partials/header.html.twig' %}

        <div class=\"container\">
            {% block content %}{% endblock %}
        </div>

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
    </body>
    {% block bottom %}{% endblock %}
</html>", "partials/base.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\themes\\my-theme\\templates\\partials\\base.html.twig");
    }
}
