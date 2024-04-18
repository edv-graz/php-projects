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

/* user.html */
class __TwigTemplate_e74a7507453ce343c076396068ca687b extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container mx-auto mt-10 mb-10\">
    <section>
        <h1 class=\"text-3xl text-center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        <p class=\"text-center text-gray-500\">Joined: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 10), "d M. Y"), "html", null, true);
        echo "</p>
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 11)) {
            // line 12
            echo "        <div class=\"w-1/3 m-auto\">
            <img alt=\"Profile Picture\" class=\"mx-auto\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
        </div>
        ";
        } else {
            // line 16
            echo "        <div class=\"w-1/4 m-auto\">
            <img alt=\"No image available\" class=\"mx-auto\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/placeholder.jpg\">
        </div>
        ";
        }
        // line 20
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 20))) {
            // line 21
            echo "        <div class=\"flex justify-center\">
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "edit-user-profile.php\">
                Edit Profile</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "edit-article.php\">
                Add Article</a>
            <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md m-2\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "edit-profile-pic.php\">
                Edit Profile Picture</a>
        </div>
        ";
        }
        // line 30
        echo "    </section>
    <!-- Ab hier gleich wie in der index.php -->
    <section class=\"flex flex-wrap p-8\">
        ";
        // line 33
        $this->loadTemplate("article-list.html", "user.html", 33)->display($context);
        // line 34
        echo "    </section>
</main>
";
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
        return array (  134 => 34,  132 => 33,  127 => 30,  120 => 26,  115 => 24,  110 => 22,  107 => 21,  104 => 20,  98 => 17,  95 => 16,  87 => 13,  84 => 12,  82 => 11,  78 => 10,  72 => 9,  68 => 7,  64 => 6,  55 => 4,  48 => 3,  37 => 1,);
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
{% endblock %}", "user.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/user.html");
    }
}
