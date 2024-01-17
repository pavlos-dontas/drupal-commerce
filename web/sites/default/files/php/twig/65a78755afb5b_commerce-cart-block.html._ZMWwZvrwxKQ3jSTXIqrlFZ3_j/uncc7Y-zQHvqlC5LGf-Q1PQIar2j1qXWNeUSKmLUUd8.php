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

/* themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig */
class __TwigTemplate_0bef88fcbaff450b77451715af60cb6e extends Template
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
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", 1)->unwrap();
        // line 2
        echo "
<div";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 3, $this->source), "html", null, true);
        echo ">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
      <span class=\"cart-block--summary__icon\">
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["basket", 18, 18, "me-1"], 7, $context, $this->getSourceContext()));
        echo "
      </span>
      <span class=\"cart-block--summary__count\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count_text"] ?? null), 9, $this->source), "html", null, true);
        echo "</span>
    </a>
  </div>
  ";
        // line 12
        if (($context["content"] ?? null)) {
            // line 13
            echo "  <div class=\"cart-block--contents bg-primary text-white mt-3\">
    <div class=\"cart-block--contents__inner p-4\">
      <div class=\"fw-bold mb-3\">";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shopping bag"));
            echo " / ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count_text"] ?? null), 15, $this->source), "html", null, true);
            echo "</div>
      <div class=\"cart-block--contents__items\">
        ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 17, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"cart-block--contents__links mt-3\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 21
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_array_merge($this->sandbox->ensureToStringAllowed($context["link"], 21, $this->source), ["#attributes" => ["class" => ["btn", "btn-outline-white", "w-100"]]]), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </div>
    </div>
    <a type=\"button\" class=\"cart-block--link__expand m-3 mt-4 position-absolute top-0 end-0\" href=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
            echo "\" aria-label=\"Close\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["x", 20, 20], 26, $context, $this->getSourceContext()));
            echo "
    </a>
  </div>
  ";
        }
        // line 30
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "url", "count_text", "content", "links"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig";
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
        return array (  112 => 30,  105 => 26,  101 => 25,  97 => 23,  88 => 21,  84 => 20,  78 => 17,  71 => 15,  67 => 13,  65 => 12,  59 => 9,  54 => 7,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "if" => 12, "for" => 20);
        static $filters = array("escape" => 3, "t" => 15, "merge" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'for'],
                ['escape', 't', 'merge'],
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
