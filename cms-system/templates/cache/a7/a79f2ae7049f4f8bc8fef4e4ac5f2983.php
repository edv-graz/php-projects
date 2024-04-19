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

/* index.html */
class __TwigTemplate_8a803d92fc240302d2e505e9458268a0 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "<main class=\"flex flex-wrap p-8\" id=\"content\">
    ";
        // line 6
        yield from         $this->loadTemplate("article-list.html", "index.html", 6)->unwrap()->yield($context);
        // line 7
        yield "</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html";
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
        return array (  65 => 7,  63 => 6,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{%block title %}{{title}}{% endblock %}
{%block content %}
<main class=\"flex flex-wrap p-8\" id=\"content\">
    {% include 'article-list.html' %}
</main>
{%endblock %}

", "index.html", "/Applications/MAMP/htdocs/templates/index.html");
    }
}
