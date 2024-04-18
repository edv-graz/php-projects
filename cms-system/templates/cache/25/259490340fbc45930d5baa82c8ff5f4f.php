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

/* admin/index.html */
class __TwigTemplate_d2b1e636774710f80fdb62baa30be93d extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">Admin</h1>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Type</th>
            <th class=\"px-6 py-3\">Count</th>
            <th class=\"px-6 py-3\">View</th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Categories</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["categories_count"] ?? null), "html", null, true);
        echo "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/categories.php\">View</a>
            </td>
        </tr>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Articles</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["articles_count"] ?? null), "html", null, true);
        echo "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/articles.php\">View</a>
            </td>
        </tr>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Users</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["users_count"] ?? null), "html", null, true);
        echo "</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\">
            </td>
        </tr>
        </tbody>
    </table>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html";
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
        return array (  91 => 31,  83 => 26,  78 => 24,  70 => 19,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <h1 class=\"text-4xl text-blue-500 mb-8\">Admin</h1>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Type</th>
            <th class=\"px-6 py-3\">Count</th>
            <th class=\"px-6 py-3\">View</th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Categories</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">{{categories_count}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/categories.php\">View</a>
            </td>
        </tr>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Articles</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">{{articles_count}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/articles.php\">View</a>
            </td>
        </tr>
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">Users</td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\">{{users_count}}</td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\">
            </td>
        </tr>
        </tbody>
    </table>
</main>
{% endblock %}

", "admin/index.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/index.html");
    }
}
