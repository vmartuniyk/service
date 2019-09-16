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

/* partials/header_second.html.twig */
class __TwigTemplate_99b943bab04f3f8255d06e67265655f282737de4808933ac6cb5bc2aceb3f0e6 extends \Twig\Template
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
        echo " <header class=\"header_other_page\">
        <div class=\"in_to_header_other_pg flex_go\">
            <div class=\"container\">
                <div class=\"row flex_go\">
                    <div class=\"burger_left_go\">
                        <div class=\"menu-icons-inside styling_menu_hambg\">
                            <div class=\"menu-icon menu-icon-main\">
                                <span class=\"menu-icon-create\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"logo_center_hd_g\">
                        <a href=\"/\">
                            <img src=\"images/logo_top_header.svg\" alt=\"\" width=\"259\">
                        </a>
                    </div>
                        <div class=\"menu_language_g\">
                            <ul class=\"flex_go flex_right\">
                                <li class=\"current\">
                                    <a href=\"#\">EN</a>
                                </li>
                                <li>
                                    <a href=\"#\">De</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </header>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "                        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 44
                echo "                        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 45
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menu_list_item\"><a href=\"/";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                        ";
            }
            // line 47
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header_second.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 48,  93 => 47,  83 => 45,  80 => 44,  77 => 43,  73 => 42,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <header class=\"header_other_page\">
        <div class=\"in_to_header_other_pg flex_go\">
            <div class=\"container\">
                <div class=\"row flex_go\">
                    <div class=\"burger_left_go\">
                        <div class=\"menu-icons-inside styling_menu_hambg\">
                            <div class=\"menu-icon menu-icon-main\">
                                <span class=\"menu-icon-create\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"logo_center_hd_g\">
                        <a href=\"/\">
                            <img src=\"images/logo_top_header.svg\" alt=\"\" width=\"259\">
                        </a>
                    </div>
                        <div class=\"menu_language_g\">
                            <ul class=\"flex_go flex_right\">
                                <li class=\"current\">
                                    <a href=\"#\">EN</a>
                                </li>
                                <li>
                                    <a href=\"#\">De</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </header>
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
</div>", "partials/header_second.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\themes\\mytheme\\templates\\partials\\header_second.html.twig");
    }
}
