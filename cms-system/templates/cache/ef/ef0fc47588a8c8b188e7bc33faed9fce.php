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

/* user.html */
class __TwigTemplate_6d634339471999b5836b5324013bd78b extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
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
        yield "<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
        <p class=\"text-center text-gray-500\">Joined: ";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 10), "d M. Y"), "html", null, true);
        yield "</p>
        ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 11)) {
            // line 12
            yield "        <div class=\"w-1/3 m-auto\">
            <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
        </div>
        ";
        } else {
            // line 16
            yield "        <div class=\"w-1/4 m-auto\">
            <img alt=\"No image available\" class=\"mx-auto\" src=\"";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/placeholder.jpg\">
        </div>
        ";
        }
        // line 20
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 20) == CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20))) {
            // line 21
            yield "        <div class=\"flex justify-center\">
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "edit-user-profile.php\">
                Edit Profile</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "edit-article.php\">
                Add Article</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "edit-profile-pic.php\">
                Edit Profile Picture</a>
        </div>
        ";
        }
        // line 30
        yield "    </section>
    <!-- Ab hier gleich wie in der index.php -->
    <section class=\"flex flex-wrap p-8\">
        ";
        // line 33
        yield from         $this->loadTemplate("article-list.html", "user.html", 33)->unwrap()->yield($context);
        // line 34
        yield "    </section>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user.html";
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
        return array (  137 => 34,  135 => 33,  130 => 30,  123 => 26,  118 => 24,  113 => 22,  110 => 21,  107 => 20,  101 => 17,  98 => 16,  90 => 13,  87 => 12,  85 => 11,  81 => 10,  75 => 9,  71 => 7,  67 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}
<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">{{user.forename}} {{user.surname}}</h1>
        <p class=\"text-center text-gray-500\">Joined: {{user.joined|date('d M. Y')}}</p>
        {% if user.profile_pic %}
        <div class=\"w-1/3 m-auto\">
            <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"{{doc_root}}uploads/{{user.profile_pic}}\">
        </div>
        {% else %}
        <div class=\"w-1/4 m-auto\">
            <img alt=\"No image available\" class=\"mx-auto\" src=\"{{doc_root}}uploads/placeholder.jpg\">
        </div>
        {% endif %}
        {% if session.id == user.id %}
        <div class=\"flex justify-center\">
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit-user-profile.php\">
                Edit Profile</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit-article.php\">
                Add Article</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"{{doc_root}}edit-profile-pic.php\">
                Edit Profile Picture</a>
        </div>
        {% endif %}
    </section>
    <!-- Ab hier gleich wie in der index.php -->
    <section class=\"flex flex-wrap p-8\">
        {% include 'article-list.html' %}
    </section>
</main>
{% endblock %}", "user.html", "/Applications/MAMP/htdocs/templates/user.html");
    }
}
