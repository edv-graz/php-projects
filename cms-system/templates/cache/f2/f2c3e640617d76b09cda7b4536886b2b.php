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

/* article.html */
class __TwigTemplate_7e9707e482ad3f4568038ebb8c7baa5c extends Template
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
        echo "<main class=\"flex flex-wrap container mx-auto\">
    <section>
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
             src=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
        ";
        } else {
            // line 13
            echo "        <img alt=\"No image available\" src=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "images/placeholder.jpg\">
        ";
        }
        // line 15
        echo "    </section>
    <section>
        <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
        <div class=\"text-gray-500 mb-3\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", [], "any", false, false, false, 18), "d M. Y"), "html", null, true);
        echo "</div>
        <div class=\"text-gray-500\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
        <p class=\"credit text-xs mt-5 mb-5\">
            Posted in <a class=\"text-pink-400\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "category.php?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
            ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 22), "html", null, true);
        echo "</a>
            by <a class=\"text-pink-400\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "user.php?id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 24), "html", null, true);
        echo "</a>
        </p>
    </section>
</main>
";
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
        return array (  125 => 24,  119 => 23,  115 => 22,  109 => 21,  104 => 19,  100 => 18,  96 => 17,  92 => 15,  86 => 13,  79 => 11,  74 => 10,  72 => 9,  68 => 7,  64 => 6,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{category.name}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}
<main class=\"flex flex-wrap container mx-auto\">
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
            Posted in <a class=\"text-pink-400\" href=\"{{doc_root}}category.php?id={{article.category_id}}\">
            {{article.category}}</a>
            by <a class=\"text-pink-400\" href=\"{{doc_root}}user.php?id={{article.user_id}}\">
            {{article.author}}</a>
        </p>
    </section>
</main>
{% endblock %}


", "article.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/article.html");
    }
}
