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

/* themes/contrib/belgrade/templates/content/profile.html.twig */
class __TwigTemplate_b61d8e8ef99c04b542bcafd3314f51a6 extends Template
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
        // line 26
        $context["classes"] = ["profile", ("profile--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 28
($context["profile"] ?? null), "id", [], "any", false, false, true, 28), 28, $this->source)), ("profile--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 29
($context["profile"] ?? null), "bundle", [], "any", false, false, true, 29), 29, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 30
($context["profile"] ?? null), "isDefault", [], "method", false, false, true, 30)) ? ("profile--is-default") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 31
($context["profile"] ?? null), "isDefault", [], "method", false, false, true, 31)) ? ("bg-light") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 32
($context["profile"] ?? null), "isDefault", [], "method", false, false, true, 32)) ? ("border") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 33
($context["profile"] ?? null), "isDefault", [], "method", false, false, true, 33)) ? ("border-success") : ("")), ((        // line 34
($context["view_mode"] ?? null)) ? (("profile--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 34, $this->source)))) : ("")), "clearfix"];
        // line 38
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 40, $this->source), "html", null, true);
        echo "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["profile", "view_mode", "attributes", "title_suffix", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/content/profile.html.twig";
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
        return array (  57 => 40,  53 => 39,  48 => 38,  46 => 34,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/content/profile.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/content/profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26);
        static $filters = array("clean_class" => 29, "escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
