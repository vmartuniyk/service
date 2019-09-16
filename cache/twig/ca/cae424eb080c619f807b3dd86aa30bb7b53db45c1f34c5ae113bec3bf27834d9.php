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

/* forgot.html.twig */
class __TwigTemplate_c9ecdfe83103fb2ffe9b21beb021dd9cb0f5b08bb09acd985369cb5a2c75fbc0 extends \Twig\Template
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
        $this->loadTemplate("forgot.html.twig", "forgot.html.twig", 1, "393315915")->display(twig_array_merge($context, ["title" => "Grav Forgot Password"]));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Forgot Password'} %}

    {% block form %}
        {% for field in form.fields %}
            {% if field.type %}
                <div>
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS\"|tu }}</button>
        </div>
    {% endblock %}

{% endembed %}

", "forgot.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\plugins\\admin\\themes\\grav\\templates\\forgot.html.twig");
    }
}


/* forgot.html.twig */
class __TwigTemplate_c9ecdfe83103fb2ffe9b21beb021dd9cb0f5b08bb09acd985369cb5a2c75fbc0___393315915 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/login.html.twig", "forgot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "            ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 6
                echo "                <div>
                    ";
                // line 7
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forgot.html.twig", 7)->display($context);
                // line 8
                echo "                </div>
            ";
            }
            // line 10
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS"), "html", null, true);
        echo "</button>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 12,  155 => 11,  141 => 10,  137 => 8,  135 => 7,  132 => 6,  129 => 5,  111 => 4,  108 => 3,  98 => 1,  32 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title:'Grav Forgot Password'} %}

    {% block form %}
        {% for field in form.fields %}
            {% if field.type %}
                <div>
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}
        <div class=\"form-actions primary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_ADMIN.LOGIN_BTN_SEND_INSTRUCTIONS\"|tu }}</button>
        </div>
    {% endblock %}

{% endembed %}

", "forgot.html.twig", "E:\\OSPanel\\domains\\grav-admin.loc\\user\\plugins\\admin\\themes\\grav\\templates\\forgot.html.twig");
    }
}
