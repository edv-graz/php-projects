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

/* login.html */
class __TwigTemplate_4b235994f690ffb48b13c0a4ef9e958f extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log In";
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Log In to IT-News ";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Log In</h1>
    </header>
    <form action=\"login.php\" class=\"w-1/3 grid\" method=\"POST\">
        ";
        // line 12
        if (($context["errors"] ?? null)) {
            // line 13
            echo "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        ";
        }
        // line 15
        echo "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">E-Mail </label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"mail\" name=\"mail\" type=\"email\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
            <span class=\"text-red-500\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"password\" name=\"password\" type=\"password\">
            <span class=\"text-red-500\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 25);
        echo "</span>
        </div>
        <a class=\"text-pink-600 hover:text-blue-600\" href=\"forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
    </form>
</main>
";
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
        return array (  97 => 25,  88 => 19,  84 => 18,  79 => 15,  75 => 13,  73 => 12,  66 => 7,  62 => 6,  55 => 4,  48 => 3,  37 => 1,);
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

", "login.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/login.html");
    }
}
