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

/* partials/header.html.twig */
class __TwigTemplate_3168a419326b507e9dc069c49af67c503709937b5cd688e74b5cfa4917e23e0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!--
<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Grav</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"menu_list\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 17
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 18
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menu_list_item\"><a href=\"/";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                ";
            }
            // line 20
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </div>
    </div>
</nav>
-->


<div class=\"menu\">
\t<div class=\"container_close_menu container\">
\t\t<div class=\"row\">
\t\t\t<button class=\"close_menu\" id=\"close_menu\"></button>
\t\t</div>
\t</div>
\t<div class=\"flex_go\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"site_menu\">
\t\t\t\t\t <ul class=\"menu_list\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 40
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 41
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 42
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menu_list_item\"><a href=\"/";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                ";
            }
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  112 => 44,  102 => 42,  99 => 41,  96 => 40,  92 => 39,  72 => 21,  66 => 20,  56 => 18,  53 => 17,  50 => 16,  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!--
<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Grav</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"menu_list\">
                {% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }} menu_list_item\"><a href=\"/{{ page.url }}\">{{ page.menu }}</a></li>
                {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
</nav>
-->


<div class=\"menu\">
\t<div class=\"container_close_menu container\">
\t\t<div class=\"row\">
\t\t\t<button class=\"close_menu\" id=\"close_menu\"></button>
\t\t</div>
\t</div>
\t<div class=\"flex_go\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"site_menu\">
\t\t\t\t\t <ul class=\"menu_list\">
                {% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }} menu_list_item\"><a href=\"/{{ page.url }}\">{{ page.menu }}</a></li>
                {% endif %}
                {% endfor %}
            </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "partials/header.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\themes\\my-theme\\templates\\partials\\header.html.twig");
    }
}
