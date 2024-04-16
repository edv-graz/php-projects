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

/* admin/category.html */
class __TwigTemplate_4bdb61389dabb629ab32703fd3feb796 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/category.php?id=";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"w-full grid\" method=\"POST\">
        ";
        // line 6
        if (twig_test_empty(($context["id"] ?? null))) {
            // line 7
            echo "        <h2 class=\"text-3xl text-blue-500 mb-8\">New Category</h2>
        ";
        } else {
            // line 9
            echo "        <h2 class=\"text-3xl text-blue-500 mb-8\">Edit Category</h2>
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12))) {
            // line 13
            echo "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\"><";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
        ";
        }
        // line 15
        echo "
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"name\" name=\"name\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            <span class=\"text-red-500\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"description\" name=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</textarea>
            <span class=\"text-red-500\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
        </div>
        <div class=\"p-4\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "navigation", [], "any", false, false, false, 30)) {
            // line 31
            echo "            <input checked class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        } else {
            // line 34
            echo "            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        }
        // line 37
        echo "            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category.html";
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
        return array (  121 => 37,  116 => 34,  111 => 31,  109 => 30,  103 => 27,  99 => 26,  90 => 20,  86 => 19,  80 => 15,  74 => 13,  72 => 12,  69 => 11,  65 => 9,  61 => 7,  59 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"{{doc_root}}admin/category.php?id={{id}}\" class=\"w-full grid\" method=\"POST\">
        {% if id is empty %}
        <h2 class=\"text-3xl text-blue-500 mb-8\">New Category</h2>
        {% else %}
        <h2 class=\"text-3xl text-blue-500 mb-8\">Edit Category</h2>
        {% endif %}

        {% if (errors.issue is not empty) %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\"><{{errors.issue}}</p>
        {% endif %}

        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"name\" name=\"name\" type=\"text\" value=\"{{category.name}}\">
            <span class=\"text-red-500\">{{errors.name}}</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"description\" name=\"description\">{{category.description}}</textarea>
            <span class=\"text-red-500\">{{errors.description}}</span>
        </div>
        <div class=\"p-4\">
            {% if category.navigation %}
            <input checked class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            {% else %}
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            {% endif %}
            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>
{% endblock %}", "admin/category.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/category.html");
    }
}
