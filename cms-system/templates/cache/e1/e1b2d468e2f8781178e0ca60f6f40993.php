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

/* admin/article.html */
class __TwigTemplate_f000bae24d20947727dc4adbfb32f479 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<main class=\"p-10\">
    ";
        // line 5
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 5))) {
            // line 6
            echo "    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">New Article</h2>
    ";
        } else {
            // line 8
            echo "    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">Edit Article</h2>
    ";
        }
        // line 10
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 10))) {
            // line 11
            echo "    <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
        echo "admin/article.php?id=";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\" enctype=\"multipart/form-data\"
          method=\"POST\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"title\" name=\"title\" type=\"text\"
                   value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            <span class=\"text-red-500\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"summary\"
                    name=\"summary\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "summary", [], "any", false, false, false, 25), "html", null, true);
        echo "</textarea>
            <span class=\"text-red-500\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "summary", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"content\" name=\"content\"
                    rows=\"10\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 31), "html", null, true);
        echo "</textarea>
            <span class=\"text-red-500\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"category\"
                    name=\"category\">
                <option>select category</option>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 41))) {
                // line 42
                echo "                <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 44
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</option>
                ";
            }
            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </select>
            <span class=\"text-red-500\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "category", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"user_id\"
                    name=\"user\">
                <option>select user</option>
                <?php foreach ( \$users as \$user ): ?>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56) == twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 56))) {
                // line 57
                echo "                <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 57), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 59
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 59), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 59), "html", null, true);
                echo "</option>
                ";
            }
            // line 61
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </select>
            <span class=\"text-red-500\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 63), "html", null, true);
        echo "</span>
            ";
        // line 64
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 64))) {
            // line 65
            echo "            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
            <input accept=\"image/jpeg, image/png\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_file\" name=\"image_file\"
                   type=\"file\">
            <span class=\"text-red-500\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "image_file", [], "any", false, false, false, 70), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 72
            echo "            <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"w-full h-auto\" src=\"";
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 72), "html", null, true);
            echo "\"/>
            <span>Alt Text: ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
            <a class=\"text-blue-500\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/alt-text-edit.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">Edit Alt Text</a>
            <a class=\"text-red-500\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["doc_root"] ?? null), "html", null, true);
            echo "admin/img-delete.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\">Delete Image</a>
            ";
        }
        // line 77
        echo "
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_alt\" name=\"image_alt\" type=\"text\"
                   value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
            <span class=\"text-red-500\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "image_alt", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 84)) {
            // line 85
            echo "            <input checked class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            ";
        } else {
            // line 89
            echo "            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" id=\"published\"
                   name=\"published\"
                   type=\"checkbox\">
            ";
        }
        // line 93
        echo "        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>
<script>
  tinymce.init({
    selector: '#content',
    menubar: false,
    toolbar: 'bold italic underline link',
    plugins: 'link',
    link_title: false
  })
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article.html";
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
        return array (  274 => 93,  268 => 89,  262 => 85,  260 => 84,  255 => 82,  251 => 81,  245 => 77,  238 => 75,  232 => 74,  228 => 73,  219 => 72,  214 => 70,  207 => 65,  205 => 64,  201 => 63,  198 => 62,  192 => 61,  182 => 59,  172 => 57,  169 => 56,  165 => 55,  155 => 48,  152 => 47,  146 => 46,  138 => 44,  130 => 42,  127 => 41,  123 => 40,  112 => 32,  108 => 31,  100 => 26,  96 => 25,  88 => 20,  84 => 19,  72 => 13,  66 => 11,  63 => 10,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"p-10\">
    {% if (article.id is empty) %}
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">New Article</h2>
    {% else %}
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">Edit Article</h2>
    {% endif %}
    {% if (errors.issue is not empty) %}
    <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
    {% endif %}
    <form action=\"{{doc_root}}admin/article.php?id={{id}}\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\" enctype=\"multipart/form-data\"
          method=\"POST\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"title\" name=\"title\" type=\"text\"
                   value=\"{{article.title}}\">
            <span class=\"text-red-500\">{{errors.title}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"summary\"
                    name=\"summary\">{{article.summary}}</textarea>
            <span class=\"text-red-500\">{{errors.summary}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"content\" name=\"content\"
                    rows=\"10\">{{article.content}}</textarea>
            <span class=\"text-red-500\">{{errors.content}}</span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"category\"
                    name=\"category\">
                <option>select category</option>
                {% for category in categories %}
                {% if (category.id == article.category_id) %}
                <option selected value=\"{{category.id}}\">{{category.name}}</option>
                {% else %}
                <option value=\"{{category.id}}\">{{category.name}}</option>
                {% endif %}
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{errors.category}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                    id=\"user_id\"
                    name=\"user\">
                <option>select user</option>
                <?php foreach ( \$users as \$user ): ?>
                {% for user in users %}
                {% if (user.id == article.user_id) %}
                <option selected value=\"{{user.id}}\">{{user.forename}} {{user.surname}}</option>
                {% else %}
                <option value=\"{{user.id}}\">{{user.forename}} {{user.surname}}</option>
                {% endif %}
                {% endfor %}
            </select>
            <span class=\"text-red-500\">{{errors.user}}</span>
            {% if (article.image_file is empty) %}
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
            <input accept=\"image/jpeg, image/png\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_file\" name=\"image_file\"
                   type=\"file\">
            <span class=\"text-red-500\">{{errors.image_file}}</span>
            {% else %}
            <img alt=\"{{article.image_alt}}\" class=\"w-full h-auto\" src=\"{{doc_root}}uploads/{{article.image_file}}\"/>
            <span>Alt Text: {{article.image_alt}}</span>
            <a class=\"text-blue-500\" href=\"{{doc_root}}admin/alt-text-edit.php?id={{article.id}}\">Edit Alt Text</a>
            <a class=\"text-red-500\" href=\"{{doc_root}}admin/img-delete.php?id={{article.id}}\">Delete Image</a>
            {% endif %}

            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                   id=\"image_alt\" name=\"image_alt\" type=\"text\"
                   value=\"{{article.image_alt}}\">
            <span class=\"text-red-500\">{{errors.image_alt}}</span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            {% if (article.published) %}
            <input checked class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\"
                   id=\"published\" name=\"published\"
                   type=\"checkbox\">
            {% else %}
            <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" id=\"published\"
                   name=\"published\"
                   type=\"checkbox\">
            {% endif %}
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Save</button>
    </form>
</main>
<script>
  tinymce.init({
    selector: '#content',
    menubar: false,
    toolbar: 'bold italic underline link',
    plugins: 'link',
    link_title: false
  })
</script>
{% endblock %}", "admin/article.html", "/Users/christophmitterwallner/Documents/app-dev/php/php-projects/cms-system/templates/admin/article.html");
    }
}
