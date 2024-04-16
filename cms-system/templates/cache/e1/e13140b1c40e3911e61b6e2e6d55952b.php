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

/* admin/category-delete.html */
class __TwigTemplate_13c7c00d3555e835337cb1ff13fd9abc extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category-delete.html", 1);
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
        echo "admin/category-delete.php?id=";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <input name=\"id\" type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this category?</p>
        <button class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\" type=\"submit\">Yes</button>
        <button class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\" formaction=\"categories.php\" type=\"submit\">No</button>
    </form>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category-delete.html";
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
    <form action=\"{{doc_root}}admin/category-delete.php?id={{id}}\" method=\"post\">
        <input name=\"id\" type=\"hidden\" value=\"{{id}}\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this category?</p>
        <button class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\" type=\"submit\">Yes</button>
        <button class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\" formaction=\"categories.php\" type=\"submit\">No</button>
    </form>
</main>
{% endblock %}", "admin/category-delete.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/category-delete.html");
    }
}
