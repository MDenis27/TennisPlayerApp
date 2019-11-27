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

/* home/profile.html.twig */
class __TwigTemplate_982424c7b4702694a0e69f488e879ad14647f9809e58f6ce3b6b3d89e24d9b3d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tennis Player";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "home/home.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"avatar-flip\">
            <img src=\"Picture/iconprofile.png\" height=\"150\" width=\"150\">
        </div>
        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

        <div class=\"infoCustomer\">
            <h4>Phone: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 16, $this->source); })()), "phone", [], "any", false, false, false, 16), "html", null, true);
        echo "</h4>
            ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 17, $this->source); })()), "mail", [], "any", false, false, false, 17) == null)) {
            // line 18
            echo "                <h4>Mail: none</h4>
            ";
        } else {
            // line 20
            echo "                <h4>Mail: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 20, $this->source); })()), "mail", [], "any", false, false, false, 20), "html", null, true);
            echo "</h4>
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rackets"]) || array_key_exists("rackets", $context) ? $context["rackets"] : (function () { throw new RuntimeError('Variable "rackets" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["racket"]) {
            // line 25
            echo "            <div id=\"racketdiv\">
                <h2>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racket"], "brand", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racket"], "model", [], "any", false, false, false, 26), "html", null, true);
            echo "</h2>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 29,  135 => 26,  132 => 25,  128 => 24,  124 => 22,  118 => 20,  114 => 18,  112 => 17,  108 => 16,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tennis Player{% endblock %}

{% block body %}

    {{ include('home/home.html.twig') }}

    <div class=\"container\">
        <div class=\"avatar-flip\">
            <img src=\"Picture/iconprofile.png\" height=\"150\" width=\"150\">
        </div>
        <h1>{{ pers.name }} {{ pers.firstname }}</h1>

        <div class=\"infoCustomer\">
            <h4>Phone: {{ pers.phone }}</h4>
            {% if pers.mail == null %}
                <h4>Mail: none</h4>
            {% else  %}
                <h4>Mail: {{ pers.mail }}</h4>
            {% endif %}
        </div>

        {% for racket in rackets %}
            <div id=\"racketdiv\">
                <h2>{{ racket.brand }} {{ racket.model }}</h2>
            </div>
        {% endfor %}
    </div>


{% endblock %}", "home/profile.html.twig", "/Users/maximedenis/TennisPlayer/templates/home/profile.html.twig");
    }
}
