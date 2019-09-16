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

/* partials/base_second.html.twig */
class __TwigTemplate_868f58fd49863b3f70bae82f165733e0d0f0138fdbeb69fa85fbbc258659aa5c extends \Twig\Template
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
        // line 48
        echo "    </head>

      <body>

        ";
        // line 53
        echo "        ";
        $this->loadTemplate("partials/header_second.html.twig", "partials/base_second.html.twig", 53)->display($context);
        // line 54
        echo "
        
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "       

        ";
        // line 60
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base_second.html.twig", 60)->display($context);
        // line 61
        echo "        
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
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 21
        echo "            ";
        // line 22
        echo "            

        ";
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/fonts.css", 1 => 100], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/libs.min.css", 1 => 100], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/style.css", 1 => 101], "method");
        // line 28
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/media.css", 1 => 100], "method");
        // line 29
        echo "           

            ";
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101], "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/libs.min.js"], "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scripts.js"], "method");
        // line 38
        echo "
            ";
        // line 39
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 40
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"], "method");
            // line 41
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 42
            echo "            ";
        }
        // line 43
        echo "
            ";
        // line 44
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
    }

    // line 63
    public function block_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base_second.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 63,  198 => 56,  192 => 44,  189 => 43,  186 => 42,  183 => 41,  180 => 40,  178 => 39,  175 => 38,  172 => 37,  169 => 36,  166 => 35,  163 => 34,  157 => 31,  153 => 29,  150 => 28,  147 => 27,  144 => 26,  141 => 25,  137 => 22,  135 => 21,  132 => 20,  127 => 46,  125 => 34,  122 => 33,  120 => 20,  111 => 18,  105 => 16,  99 => 14,  96 => 13,  90 => 11,  84 => 9,  82 => 8,  77 => 5,  74 => 4,  70 => 64,  68 => 63,  64 => 61,  61 => 60,  57 => 57,  55 => 56,  51 => 54,  48 => 53,  42 => 48,  40 => 4,  35 => 1,);
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
            

        {# Custom styles for this theme #}
            {% do assets.add('theme://css/fonts.css',100) %}
            {% do assets.add('theme://css/libs.min.css',100) %}
            {% do assets.add('theme://css/style.css',101) %}
            {% do assets.add('theme://css/media.css',100) %}
           

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
        {% include 'partials/header_second.html.twig' %}

        
            {% block content %}{% endblock %}
       

        {# include the footer#}
        {% include 'partials/footer.html.twig' %}
        
    </body>
    {% block bottom %}{% endblock %}
</html>", "partials/base_second.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\themes\\mytheme\\templates\\partials\\base_second.html.twig");
    }
}
