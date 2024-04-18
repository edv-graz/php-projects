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

/* admin/layout.html */
class __TwigTemplate_ece7d040b33256ddf26636073b4520bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <script referrerpolicy=\"origin\" src=\"https://cdn.tiny.cloud/1/mpuqamj9ivr3tvo5w2laaiegvinmk42ziufm7enk2agbsxop/tinymce/6/tinymce.min.js\"></script>
    <title>IT-Blog-News Admin-Area</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"bg-gray-100\">
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "user.php?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 17) == "admin")) {
            // line 18
            echo "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/index.php\">Admin</a>
            </li>
            ";
        }
        // line 22
        echo "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "logout.php\">Logout</a>
            </li>
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/index.php\">
                <img alt=\"IT-Logo\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/page-logo.png\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button aria-controls=\"navbar-default\" aria-expanded=\"false\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    data-collapse-toggle=\"navbar-default\" type=\"button\">
                <span class=\"sr-only\">Open main menu</span>
                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 17 14\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1 1h15M1 7h15M1 13h15\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    <li>
                        <a class=\"block py-2 px-3 text-white rounded bg-blue-700 hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/articles.php\">Articles</a>

                    </li>
                    <li>
                        <a class=\"block py-2 px-3 text-white rounded bg-blue-700 hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/categories.php\">Categories</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
    </div>
</footer>
</body>
</html>";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/layout.html";
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
        return array (  151 => 61,  147 => 60,  138 => 65,  134 => 63,  132 => 60,  122 => 53,  114 => 48,  93 => 30,  89 => 29,  80 => 23,  77 => 22,  71 => 19,  68 => 18,  66 => 17,  57 => 15,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <script referrerpolicy=\"origin\" src=\"https://cdn.tiny.cloud/1/mpuqamj9ivr3tvo5w2laaiegvinmk42ziufm7enk2agbsxop/tinymce/6/tinymce.min.js\"></script>
    <title>IT-Blog-News Admin-Area</title>
    <link href=\"{{doc_root}}css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"bg-gray-100\">
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}user.php?id={{session.id}}\">{{session.forename}}</a>
            </li>
            {% if session.role == 'admin' %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}admin/index.php\">Admin</a>
            </li>
            {% endif %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}logout.php\">Logout</a>
            </li>
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"{{doc_root}}admin/index.php\">
                <img alt=\"IT-Logo\" src=\"{{doc_root}}img/page-logo.png\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button aria-controls=\"navbar-default\" aria-expanded=\"false\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    data-collapse-toggle=\"navbar-default\" type=\"button\">
                <span class=\"sr-only\">Open main menu</span>
                <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 17 14\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M1 1h15M1 7h15M1 13h15\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    <li>
                        <a class=\"block py-2 px-3 text-white rounded bg-blue-700 hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{doc_root}}admin/articles.php\">Articles</a>

                    </li>
                    <li>
                        <a class=\"block py-2 px-3 text-white rounded bg-blue-700 hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{doc_root}}admin/categories.php\">Categories</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
{% block content %}

{% endblock %}
<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz {{ 'now'|date('Y') }}
    </div>
</footer>
</body>
</html>", "admin/layout.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/layout.html");
    }
}
