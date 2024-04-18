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

/* layout.html */
class __TwigTemplate_786eeaaebf91777c86b68985e1bd0f41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"";
        // line 6
        $this->displayBlock('description', $context, $blocks);
        echo "\" name=\"description\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register  bg-gray-100\">
        ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 12) == 0)) {
            // line 13
            echo "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "login.php\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "register.php\">Register</a>
            </li>
        </ul>
        ";
        } else {
            // line 22
            echo "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
            </li>
            ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 26) == "admin")) {
                // line 27
                echo "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "admin/index.php\">Admin</a>
            </li>
            ";
            }
            // line 31
            echo "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "logout.php\">Logout</a>
            </li>
            ";
        }
        // line 35
        echo "        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "index.php\">
                <img alt=\"IT-Logo\" src=\"";
        // line 40
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
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg
                    bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            echo "                    <li>
                        <a class=\"block py-2 px-3 rounded bg-blue-700
                         ";
            // line 61
            if ((($context["section"] ?? null) == twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 61))) {
                echo "md:text-pink-600";
            } else {
                echo "md:text-blue-600";
            }
            // line 62
            echo "                         hover:text-pink-600 md:bg-transparent md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "category.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                            ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    <li>
                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "search.php\">
                            <object class=\"pointer-events-none\" data=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/material-search.svg\" type=\"image/svg+xml\">
                                <img alt=\"Search\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "img/material-search.png\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "<footer class=\"mx-auto bg-slate-50  p-4 flex justify-around\">
    <div>
        &copy; edvgraz ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
    </div>
    <div>
        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "contact.php\">Contact</a>
    </div>
</footer>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "IT-News";
    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "All about IT and New from Software Development and Hardware";
    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html";
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
        return array (  236 => 80,  229 => 6,  222 => 5,  213 => 87,  207 => 84,  203 => 82,  201 => 80,  189 => 71,  185 => 70,  181 => 69,  178 => 68,  168 => 64,  162 => 63,  159 => 62,  153 => 61,  149 => 59,  145 => 58,  124 => 40,  120 => 39,  114 => 35,  108 => 32,  105 => 31,  99 => 28,  96 => 27,  94 => 26,  85 => 24,  81 => 22,  74 => 18,  68 => 15,  64 => 13,  62 => 12,  54 => 7,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>{% block title %}IT-News{% endblock %}</title>
    <meta content=\"{% block description %}All about IT and New from Software Development and Hardware{% endblock %}\" name=\"description\">
    <link href=\"{{doc_root}}css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register  bg-gray-100\">
        {% if session.id == 0 %}
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}login.php\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}register.php\">Register</a>
            </li>
        </ul>
        {% else %}
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
            {% endif %}
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"{{doc_root}}index.php\">
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
                <ul class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg
                    bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0
                    md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\"
                    id=\"menu\">
                    {% for link in navigation %}
                    <li>
                        <a class=\"block py-2 px-3 rounded bg-blue-700
                         {% if (section == link.id)%}md:text-pink-600{%else%}md:text-blue-600{%endif%}
                         hover:text-pink-600 md:bg-transparent md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"{{ doc_root }}category.php?id={{ link.id }}\">
                            {{ link.name }}
                        </a>
                    </li>
                    {% endfor %}
                    <li>
                        <a href=\"{{doc_root}}search.php\">
                            <object class=\"pointer-events-none\" data=\"{{doc_root}}img/material-search.svg\" type=\"image/svg+xml\">
                                <img alt=\"Search\" src=\"{{doc_root}}img/material-search.png\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
{% block content %}
{% endblock %}
<footer class=\"mx-auto bg-slate-50  p-4 flex justify-around\">
    <div>
        &copy; edvgraz {{ 'now'|date('Y') }}
    </div>
    <div>
        <a href=\"{{doc_root}}contact.php\">Contact</a>
    </div>
</footer>
</body>
</html>", "layout.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/layout.html");
    }
}
