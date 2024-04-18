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

/* admin/articles.html */
class __TwigTemplate_9fc84b4806ee414ee28d10c249f69919 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/articles.html", 1);
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
        // line 6
        if ( !twig_test_empty(($context["error"] ?? null))) {
            // line 7
            echo "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 9
        echo "        ";
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 10
            echo "        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 12
        echo "        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/article.php\">Add a new Article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ( \$articles as \$article ) : ?>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\"><img alt=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                                                                                   src=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 32), "html", null, true);
            echo "\"/>
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 38), "d M. Y"), "html", null, true);
            echo "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 41), "html", null, true);
            echo "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 44)) {
                // line 45
                echo "                Yes
                ";
            } else {
                // line 47
                echo "                No
                ";
            }
            // line 49
            echo "            </td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/article.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/article-delete.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">Delete</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "admin/articles.html";
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
        return array (  164 => 58,  152 => 54,  144 => 51,  140 => 49,  136 => 47,  132 => 45,  130 => 44,  124 => 41,  118 => 38,  112 => 35,  104 => 32,  100 => 31,  97 => 30,  93 => 29,  74 => 13,  71 => 12,  65 => 10,  62 => 9,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        {% if (error is not empty) %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
        {% endif %}
        {% if (success is not empty) %}
        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {% endif %}
        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}admin/article.php\">Add a new Article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ( \$articles as \$article ) : ?>
        {% for article in articles %}
        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\"><img alt=\"{{article.image_alt}}\"
                                                                                   src=\"{{doc_root}}uploads/{{article.image_file}}\"/>
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                {{article.title}}
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                {{article.created|date('d M. Y')}}
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                {{article.category}}
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                {%if article.published %}
                Yes
                {% else %}
                No
                {% endif %}
            </td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/article.php?id={{article.id}}\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"{{doc_root}}admin/article-delete.php?id={{article.id}}\">Delete</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</main>
{% endblock %}", "admin/articles.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/articles.html");
    }
}
