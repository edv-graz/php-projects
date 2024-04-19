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

/* admin/articles.html */
class __TwigTemplate_a0fa79b43bcb3390b616c7a69fecb5c4 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        ";
        // line 6
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["error"] ?? null))) {
            // line 7
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["error"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 9
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["success"] ?? null))) {
            // line 10
            yield "        <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["success"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 12
        yield "        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"article\">Add a new Article</a></button>
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            yield "        <tr class=\"bg-white border-b dark:bg-gray-800\">
            <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\"><img alt=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
                                                                                   src=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 32), "html", null, true);
            yield "\"/>
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 35), "html", null, true);
            yield "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 38), "d M. Y"), "html", null, true);
            yield "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 41), "html", null, true);
            yield "
            </td>
            <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
                ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 44)) {
                // line 45
                yield "                Yes
                ";
            } else {
                // line 47
                yield "                No
                ";
            }
            // line 49
            yield "            </td>
            <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                    href=\"article/";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"article-delete/";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\">Delete</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "        </tbody>
    </table>
</main>
";
        return; yield '';
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
        return array (  158 => 58,  148 => 54,  142 => 51,  138 => 49,  134 => 47,  130 => 45,  128 => 44,  122 => 41,  116 => 38,  110 => 35,  102 => 32,  98 => 31,  95 => 30,  91 => 29,  72 => 12,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
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
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"article\">Add a new Article</a></button>
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
                    href=\"article/{{article.id}}\">Edit</a>
            </td>
            <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                    href=\"article-delete/{{article.id}}\">Delete</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</main>
{% endblock %}", "admin/articles.html", "/Applications/MAMP/htdocs/templates/admin/articles.html");
    }
}
