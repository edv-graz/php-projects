<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/category.html */
class __TwigTemplate_22b539fb4eba63026a1c28bf35bd5ad8 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category/";
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["id"] ?? null), "html", null, true);
        yield "\" class=\"w-full grid\" method=\"POST\">
        ";
        // line 6
        if (Twig\Extension\CoreExtension::testEmpty(($context["id"] ?? null))) {
            // line 7
            yield "        <h2 class=\"text-3xl text-blue-500 mb-8\">New Category</h2>
        ";
        } else {
            // line 9
            yield "        <h2 class=\"text-3xl text-blue-500 mb-8\">Edit Category</h2>
        ";
        }
        // line 11
        yield "
        ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12))) {
            // line 13
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
        ";
        }
        // line 15
        yield "
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"name\" name=\"name\" type=\"text\" value=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"description\" name=\"description\">";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 26), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "navigation", [], "any", false, false, false, 30)) {
            // line 31
            yield "            <input checked class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        } else {
            // line 34
            yield "            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"navigation\" name=\"navigation\" type=\"checkbox\">
            ";
        }
        // line 37
        yield "            <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>
";
        return; yield '';
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
        return array (  122 => 37,  117 => 34,  112 => 31,  110 => 30,  104 => 27,  100 => 26,  91 => 20,  87 => 19,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  66 => 9,  62 => 7,  60 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    <form action=\"{{doc_root}}admin/category/{{id}}\" class=\"w-full grid\" method=\"POST\">
        {% if id is empty %}
        <h2 class=\"text-3xl text-blue-500 mb-8\">New Category</h2>
        {% else %}
        <h2 class=\"text-3xl text-blue-500 mb-8\">Edit Category</h2>
        {% endif %}

        {% if (errors.issue is not empty) %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
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
{% endblock %}", "admin/category.html", "/Applications/MAMP/htdocs/templates/admin/category.html");
    }
}
