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

/* search.html */
class __TwigTemplate_d5370d334aeacd9f85140a778529f981 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "search.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search.php\" class=\"mt-4\" method=\"GET\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input class=\"border p-2\" id=\"search\" name=\"search\" type=\"search\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["search_term"] ?? null), "html", null, true);
        echo "\">
            <button class=\"bg-blue-500 text-white p-2\" type=\"submit\">Search</button>
        </form>
    </section>
    <section class=\"flex flex-wrap p-8\" id=\"content\">
        ";
        // line 17
        $this->loadTemplate("article-list.html", "search.html", 17)->display($context);
        // line 18
        echo "    </section>
    ";
        // line 19
        if ((($context["count"] ?? null) > ($context["per_page"] ?? null))) {
            // line 20
            echo "    <section class=\"flex justify-center items-center p-4\">
        <nav>
            <ul class=\"flex justify-center items-center\">
                ";
            // line 23
            if ((($context["current_page"] ?? null) > 1)) {
                // line 24
                echo "                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"";
                // line 26
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "search.php?search=";
                echo twig_escape_filter($this->env, ($context["search_term"] ?? null), "html", null, true);
                echo "&per_page=";
                echo twig_escape_filter($this->env, ($context["per_page"] ?? null), "html", null, true);
                echo "&offset=";
                echo twig_escape_filter($this->env, (($context["offset"] ?? null) - ($context["per_page"] ?? null)), "html", null, true);
                echo "\">Previous</a>
                </li>
                ";
            }
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["total_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                <li>
                    <a class=\"p-2 text-white  ";
                // line 31
                if (($context["i"] == ($context["current_page"] ?? null))) {
                    echo " bg-pink-600 ";
                } else {
                    echo " bg-blue-500 ";
                }
                echo " ) ?>\"
                       href=\"";
                // line 32
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "search.php?search=";
                echo twig_escape_filter($this->env, ($context["search_term"] ?? null), "html", null, true);
                echo "&per_page=";
                echo twig_escape_filter($this->env, ($context["per_page"] ?? null), "html", null, true);
                echo "&offset=";
                echo twig_escape_filter($this->env, (($context["i"] - 1) * ($context["per_page"] ?? null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
            if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
                // line 36
                echo "                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"search.php?search=";
                // line 38
                echo twig_escape_filter($this->env, ($context["search_term"] ?? null), "html", null, true);
                echo "&per_page=";
                echo twig_escape_filter($this->env, ($context["per_page"] ?? null), "html", null, true);
                echo "&offset=";
                echo twig_escape_filter($this->env, (($context["offset"] ?? null) + ($context["per_page"] ?? null)), "html", null, true);
                echo "\">Next</a>
                </li>
                ";
            }
            // line 41
            echo "            </ul>
        </nav>
    </section>
    ";
        }
        // line 45
        echo "</main>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  172 => 45,  166 => 41,  156 => 38,  152 => 36,  149 => 35,  132 => 32,  124 => 31,  121 => 30,  116 => 29,  104 => 26,  100 => 24,  98 => 23,  93 => 20,  91 => 19,  88 => 18,  86 => 17,  78 => 12,  73 => 10,  68 => 7,  64 => 6,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}
<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"{{doc_root}}search.php\" class=\"mt-4\" method=\"GET\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input class=\"border p-2\" id=\"search\" name=\"search\" type=\"search\" value=\"{{search_term}}\">
            <button class=\"bg-blue-500 text-white p-2\" type=\"submit\">Search</button>
        </form>
    </section>
    <section class=\"flex flex-wrap p-8\" id=\"content\">
        {% include 'article-list.html' %}
    </section>
    {% if count > per_page %}
    <section class=\"flex justify-center items-center p-4\">
        <nav>
            <ul class=\"flex justify-center items-center\">
                {% if current_page > 1 %}
                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"{{doc_root}}search.php?search={{search_term}}&per_page={{per_page}}&offset={{offset - per_page}}\">Previous</a>
                </li>
                {% endif %}
                {% for i in 1..total_pages %}
                <li>
                    <a class=\"p-2 text-white  {% if ( i == current_page )%} bg-pink-600 {% else %} bg-blue-500 {% endif %} ) ?>\"
                       href=\"{{doc_root}}search.php?search={{search_term}}&per_page={{per_page}}&offset={{(i - 1 ) * per_page}}\">{{i}}</a>
                </li>
                {% endfor %}
                {% if (current_page < total_pages) %}
                <li class=\"m-2\">
                    <a class=\"p-2 bg-blue-500 text-white\"
                       href=\"search.php?search={{search_term}}&per_page={{per_page}}&offset={{offset + per_page}}\">Next</a>
                </li>
                {% endif %}
            </ul>
        </nav>
    </section>
    {% endif %}
</main>

{% endblock %}", "search.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/search.html");
    }
}
