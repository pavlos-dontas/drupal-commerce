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

/* themes/contrib/belgrade/templates/commerce/commerce-order-total-summary.html.twig */
class __TwigTemplate_08461675324707f27d1b18c0ca972b23 extends Template
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
        // line 21
        echo "
<div";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["text-align-right"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subtotal:"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
        echo "</span>
  </div>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "adjustments", [], "any", false, false, true, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 27
            echo "    <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
            echo "\">
      <span class=\"order-total-line-label\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["adjustment"], "label", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["adjustment"], "amount", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  <div class=\"order-total-line order-total-line__total fw-bold fs-4\">
    <span class=\"order-total-line-label\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total:"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
        echo "</span>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "totals"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-order-total-summary.html.twig";
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
        return array (  77 => 32,  74 => 31,  63 => 28,  58 => 27,  54 => 26,  47 => 24,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-order-total-summary.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/commerce-order-total-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 26);
        static $filters = array("escape" => 22, "t" => 24, "commerce_price_format" => 24, "clean_class" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 't', 'commerce_price_format', 'clean_class'],
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
