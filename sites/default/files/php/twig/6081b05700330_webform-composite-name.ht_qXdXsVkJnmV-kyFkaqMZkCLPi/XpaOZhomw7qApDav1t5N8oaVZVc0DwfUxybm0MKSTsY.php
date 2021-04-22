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

/* modules/contrib/webform/templates/webform-composite-name.html.twig */
class __TwigTemplate_19a5c3ac728577151d1ebaf3805746ddcf3a2bfdd9b3457bed045583936923ed extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            echo "<div class=\"webform-name\">
  <div class=\"webform-flexbox\">
    ";
            // line 19
            if ($this->getAttribute(($context["content"] ?? null), "title", [])) {
                // line 20
                echo "      <div class=\"webform-flex webform-flex--2 webform-name__title\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "title", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 22
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "first", [])) {
                // line 23
                echo "      <div class=\"webform-flex webform-flex--3 webform-name__first\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 25
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
                // line 26
                echo "      <div class=\"webform-flex webform-flex--2 webform-name__middle\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "last", [])) {
                // line 29
                echo "      <div class=\"webform-flex webform-flex--3 webform-name__last\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "last", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 31
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "suffix", [])) {
                // line 32
                echo "      <div class=\"webform-flex webform-flex--1 webform-name__suffix\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "suffix", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "degree", [])) {
                // line 35
                echo "      <div class=\"webform-flex webform-flex--1 webform-name__degree\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "degree", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            // line 37
            echo "  </div>
</div>
";
        } else {
            // line 40
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-composite-name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  114 => 37,  108 => 35,  105 => 34,  99 => 32,  96 => 31,  90 => 29,  87 => 28,  81 => 26,  78 => 25,  72 => 23,  69 => 22,  63 => 20,  61 => 19,  57 => 17,  55 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-composite-name.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/modules/contrib/webform/templates/webform-composite-name.html.twig");
    }
}
