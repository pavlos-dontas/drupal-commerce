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

/* themes/contrib/belgrade/templates/layout/region--navigation.html.twig */
class __TwigTemplate_f2f29fec9734936a5dd351dbf3c3aaa9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = ["offcanvas", "region", ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["region"] ?? null), 19, $this->source))), ((        // line 20
($context["navigation_position"] ?? null)) ? (("offcanvas-" . $this->sandbox->ensureToStringAllowed(($context["navigation_position"] ?? null), 20, $this->source))) : ("")), "ps-md-3"];
        // line 24
        echo "
";
        // line 25
        $context["container"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region_container"] ?? null), 25, $this->source));
        // line 26
        echo "
";
        // line 27
        if (($context["content"] ?? null)) {
            // line 28
            echo "  <section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo " data-bs-scroll=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_body_scrolling"] ?? null), 28, $this->source), "html", null, true);
            echo "\" data-bs-backdrop=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation_backdrop"] ?? null), 28, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\" id=\"navigationRegion\" aria-labelledby=\"navigationRegionLabel\">
    <div class=\"offcanvas-header\">
      <a href=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\" class=\"site-logo\">
      ";
            // line 31
            if (($context["inline_logo"] ?? null)) {
                // line 32
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_source($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 32, $this->source), true));
                echo "
      ";
            } else {
                // line 34
                echo "        <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 34, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
      ";
            }
            // line 36
            echo "      </a>
      <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
      ";
            // line 40
            $this->displayBlock('content', $context, $blocks);
            // line 43
            echo "    </div>
  </section>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "navigation_position", "region_container", "content", "attributes", "navigation_body_scrolling", "navigation_backdrop", "inline_logo", "site_logo"]);    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
        echo "
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/layout/region--navigation.html.twig";
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
        return array (  104 => 41,  100 => 40,  92 => 43,  90 => 40,  84 => 36,  76 => 34,  70 => 32,  68 => 31,  64 => 30,  54 => 28,  52 => 27,  49 => 26,  47 => 25,  44 => 24,  42 => 20,  41 => 19,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/layout/region--navigation.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/layout/region--navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 27, "block" => 40);
        static $filters = array("clean_class" => 19, "escape" => 28, "t" => 34);
        static $functions = array("path" => 30, "source" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['path', 'source']
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
