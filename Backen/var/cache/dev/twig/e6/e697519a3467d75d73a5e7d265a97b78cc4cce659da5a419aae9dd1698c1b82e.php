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

/* add_person/index.html.twig */
class __TwigTemplate_5008c9fcc2012e2bef6f18dc4549f4ceb0dab08c10f5120fc79d3fe2606221b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_person/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_person/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "add_person/index.html.twig", 1);
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

        echo "Add Person";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <div class=\"topnav\">
        <a href=\"/\">Home</a>
        <a class=\"active\" href=\"addperson\">Add Customer</a>
        <a href=\"login\" id=\"log\">Login</a>
    </div>

    <div>
        <div>
            <div class=\"addperson-page\">
                <div class=\"addperson\">
                    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21) != 0)) {
            // line 22
            echo "                        <h2>Update information</h2>
                        ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 23, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 24, $this->source); })()), "_token", [], "any", false, false, false, 24), 'row');
            echo "
                        ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25)]);
            echo "
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 26, $this->source); })()), "firstname", [], "any", false, false, false, 26)]);
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27)]);
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 28, $this->source); })()), "mail", [], "any", false, false, false, 28), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 28, $this->source); })()), "mail", [], "any", false, false, false, 28)]);
            echo "
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 29, $this->source); })()), "note", [], "any", false, false, false, 29), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 29, $this->source); })()), "note", [], "any", false, false, false, 29)]);
            echo "
                        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 30, $this->source); })()), "submit", [], "any", false, false, false, 30), 'row', ["label" => "Update customer"]);
            echo "
                    ";
        } else {
            // line 32
            echo "                        <h2>Add a customer</h2>
                        ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["personForm"]) || array_key_exists("personForm", $context) ? $context["personForm"] : (function () { throw new RuntimeError('Variable "personForm" does not exist.', 33, $this->source); })()), 'form');
            echo "
                    ";
        }
        // line 35
        echo "                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "add_person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 35,  146 => 33,  143 => 32,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  107 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add Person{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

    <div class=\"topnav\">
        <a href=\"/\">Home</a>
        <a class=\"active\" href=\"addperson\">Add Customer</a>
        <a href=\"login\" id=\"log\">Login</a>
    </div>

    <div>
        <div>
            <div class=\"addperson-page\">
                <div class=\"addperson\">
                    {% if person.id != 0 %}
                        <h2>Update information</h2>
                        {{ form_start(personForm) }}
                        {{ form_row(personForm._token) }}
                        {{ form_row(personForm.name, {'value': person.name}) }}
                        {{ form_row(personForm.firstname, {'value': person.firstname}) }}
                        {{ form_row(personForm.phone, {'value': person.phone}) }}
                        {{ form_row(personForm.mail, {'value': person.mail}) }}
                        {{ form_row(personForm.note, {'value': person.note}) }}
                        {{ form_row(personForm.submit, {'label': 'Update customer'}) }}
                    {% else %}
                        <h2>Add a customer</h2>
                        {{ form(personForm) }}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "add_person/index.html.twig", "/Users/maximedenis/TennisPlayer/templates/add_person/index.html.twig");
    }
}
