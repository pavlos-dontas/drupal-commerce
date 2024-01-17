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

/* themes/contrib/belgrade/templates/commerce/commerce-coupon-redemption-form.html.twig */
class __TwigTemplate_d103ccf424e66ece706cc266e48bd86b extends Template
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
        // line 14
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 14))) {
            // line 15
            echo "  ";
            if (((($__internal_compile_0 = ($context["form"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#cardinality"] ?? null) : null) == 1)) {
                // line 16
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--single\">
      <p>
        <br>";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You applied the coupon %code to the order.", ["%code" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "code", [], "any", false, false, true, 18), 18, $this->source))]));
                echo "
      </p>
      ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "remove_button", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } else {
                // line 23
                echo "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--multiple\">
      <h5 class=\"mb-3\"> ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Applied coupons"));
                echo " </h5>
      <table class=\"table bg-white\">
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 26));
                foreach ($context['_seq'] as $context["key"] => $context["coupon"]) {
                    // line 27
                    echo "        ";
                    if ((twig_first($this->env, $context["key"]) != "#")) {
                        // line 28
                        echo "          <tr>
            <td class=\"w-100\"> ";
                        // line 29
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                        echo " </td>
            <td> ";
                        // line 30
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["coupon"], "remove_button", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                        echo " </td>
          </tr>
        ";
                    }
                    // line 33
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['coupon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      </table>
    </div>
  ";
            }
        }
        // line 38
        echo "
";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 39, $this->source), "coupons"), "html", null, true);
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-coupon-redemption-form.html.twig";
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
        return array (  102 => 39,  99 => 38,  93 => 34,  87 => 33,  81 => 30,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  62 => 24,  59 => 23,  53 => 20,  48 => 18,  44 => 16,  41 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-coupon-redemption-form.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/commerce-coupon-redemption-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 26);
        static $filters = array("length" => 14, "t" => 18, "render" => 18, "escape" => 20, "first" => 27, "without" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 't', 'render', 'escape', 'first', 'without'],
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
