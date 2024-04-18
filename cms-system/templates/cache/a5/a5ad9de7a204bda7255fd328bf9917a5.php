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

/* reset-password.html */
class __TwigTemplate_212b084249f3de2067257a1b3a496b52 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "reset-password.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Reset Password";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    ";
        // line 7
        if ((($context["sent"] ?? null) == false)) {
            // line 8
            echo "    <form action=\"reset-password.php?token=";
            echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"w-full grid\" method=\"POST\">
        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">New Password</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"password\" name=\"password\" type=\"password\">

        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"confirm\">Confirm New Password</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"confirm\" name=\"confirm\" type=\"password\">
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600 w-1/2 mt-4\" type=\"submit\">Reset Password</button>
    </form>
    ";
        } else {
            // line 19
            echo "    <p class=\"text-center text-lg\">An E-Mail has been sent to your E-Mail-Adress. Please check your inbox.</p>
    ";
        }
        // line 21
        echo "</main>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset-password.html";
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
        return array (  83 => 21,  79 => 19,  64 => 8,  62 => 7,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{%block title %}Reset Password{% endblock %}
{%block content %}

<main class=\"container w-auto mx-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
    {% if sent == false%}
    <form action=\"reset-password.php?token={{token}}\" class=\"w-full grid\" method=\"POST\">
        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">New Password</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"password\" name=\"password\" type=\"password\">

        <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"confirm\">Confirm New Password</label>
        <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
               id=\"confirm\" name=\"confirm\" type=\"password\">
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600 w-1/2 mt-4\" type=\"submit\">Reset Password</button>
    </form>
    {% else %}
    <p class=\"text-center text-lg\">An E-Mail has been sent to your E-Mail-Adress. Please check your inbox.</p>
    {% endif %}
</main>

{% endblock %}", "reset-password.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/reset-password.html");
    }
}
