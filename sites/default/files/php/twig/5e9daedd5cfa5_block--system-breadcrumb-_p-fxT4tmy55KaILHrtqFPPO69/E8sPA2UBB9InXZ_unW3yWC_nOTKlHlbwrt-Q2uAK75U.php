<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_06bae0470be41ec0e4befd36161eeefd9c9190a7c955f122f5e7565193f2a131 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 32, "if" => 33, "block" => 58];
        $filters = ["clean_class" => 39, "escape" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 32
        $context["title_classes"] = "";
        // line 33
        if ((($context["label"] ?? null) == "")) {
            // line 34
            $context["title_classes"] = "no-title";
        }
        // line 37
        $context["classes"] = [0 => "block gva-block-breadcrumb", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 39
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 40
($context["plugin_id"] ?? null)))), 3 =>         // line 41
($context["title_classes"] ?? null)];
        // line 44
        echo "

<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <div class=\"breadcrumb-style gva-parallax-background\" style=\"";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_style"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_title"] ?? null)), "html", null, true);
        echo " </h2>
            ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo " 
              ";
        // line 54
        if (($context["label"] ?? null)) {
            // line 55
            echo "                <h2 class=\"block-title\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</span></h2>
              ";
        }
        // line 57
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "          </div> 
        </div> 
        <div class=\"gva-parallax-inner skrollable skrollable-between\" data-bottom-top=\"top: -80%;\" data-top-bottom=\"top: 0%;\"></div>    
      </div> 
    </div>  
  </div>  
</div>  

";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "              <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_classes"] ?? null)), "html", null, true);
        echo "\">
                <div";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content block-content"], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "</div>
              </div>  
            ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 60,  124 => 59,  121 => 58,  109 => 63,  107 => 58,  102 => 57,  94 => 55,  92 => 54,  88 => 53,  84 => 52,  78 => 49,  74 => 48,  68 => 44,  66 => 41,  65 => 40,  64 => 39,  63 => 37,  60 => 34,  58 => 33,  56 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig");
    }
}
