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

/* article-list.html */
class __TwigTemplate_9311a99988efa322ab26a6b60def0ea7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            yield "<article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
    <a href=\"article/";
            // line 3
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 3), "html", null, true);
            yield "/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "seo_title", [], "any", false, false, false, 3), "html", null, true);
            yield "\">
        ";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 4)) {
                // line 5
                yield "        <img alt=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 5), "html", null, true);
                yield "\"
             src=\"";
                // line 6
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 6), "html", null, true);
                yield "\">
        ";
            } else {
                // line 8
                yield "        <img alt=\"No image available\" src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/placeholder.jpg\">
        ";
            }
            // line 10
            yield "        <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 10), "html", null, true);
            yield "</h2>
        <p class=\"text-gray-500 pb-2.5\">";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
    </a>
    <p class=\"credit text-xs\">
        Posted in <a class=\"text-pink-400\" href=\"category/";
            // line 14
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
        ";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 15), "html", null, true);
            yield "</a>
        by <a class=\"text-pink-400\" href=\"";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["doc_root"] ?? null), "html", null, true);
            yield "user/";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
        ";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 17), "html", null, true);
            yield "</a>
    </p>
    ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 19) == CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 19))) {
                // line 20
                yield "    <p class=\"edit mt-4\">
        <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md mt-2\" href=\"edit-article/";
                // line 21
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
                yield "\">Edit</a>
    </p>
    ";
            }
            // line 24
            yield "</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article-list.html";
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
        return array (  112 => 24,  106 => 21,  103 => 20,  101 => 19,  96 => 17,  90 => 16,  86 => 15,  82 => 14,  76 => 11,  71 => 10,  65 => 8,  58 => 6,  53 => 5,  51 => 4,  45 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for article in articles %}
<article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
    <a href=\"article/{{article.id}}/{{article.seo_title}}\">
        {% if article.image_file %}
        <img alt=\"{{article.image_alt}}\"
             src=\"{{doc_root}}uploads/{{article.image_file}}\">
        {% else %}
        <img alt=\"No image available\" src=\"{{doc_root}}uploads/placeholder.jpg\">
        {% endif %}
        <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{article.title}}</h2>
        <p class=\"text-gray-500 pb-2.5\">{{article.summary}}</p>
    </a>
    <p class=\"credit text-xs\">
        Posted in <a class=\"text-pink-400\" href=\"category/{{article.category_id}}\">
        {{article.category}}</a>
        by <a class=\"text-pink-400\" href=\"{{doc_root}}user/{{article.user_id}}\">
        {{article.author}}</a>
    </p>
    {% if (session.id == article.user_id) %}
    <p class=\"edit mt-4\">
        <a class=\"text-white bg-pink-600  hover:bg-blue-600 p-2 rounded-md mt-2\" href=\"edit-article/{{article.id}}\">Edit</a>
    </p>
    {% endif %}
</article>
{% endfor %}", "article-list.html", "/Applications/MAMP/htdocs/templates/article-list.html");
    }
}
