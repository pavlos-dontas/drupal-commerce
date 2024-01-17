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

/* themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-progress.html.twig */
class __TwigTemplate_b98733c162c2c30d8220caeb4cae5f24 extends Template
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
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-progress.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 17
        echo "<div class=\"checkout-progress row justify-content-center text-align-center text-primary my-4\">
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["steps"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 19
            echo "
    ";
            // line 20
            $context["stepDefaultIcon"] = "basket";
            // line 21
            echo "
    ";
            // line 22
            $context["stepIcon"] = (((twig_get_attribute($this->env, $this->source,             // line 23
$context["step"], "id", [], "any", false, false, true, 23) == "login")) ? ("info-circle") : ((((twig_get_attribute($this->env, $this->source,             // line 24
$context["step"], "id", [], "any", false, false, true, 24) == "order_information")) ? ("clipboard-data") : ((((twig_get_attribute($this->env, $this->source,             // line 25
$context["step"], "id", [], "any", false, false, true, 25) == "review")) ? ("clipboard-check") : ((((twig_get_attribute($this->env, $this->source,             // line 26
$context["step"], "id", [], "any", false, false, true, 26) == "complete")) ? ("gift") : (($context["stepDefaultIcon"] ?? null)))))))));
            // line 28
            echo "
    <div class=\"checkout-progress--step checkout-progress--step__";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["step"], "position", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo " position-relative col col-md-3 col-lg-2 mb-3\">
      <div class=\"mb-2 pb-1 position-relative\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", [($context["stepIcon"] ?? null), 42, 42], 31, $context, $this->getSourceContext()));
            echo "
        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["step"], "position", [], "any", false, false, true, 32) == "previous")) {
                // line 33
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["check-circle-fill", 16, 16, "position-absolute bottom-0"], 33, $context, $this->getSourceContext()));
                echo "
        ";
            }
            // line 35
            echo "      </div>
      <div class=\"d-none d-sm-block fw-bold\">";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            // line 38
            echo "</div>
    </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["steps"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-progress.html.twig";
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
        return array (  99 => 42,  90 => 38,  88 => 37,  85 => 35,  79 => 33,  77 => 32,  73 => 31,  68 => 29,  65 => 28,  63 => 26,  62 => 25,  61 => 24,  60 => 23,  59 => 22,  56 => 21,  54 => 20,  51 => 19,  47 => 18,  44 => 17,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-progress.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-progress.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "for" => 18, "set" => 20, "if" => 32);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'for', 'set', 'if'],
                ['escape'],
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
