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

/* themes/contrib/belgrade/templates/views/views-view-grid.html.twig */
class __TwigTemplate_988e2ba16980b2c215b00e6663ecb069 extends Template
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
        // line 28
        $context["classes"] = ["views-view-grid", twig_get_attribute($this->env, $this->source,         // line 30
($context["options"] ?? null), "alignment", [], "any", false, false, true, 30), ("cols-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["options"] ?? null), "columns", [], "any", false, false, true, 31), 31, $this->source)), "clearfix"];
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 35)) {
            // line 36
            echo "  ";
            // line 37
            $context["row_classes"] = ["views-row", (((twig_get_attribute($this->env, $this->source,             // line 39
($context["options"] ?? null), "alignment", [], "any", false, false, true, 39) == "horizontal")) ? ("clearfix") : ("")), "row"];
        }
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 44)) {
            // line 45
            echo "  ";
            // line 46
            $context["col_classes"] = ["views-col", (((twig_get_attribute($this->env, $this->source,             // line 48
($context["options"] ?? null), "alignment", [], "any", false, false, true, 48) == "vertical")) ? ("clearfix") : ("")), ("col-md-" . (12 / twig_get_attribute($this->env, $this->source,             // line 49
($context["options"] ?? null), "columns", [], "any", false, false, true, 49)))];
        }
        // line 53
        if (($context["title"] ?? null)) {
            // line 54
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 54, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 56
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
  ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 57) == "horizontal")) {
            // line 58
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 59
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 59), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                echo ">
        ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 61
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 61), "addClass", [($context["col_classes"] ?? null)], "method", false, false, true, 61), 61, $this->source), "style"), "html", null, true);
                    echo ">";
                    // line 62
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    // line 63
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  ";
        } else {
            // line 68
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 69
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["col_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                echo ">
        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 71
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 71), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo ">";
                    // line 72
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    // line 73
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "  ";
        }
        // line 78
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "title", "attributes", "items"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/views/views-view-grid.html.twig";
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
        return array (  149 => 78,  146 => 77,  139 => 75,  132 => 73,  130 => 72,  126 => 71,  122 => 70,  117 => 69,  112 => 68,  109 => 67,  102 => 65,  95 => 63,  93 => 62,  89 => 61,  85 => 60,  80 => 59,  75 => 58,  73 => 57,  68 => 56,  62 => 54,  60 => 53,  57 => 49,  56 => 48,  55 => 46,  53 => 45,  51 => 44,  48 => 39,  47 => 37,  45 => 36,  43 => 35,  41 => 31,  40 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/views/views-view-grid.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/views/views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 35, "for" => 58);
        static $filters = array("escape" => 54, "without" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'without'],
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
