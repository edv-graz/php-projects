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

/* article.html */
class __TwigTemplate_3bf3e3b52d91fc809f24c4a3474ed50a extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "article.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "<main class=\"flex flex-wrap container mx-auto flex-col\">
    <section>
        ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 9)) {
            // line 10
            yield "        <img alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 10), "html", null, true);
            yield "\"
             src=\"";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 11), "html", null, true);
            yield "\">
        ";
        } else {
            // line 13
            yield "        <img alt=\"No image available\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "images/placeholder.jpg\">
        ";
        }
        // line 15
        yield "    </section>
    <section>
        <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "</h1>
        <div class=\"text-gray-500 mb-3\">";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "created", [], "any", false, false, false, 18), "d M. Y"), "html", null, true);
        yield "</div>
        <div class=\"text-gray-500\">";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 19), "html", null, true);
        yield "</div>
        <p class=\"credit text-xs mt-5 mb-5\">
            Posted in <a class=\"text-pink-400\" href=\"category/";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 21), "html", null, true);
        yield "\">
            ";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 22), "html", null, true);
        yield "</a>
            by <a class=\"text-pink-400\" href=\"user/";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
            ";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 24), "html", null, true);
        yield "</a>
        </p>
    </section>
    ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 27) != 0)) {
            // line 28
            yield "    <section class=\"comments\">
        <h2 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h2>
        ";
            // line 30
            if (($context["comments"] ?? null)) {
                // line 31
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 32
                    yield "        <div class=\"comment\">
            <div class=\"text-gray-500\">";
                    // line 33
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "created", [], "any", false, false, false, 33), "d M. Y"), "html", null, true);
                    yield "</div>
            <div class=\"text-gray-500 mb-5\">";
                    // line 34
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 34), "html", null, true);
                    yield "</div>
            ";
                    // line 35
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 35) == CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 35))) {
                        // line 36
                        yield "            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
                        yield "add-comment/";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
                        yield "/?user_id=";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
                        yield "/&comment_id=";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 36), "html", null, true);
                        yield "\">Edit</a>
            ";
                    }
                    // line 38
                    yield "            <p class=\"credit text-xs mt-5 mb-5\">
                Posted by <a class=\"text-pink-400\" href=\"";
                    // line 39
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
                    yield "user/";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user_id", [], "any", false, false, false, 39), "html", null, true);
                    yield "\">
                ";
                    // line 40
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 40), "html", null, true);
                    yield "</a>
            </p>
        <hr/>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "        ";
            } else {
                // line 46
                yield "        <p>No comments yet.</p>
        ";
            }
            // line 48
            yield "    </section>
    <section>
    <form action=\"";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "add-comment/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
            yield "/?user_id=";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
            yield "#comment-form\" id=\"comment-form\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\"></textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Add Comment</button>
    </form>
    </section>
    ";
        }
        // line 57
        yield "</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article.html";
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
        return array (  213 => 57,  199 => 50,  195 => 48,  191 => 46,  188 => 45,  177 => 40,  171 => 39,  168 => 38,  156 => 36,  154 => 35,  150 => 34,  146 => 33,  143 => 32,  138 => 31,  136 => 30,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  107 => 19,  103 => 18,  99 => 17,  95 => 15,  89 => 13,  82 => 11,  77 => 10,  75 => 9,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}
<main class=\"flex flex-wrap container mx-auto flex-col\">
    <section>
        {% if article.image_file %}
        <img alt=\"{{article.image_alt}}\"
             src=\"{{doc_root}}uploads/{{article.image_file}}\">
        {% else %}
        <img alt=\"No image available\" src=\"{{doc_root}}images/placeholder.jpg\">
        {% endif %}
    </section>
    <section>
        <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">{{article.title}}</h1>
        <div class=\"text-gray-500 mb-3\">{{article.created|date('d M. Y')}}</div>
        <div class=\"text-gray-500\">{{article.content}}</div>
        <p class=\"credit text-xs mt-5 mb-5\">
            Posted in <a class=\"text-pink-400\" href=\"category/{{article.category_id}}\">
            {{article.category}}</a>
            by <a class=\"text-pink-400\" href=\"user/{{article.user_id}}\">
            {{article.author}}</a>
        </p>
    </section>
    {% if (session.id != 0) %}
    <section class=\"comments\">
        <h2 class=\"text-2xl text-blue-500 mb-4 mt-8\">Comments</h2>
        {% if comments %}
        {% for comment in comments %}
        <div class=\"comment\">
            <div class=\"text-gray-500\">{{comment.created|date('d M. Y')}}</div>
            <div class=\"text-gray-500 mb-5\">{{comment.comment}}</div>
            {% if (comment.user_id == session.id) %}
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" href=\"{{doc_root}}add-comment/{{article.id}}/?user_id={{session.id}}/&comment_id={{comment.id}}\">Edit</a>
            {% endif %}
            <p class=\"credit text-xs mt-5 mb-5\">
                Posted by <a class=\"text-pink-400\" href=\"{{doc_root}}user/{{comment.user_id}}\">
                {{comment.author}}</a>
            </p>
        <hr/>
        </div>
        {% endfor %}
        {% else %}
        <p>No comments yet.</p>
        {% endif %}
    </section>
    <section>
    <form action=\"{{doc_root}}add-comment/{{article.id}}/?user_id={{session.id}}#comment-form\" id=\"comment-form\" method=\"post\">
        <label for=\"comment\"></label>
        <textarea id=\"comment\" class=\"w-full p-2 mb-5 border\" name=\"comment\" rows=\"5\" placeholder=\"Add a comment\"></textarea>
        <button class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md\" type=\"submit\">Add Comment</button>
    </form>
    </section>
    {% endif %}
</main>
{% endblock %}


", "article.html", "/Applications/MAMP/htdocs/templates/article.html");
    }
}
