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

/* core/modules/language/templates/language-negotiation-configure-form.html.twig */
class __TwigTemplate_0ed5ebb4a26b7c0dd27a475f75ff245e extends Template
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["language_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language_type"]) {
            // line 25
            echo "  ";
            // line 26
            $context["language_classes"] = ["js-form-item", "form-item", "table-language-group", (("table-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 30
$context["language_type"], "type", [], "any", false, false, true, 30), 30, $this->source)) . "-wrapper")];
            // line 33
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["language_type"], "attributes", [], "any", false, false, true, 33), "addClass", [($context["language_classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
    <h2>";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["language_type"], "title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</h2>
    <div class=\"description\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["language_type"], "description", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["language_type"], "configurable", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
    ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["language_type"], "table", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
    ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["language_type"], "children", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 41, $this->source), "html", null, true);
        echo "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language_types", "children"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/language/templates/language-negotiation-configure-form.html.twig";
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
        return array (  78 => 41,  69 => 38,  65 => 37,  61 => 36,  57 => 35,  53 => 34,  48 => 33,  46 => 30,  45 => 26,  43 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/language/templates/language-negotiation-configure-form.html.twig", "/var/www/html/web/core/modules/language/templates/language-negotiation-configure-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 24, "set" => 26);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
