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

/* themes/contrib/belgrade/templates/commerce/product/commerce-product--full.html.twig */
class __TwigTemplate_931f3db3f6eb0b1efab6fbb50fdd4a40 extends Template
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
        // line 22
        echo "
";
        // line 24
        $context["classes"] = ["pb-4", "mb-5", "overflow-hidden"];
        // line 30
        echo "
<article";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">
  <div class=\"row g-5\">
    <div class=\"col-md-7 order-md-last\">
      <div class=\"mb-2\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_categories", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        // line 36
        echo "</div>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        // line 39
        echo "<div class=\"fs-4\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</div>
      <hr/>
      ";
        // line 41
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special_categories", [], "any", false, false, true, 41)))) {
            // line 42
            echo "        <div class=\"mb-3\">";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special_categories", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            // line 44
            echo "</div>
      ";
        }
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 46, $this->source), "variation_attributes", "images", "variation_images", "title", "variation_price", "product_categories", "brand", "special_categories"), "html", null, true);
        // line 47
        echo "</div>
    <div class=\"col-md-5\">
      ";
        // line 49
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_images", [], "any", false, false, true, 49)))) {
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_images", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        } else {
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "images", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        }
        // line 54
        echo "    </div>
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "product"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/product/commerce-product--full.html.twig";
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
        return array (  91 => 54,  88 => 52,  85 => 50,  83 => 49,  79 => 47,  77 => 46,  73 => 44,  71 => 43,  69 => 42,  67 => 41,  61 => 39,  59 => 38,  57 => 37,  55 => 36,  53 => 35,  47 => 31,  44 => 30,  42 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/product/commerce-product--full.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/product/commerce-product--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 41);
        static $filters = array("escape" => 31, "render" => 41, "without" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render', 'without'],
                []
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
