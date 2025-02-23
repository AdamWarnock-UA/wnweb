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

/* @particles/copyright.html.twig */
class __TwigTemplate_4679e3e1954971cf0e1a51699396c81102b839a1fe00704b886dc1d87d164dd8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", [])), [0 => "now", 1 => ""])) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", []))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", [])), [0 => "now", 1 => ""])) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", []))));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = [])
    {
        // line 7
        echo "    &copy;
    ";
        // line 8
        if ((($context["start_date"] ?? null) != ($context["end_date"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["start_date"] ?? null));
            echo " - ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, ($context["end_date"] ?? null));
        echo "
    ";
        // line 10
        echo $this->getAttribute(($context["particle"] ?? null), "owner", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 9,  50 => 8,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% set start_date = particle.date.start|trim in ['now', ''] ? 'now'|date('Y') : particle.date.start|e %}
{% set end_date = particle.date.end|trim in ['now', ''] ? 'now'|date('Y') : particle.date.end|e %}

{% block particle %}
    &copy;
    {% if (start_date != end_date) %}{{ start_date|e }} - {% endif %}
    {{ end_date|e }}
    {{ particle.owner|raw }}
{% endblock %}
", "@particles/copyright.html.twig", "/var/www/html/user/plugins/gantry5/engines/nucleus/particles/copyright.html.twig");
    }
}
