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

/* modules/news_module/templates/news-index.html.twig */
class __TwigTemplate_22714782decdcd0c6e50affdfcdad1cf extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"wrapper-class\">
  <div class=\"row\" style=\"display: flex; flex-wrap: wrap\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "      <div class=\"col-md-3 mb-3\" style=\"width: 270px; padding: 10px\">
        <a class=\"link-dark text-decoration-none\"
           href=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "method", false, false, true, 6)]), "html", null, true);
            echo "\">
          <img src=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "field_img", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "uri", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo "\" alt=\"\"
               style=\"height: 250px;\" class=\"rounded-2 w-100 object-fit-cover\">
          <div class=\"text-center\">
            <small class=\"text-secondary\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "created", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "d-m-Y"), "html", null, true);
            echo "</small>
            <div class=\"fs-5\">";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</div>
          </div>
        </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </div>
  <div class=\"\" style=\"display: flex; justify-content: space-between\">
    ";
        // line 18
        if ((($context["prev_link"] ?? null) != null)) {
            // line 19
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_link"] ?? null), 19, $this->source), "html", null, true);
            echo "\" style=\"padding: 10px\"><<</a>
    ";
        } else {
            // line 21
            echo "      <div class=\"\"></div>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ((($context["next_link"] ?? null) != null)) {
            // line 25
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link"] ?? null), 25, $this->source), "html", null, true);
            echo "\" style=\"padding: 10px\">>></a>
    ";
        } else {
            // line 27
            echo "      <div class=\"\"></div>
    ";
        }
        // line 29
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/news_module/templates/news-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  103 => 27,  97 => 25,  95 => 24,  92 => 23,  88 => 21,  82 => 19,  80 => 18,  76 => 16,  65 => 11,  61 => 10,  55 => 7,  51 => 6,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/news_module/templates/news-index.html.twig", "/var/www/html/web/modules/news_module/templates/news-index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "if" => 18);
        static $filters = array("escape" => 6, "date" => 10);
        static $functions = array("url" => 6, "file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date'],
                ['url', 'file_url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
