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

/* article-list.html */
class __TwigTemplate_f4fcef7c5ab1d02968d52b5e97a70a58 extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "<article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
    <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "article.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
        ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 4)) {
                // line 5
                echo "        <img alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 5), "html", null, true);
                echo "\"
             src=\"";
                // line 6
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
        ";
            } else {
                // line 8
                echo "        <img alt=\"No image available\" src=\"";
                echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
                echo "uploads/placeholder.jpg\">
        ";
            }
            // line 10
            echo "        <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
        <p class=\"text-gray-500 pb-2.5\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
    </a>
    <p class=\"credit text-xs\">
        Posted in <a class=\"text-pink-400\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["root_doc"] ?? null), "html", null, true);
            echo "category.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 15), "html", null, true);
            echo "</a>
        by <a class=\"text-pink-400\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["root_doc"] ?? null), "html", null, true);
            echo "user.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
    </p>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  97 => 17,  91 => 16,  87 => 15,  81 => 14,  75 => 11,  70 => 10,  64 => 8,  57 => 6,  52 => 5,  50 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for article in articles %}
<article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
    <a href=\"{{doc_root}}article.php?id={{article.id}}\">
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
        Posted in <a class=\"text-pink-400\" href=\"{{root_doc}}category.php?id={{article.category_id}}\">
        {{article.category}}</a>
        by <a class=\"text-pink-400\" href=\"{{root_doc}}user.php?id={{article.user_id}}\">
        {{article.author}}</a>
    </p>
</article>
{% endfor %}", "article-list.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/article-list.html");
    }
}
