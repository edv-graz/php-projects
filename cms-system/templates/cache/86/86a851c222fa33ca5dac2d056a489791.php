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

/* layout.html */
class __TwigTemplate_19e6bd54758efc0c2bdf25440a83242f extends Template
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
        yield "<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"";
        // line 6
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\" name=\"description\">
    <link href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "css/output.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register  bg-gray-100\">
        ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 12) == 0)) {
            // line 13
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "login\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "register\">Register</a>
            </li>
        </ul>
        ";
        } else {
            // line 22
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "user.php?id=";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 24), "html", null, true);
            yield "</a>
            </li>
            ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 26) == "admin")) {
                // line 27
                yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
                // line 28
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
                yield "admin/index.php\">Admin</a>
            </li>
            ";
            }
            // line 31
            yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "logout\">Logout</a>
            </li>
            ";
        }
        // line 35
        yield "        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "index\">
                <img alt=\"IT-Logo\" src=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "img/page-logo.png\" width=\"100\">
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            yield "                    <li>
                        <a class=\"block py-2 px-3 rounded bg-blue-700
                         ";
            // line 61
            if ((($context["section"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 61))) {
                yield "md:text-pink-600";
            } else {
                yield "md:text-blue-600";
            }
            // line 62
            yield "                         hover:text-pink-600 md:bg-transparent md:p-0 dark:text-white md:dark:text-blue-500\"
                           href=\"";
            // line 63
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "category/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "seo_title", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                            ";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                    <li>
                        <a href=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "search.php\">
                            <object class=\"pointer-events-none\" data=\"";
        // line 70
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.svg\" type=\"image/svg+xml\">
                                <img alt=\"Search\" src=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.png\">
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
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 82
        yield "<footer class=\"mx-auto bg-slate-50  p-4 flex justify-around\">
    <div>
        &copy; edvgraz ";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield "
    </div>
    <div>
        <a href=\"";
        // line 87
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
        yield "contact.php\">Contact</a>
    </div>
</footer>
</body>
</html>";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "IT-News";
        return; yield '';
    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "All about IT and New from Software Development and Hardware";
        return; yield '';
    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
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
        return array (  242 => 80,  234 => 6,  226 => 5,  216 => 87,  210 => 84,  206 => 82,  204 => 80,  192 => 71,  188 => 70,  184 => 69,  181 => 68,  171 => 64,  163 => 63,  160 => 62,  154 => 61,  150 => 59,  146 => 58,  125 => 40,  121 => 39,  115 => 35,  109 => 32,  106 => 31,  100 => 28,  97 => 27,  95 => 26,  86 => 24,  82 => 22,  75 => 18,  69 => 15,  65 => 13,  63 => 12,  55 => 7,  51 => 6,  47 => 5,  41 => 1,);
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
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}login\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}register\">Register</a>
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
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}logout\">Logout</a>
            </li>
            {% endif %}
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a class=\"flex items-center space-x-3 rtl:space-x-reverse\" href=\"{{doc_root}}index\">
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
                           href=\"{{ doc_root }}category/{{link.id}}/{{link.seo_title}}\">
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
</html>", "layout.html", "/Applications/MAMP/htdocs/templates/layout.html");
    }
}
