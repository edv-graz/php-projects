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

/* admin/categories.html */
class __TwigTemplate_3f6ca47869f12e52092e9fc27e10091e extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/categories.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">

        ";
        // line 7
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 8
            echo "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 10
        echo "        ";
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 11
            echo "        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/category.php\">Add a new category</a>
        </button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">

        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php /*foreach ( \$categories as \$category ) : */ ?>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/category.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/category-delete.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">Delete</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/categories.html";
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
        return array (  124 => 39,  112 => 35,  104 => 32,  99 => 30,  96 => 29,  92 => 28,  75 => 14,  72 => 13,  66 => 11,  63 => 10,  57 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">

        {% if error is not empty %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{ error }}</p>
        {% endif %}
        {% if success is not empty %}
        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {% endif %}
        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}admin/category.php\">Add a new category</a>
        </button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">

        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php /*foreach ( \$categories as \$category ) : */ ?>
        {% for category in categories %}
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{category.name}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/category.php?id={{category.id}}\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/category-delete.php?id={{category.id}}\">Delete</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</main>
{% endblock %}", "admin/categories.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/categories.html");
    }
}
