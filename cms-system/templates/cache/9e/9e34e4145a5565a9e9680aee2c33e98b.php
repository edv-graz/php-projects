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

/* admin/article-delete.html */
class __TwigTemplate_5347a2b9eecb3743dd9f81c999bbb671 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article-delete.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/article-delete.php?id=";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <input name=\"id\" type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this article?</p>
        <button class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\" type=\"submit\">Yes</button>
        <button class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\" formaction=\"articles.php\" type=\"submit\">No</button>
    </form>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article-delete.html";
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
        return array (  59 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form action=\"{{doc_root}}admin/article-delete.php?id={{id}}\" method=\"post\">
        <input name=\"id\" type=\"hidden\" value=\"{{id}}\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this article?</p>
        <button class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\" type=\"submit\">Yes</button>
        <button class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\" formaction=\"articles.php\" type=\"submit\">No</button>
    </form>
</main>
{% endblock %}", "admin/article-delete.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/article-delete.html");
    }
}
