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

/* home/home.html.twig */
class __TwigTemplate_ab9e4ff879ba5deca74104c5fa6e9bbed96ac9d1d88c8d5ff3d603ca9fbf9785 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 1
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"topnav\">
    <a class=\"active\" href=\"/\">Home</a>
    <a href=\"addperson\">Add Customer</a>
    <a href=\"login\" id=\"log\">Login</a>
</div>

<div class=\"divTable\">
    <div class=\"divTableBody\">
        <div class=\"divTableRow\">
            <div class=\"divTableCell\">
                <form method=\"get\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <h4>Choose a customer:</h4>
                    <select name=\"customer\" onchange=\"this.form.submit()\">
                        <option value=\"0\">-- Select customer --</option>
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 21
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </select>
                </form>
            </div>
        </div>
        <div class=\"divTableRow\">
            <div class=\"divTableCell\">
                ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29) != 0)) {
            // line 30
            echo "                    <div class=\"container\">
                        <div class=\"divTable\">
                            <div class=\"divTableBody\">
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <img src=\"Picture/iconprofile.png\" height=\"150\" width=\"150\">
                                    </div>
                                </div>
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <h1>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 40, $this->source); })()), "firstname", [], "any", false, false, false, 40), "html", null, true);
            echo "</h1>
                                        <h4>Phone: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 41, $this->source); })()), "phone", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                                        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 42, $this->source); })()), "mail", [], "any", false, false, false, 42) != null)) {
                // line 43
                echo "                                            <h4>Mail: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 43, $this->source); })()), "mail", [], "any", false, false, false, 43), "html", null, true);
                echo "</h4>
                                        ";
            }
            // line 45
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 45, $this->source); })()), "note", [], "any", false, false, false, 45) != null)) {
                // line 46
                echo "                                            <h4>Note:</h4>
                                            <p>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 47, $this->source); })()), "note", [], "any", false, false, false, 47), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 49
            echo "                                    </div>
                                </div>
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <div class=\"divTable\">
                                            <div class=\"divTableBody\">
                                                <div class=\"divTableRow\">
                                                    <div class=\"divTableCell\">
                                                        <form method=\"get\" action=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_person");
            echo "\">
                                                            <button id=\"btn\" name=\"idpers\" type=\"submit\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
            echo " }\">
                                                                Update information
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class=\"divTableCell\">
                                                        <form method=\"get\" action=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_racket");
            echo "\">
                                                            <button id=\"btn\" name=\"idpers\" type=\"submit\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pers"]) || array_key_exists("pers", $context) ? $context["pers"] : (function () { throw new RuntimeError('Variable "pers" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
            echo " }\">
                                                                Add a racket
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rackets"]) || array_key_exists("rackets", $context) ? $context["rackets"] : (function () { throw new RuntimeError('Variable "rackets" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["racket"]) {
                // line 76
                echo "                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <div class=\"divTable\">
                                            <div class=\"divTableBody\">
                                                <div class=\"divTableRow\">
                                                    <div id=\"racketdiv\" class=\"divTableCell\">
                                                        <div class=\"divTable\">
                                                            <div class=\"divTableBody\">
                                                                <div class=\"divTableRow\">
                                                                    <div class=\"divTableCell\">
                                                                        <h2>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racket"], "brand", [], "any", false, false, false, 86), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racket"], "model", [], "any", false, false, false, 86), "html", null, true);
                echo "</h2>
                                                                    </div>
                                                                    <div class=\"divTableCell\">
                                                                        <form method=\"get\" action=\"";
                // line 89
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_string");
                echo "\">
                                                                            <button id=\"btnrac\" name=\"racket\" type=\"submit\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racket"], "id", [], "any", false, false, false, 90), "html", null, true);
                echo " }\">
                                                                                Add a string
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["racket"], "idString", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["string"]) {
                    // line 97
                    echo "                                                                    <div id=\"stringTable\" class=\"divTableRow\">
                                                                        <div class=\"divTableCell\">
                                                                            <h4>";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["string"], "date", [], "any", false, false, false, 99), "format", [0 => "d-m-Y"], "method", false, false, false, 99), "html", null, true);
                    echo "</h4>
                                                                        </div>
                                                                        <div class=\"divTableCell\">
                                                                            <h6>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["string"], "brand", [], "any", false, false, false, 102), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["string"], "model", [], "any", false, false, false, 102), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["string"], "gauge", [], "any", false, false, false, 102), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["string"], "longTension", [], "any", false, false, false, 102), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["string"], "crossTension", [], "any", false, false, false, 102), "html", null, true);
                    echo "</h6>
                                                                        </div>
                                                                    </div>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['string'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 119
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 119,  258 => 115,  244 => 106,  226 => 102,  220 => 99,  216 => 97,  212 => 96,  203 => 90,  199 => 89,  191 => 86,  179 => 76,  175 => 75,  162 => 65,  158 => 64,  149 => 58,  145 => 57,  135 => 49,  130 => 47,  127 => 46,  124 => 45,  118 => 43,  116 => 42,  112 => 41,  106 => 40,  94 => 30,  92 => 29,  84 => 23,  71 => 21,  67 => 20,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"topnav\">
    <a class=\"active\" href=\"/\">Home</a>
    <a href=\"addperson\">Add Customer</a>
    <a href=\"login\" id=\"log\">Login</a>
</div>

<div class=\"divTable\">
    <div class=\"divTableBody\">
        <div class=\"divTableRow\">
            <div class=\"divTableCell\">
                <form method=\"get\" action=\"{{ path('home') }}\">
                    <h4>Choose a customer:</h4>
                    <select name=\"customer\" onchange=\"this.form.submit()\">
                        <option value=\"0\">-- Select customer --</option>
                        {% for person in people %}
                            <option value=\"{{ person.id}}\">{{ person.name}} {{ person.firstname }}</option>
                        {% endfor %}
                    </select>
                </form>
            </div>
        </div>
        <div class=\"divTableRow\">
            <div class=\"divTableCell\">
                {% if pers.id != 0 %}
                    <div class=\"container\">
                        <div class=\"divTable\">
                            <div class=\"divTableBody\">
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <img src=\"Picture/iconprofile.png\" height=\"150\" width=\"150\">
                                    </div>
                                </div>
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <h1>{{ pers.name }} {{ pers.firstname }}</h1>
                                        <h4>Phone: {{ pers.phone }}</h4>
                                        {% if pers.mail != null %}
                                            <h4>Mail: {{ pers.mail }}</h4>
                                        {% endif %}
                                        {% if pers.note != null %}
                                            <h4>Note:</h4>
                                            <p>{{ pers.note }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <div class=\"divTable\">
                                            <div class=\"divTableBody\">
                                                <div class=\"divTableRow\">
                                                    <div class=\"divTableCell\">
                                                        <form method=\"get\" action=\"{{ path('add_person') }}\">
                                                            <button id=\"btn\" name=\"idpers\" type=\"submit\" value=\"{{ pers.id }} }\">
                                                                Update information
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class=\"divTableCell\">
                                                        <form method=\"get\" action=\"{{ path('add_racket') }}\">
                                                            <button id=\"btn\" name=\"idpers\" type=\"submit\" value=\"{{ pers.id }} }\">
                                                                Add a racket
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% for racket in rackets %}
                                <div class=\"divTableRow\">
                                    <div class=\"divTableCell\">
                                        <div class=\"divTable\">
                                            <div class=\"divTableBody\">
                                                <div class=\"divTableRow\">
                                                    <div id=\"racketdiv\" class=\"divTableCell\">
                                                        <div class=\"divTable\">
                                                            <div class=\"divTableBody\">
                                                                <div class=\"divTableRow\">
                                                                    <div class=\"divTableCell\">
                                                                        <h2>{{ racket.brand }} {{ racket.model }}</h2>
                                                                    </div>
                                                                    <div class=\"divTableCell\">
                                                                        <form method=\"get\" action=\"{{ path('add_string') }}\">
                                                                            <button id=\"btnrac\" name=\"racket\" type=\"submit\" value=\"{{ racket.id }} }\">
                                                                                Add a string
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                {% for string in racket.idString %}
                                                                    <div id=\"stringTable\" class=\"divTableRow\">
                                                                        <div class=\"divTableCell\">
                                                                            <h4>{{ string.date.format('d-m-Y') }}</h4>
                                                                        </div>
                                                                        <div class=\"divTableCell\">
                                                                            <h6>{{ string.brand }} - {{ string.model }} - {{ string.gauge }}: {{ string.longTension }}/{{ string.crossTension }}</h6>
                                                                        </div>
                                                                    </div>
                                                                {% endfor %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "home/home.html.twig", "/Users/maximedenis/TennisPlayer/templates/home/home.html.twig");
    }
}
