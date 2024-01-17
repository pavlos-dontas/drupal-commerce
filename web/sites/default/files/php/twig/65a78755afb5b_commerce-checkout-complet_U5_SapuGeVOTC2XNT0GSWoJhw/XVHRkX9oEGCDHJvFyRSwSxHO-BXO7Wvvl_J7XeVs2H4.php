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

/* themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-completion-message.html.twig */
class __TwigTemplate_3e7940f14aa2262d139f3a4dd596e1a9 extends Template
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
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-completion-message.html.twig", 1)->unwrap();
        // line 15
        echo "<div class=\"checkout-complete text-center p-3\">
  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["svg"], "macro_getIcon", ["check-circle-fill", 42, 42, "text-success mb-4"], 16, $context, $this->getSourceContext()));
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 17, $this->source), "html", null, true);
        // line 19
        if (($context["payment_instructions"] ?? null)) {
            // line 20
            echo "    <div class=\"checkout-complete__payment-instructions\">
      <h2>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Payment instructions"));
            echo "</h2>
      ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["payment_instructions"] ?? null), 22, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 25
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message", "payment_instructions"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-completion-message.html.twig";
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
        return array (  63 => 25,  57 => 22,  53 => 21,  50 => 20,  48 => 19,  46 => 17,  44 => 16,  41 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-completion-message.html.twig", "/var/www/html/web/themes/contrib/belgrade/templates/commerce/checkout/commerce-checkout-completion-message.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "if" => 19);
        static $filters = array("escape" => 17, "t" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if'],
                ['escape', 't'],
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
