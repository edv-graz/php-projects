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

/* login.html */
class __TwigTemplate_244eebbb9048c40681862b1074f38082 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Log In";
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " Log In to IT-News ";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Log In</h1>
    </header>
    <form action=\"login.php\" class=\"w-1/3 grid\" method=\"POST\">
        ";
        // line 12
        if (($context["errors"] ?? null)) {
            // line 13
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        ";
        }
        // line 15
        yield "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">E-Mail </label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["email"] ?? null), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 25);
        yield "</span>
        </div>
        <a class=\"text-pink-600 hover:text-blue-600\" href=\"forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
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
        return "login.html";
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
        return array (  100 => 25,  91 => 19,  87 => 18,  82 => 15,  78 => 13,  76 => 12,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}Log In{% endblock %}
{% block description %} Log In to IT-News {% endblock %}

{% block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Log In</h1>
    </header>
    <form action=\"login.php\" class=\"w-1/3 grid\" method=\"POST\">
        {% if errors %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        {% endif %}
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">E-Mail </label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"{{email}}\">
            <span class=\"text-red-500\">{{errors.email}}</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">{{errors.password|raw}}</span>
        </div>
        <a class=\"text-pink-600 hover:text-blue-600\" href=\"forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
    </form>
</main>
{% endblock %}

", "login.html", "/Applications/MAMP/htdocs/templates/login.html");
    }
}
