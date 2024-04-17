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

/* contact.html */
class __TwigTemplate_9364dd668418ff9c8a756c24752d83a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout.html", "contact.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Contact</h1>
    </header>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact.php?\" class=\"w-2/3 grid\" method=\"POST\">
        ";
        // line 10
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 10))) {
            // line 11
            echo "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "        ";
        if ( !twig_test_empty(($context["success"] ?? null))) {
            // line 14
            echo "        <p class=\"success text-gray-800 bg-green-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, ($context["success"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 16
        echo "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"from\">E-Mail-Address</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"from\" name=\"from\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["from"] ?? null), "html", null, true);
        echo "\">
            <span class=\"text-red-500\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "mail", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"text\">Message</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"text\" name=\"text\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</textarea>
            <span class=\"text-red-500\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "text", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Send</button>
    </form>
</main>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact.html";
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
        return array (  107 => 27,  103 => 26,  94 => 20,  90 => 19,  85 => 16,  79 => 14,  76 => 13,  70 => 11,  68 => 10,  64 => 9,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{%block title %}Contact{% endblock %}
{%block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Contact</h1>
    </header>
    <form action=\"{{doc_root}}contact.php?\" class=\"w-2/3 grid\" method=\"POST\">
        {% if (errors.issue is not empty) %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
        {% endif %}
        {% if (success is not empty) %}
        <p class=\"success text-gray-800 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {% endif %}
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"from\">E-Mail-Address</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"from\" name=\"from\" type=\"text\" value=\"{{from}}\">
            <span class=\"text-red-500\">{{errors.mail}}</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"text\">Message</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"text\" name=\"text\">{{text}}</textarea>
            <span class=\"text-red-500\">{{errors.text}}</span>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Send</button>
    </form>
</main>
{% endblock %}

", "contact.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/contact.html");
    }
}
