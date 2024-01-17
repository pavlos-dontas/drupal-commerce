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

/* themes/contrib/belgrade/templates/views/views-view-table.html.twig */
class __TwigTemplate_9a4e13533d3eb087d46a6bef9bc62399 extends Template
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
        // line 35
        $context["classes"] = ["table", ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 37
($context["header"] ?? null), 37, $this->source))), ((        // line 38
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), ((        // line 39
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 42
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
  ";
        // line 43
        if (($context["caption_needed"] ?? null)) {
            // line 44
            echo "    <caption>
    ";
            // line 45
            if (($context["caption"] ?? null)) {
                // line 46
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 46, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 48
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 50
            echo "    ";
            if ( !twig_test_empty(($context["summary_element"] ?? null))) {
                // line 51
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary_element"] ?? null), 51, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 53
            echo "    </caption>
  ";
        }
        // line 55
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 56
            echo "    <thead>
      <tr>
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 59
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 59)) {
                    // line 60
                    echo "            ";
                    // line 61
                    $context["column_classes"] = ["views-field", ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 63
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 63, $this->source))];
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 67), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 67), "setAttribute", ["scope", "col"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                echo ">";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 68)) {
                    // line 69
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo ">";
                    // line 70
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 70)) {
                        // line 71
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 73
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    }
                    // line 75
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 77)) {
                        // line 78
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "\" rel=\"nofollow\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 80
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    }
                }
                // line 83
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "      </tr>
    </thead>
  ";
        }
        // line 88
        echo "  <tbody>
    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 90
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ">
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 91));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 92
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 92)) {
                    // line 93
                    echo "            ";
                    // line 94
                    $context["column_classes"] = ["views-field"];
                    // line 98
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 98));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 99
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 99, $this->source), [("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 99, $this->source))]);
                        // line 100
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "          ";
                }
                // line 102
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 102), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 102), 102, $this->source), "html", null, true);
                echo ">";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 103)) {
                    // line 104
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 105));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 106
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 111
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 114
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary_element", "fields", "rows"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/views/views-view-table.html.twig";
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
        return array (  259 => 118,  252 => 116,  245 => 114,  237 => 111,  233 => 110,  228 => 108,  218 => 106,  214 => 105,  209 => 104,  207 => 103,  203 => 102,  200 => 101,  194 => 100,  191 => 99,  186 => 98,  184 => 94,  182 => 93,  179 => 92,  175 => 91,  170 => 90,  166 => 89,  163 => 88,  158 => 85,  151 => 83,  146 => 80,  136 => 78,  134 => 77,  129 => 75,  125 => 73,  115 => 71,  113 => 70,  109 => 69,  107 => 68,  103 => 67,  100 => 66,  98 => 63,  97 => 61,  95 => 60,  92 => 59,  88 => 58,  84 => 56,  81 => 55,  77 => 53,  71 => 51,  68 => 50,  62 => 48,  56 => 46,  54 => 45,  51 => 44,  49 => 43,  44 => 42,  42 => 39,  41 => 38,  40 => 37,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/views/views-view-table.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/views/views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 43, "for" => 58);
        static $filters = array("length" => 37, "escape" => 42, "merge" => 99);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
