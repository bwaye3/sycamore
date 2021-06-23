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

/* modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig */
class __TwigTemplate_8740726365954cdbf128f699e82a92336cbfe7f680aaa59935fb6aafae5186a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 36, "set" => 39, "for" => 55];
        $filters = ["escape" => 37, "clean_class" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'clean_class'],
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
        // line 36
        if (($context["privacy_settings_tab_label"] ?? null)) {
            // line 37
            echo "  <button type=\"button\" class=\"eu-cookie-withdraw-tab\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["privacy_settings_tab_label"] ?? null)), "html", null, true);
            echo "</button>
";
        }
        // line 39
        $context["classes"] = [0 => "eu-cookie-compliance-banner", 1 => "eu-cookie-compliance-banner-info", 2 => ("eu-cookie-compliance-banner--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 42
($context["method"] ?? null))))];
        // line 44
        echo "<div role=\"alertdialog\" aria-labelledby=\"popup-text\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"popup-content info eu-cookie-compliance-content\">
    <div id=\"popup-text\" class=\"eu-cookie-compliance-message\">
      ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null)), "html", null, true);
        echo "
      ";
        // line 48
        if (($context["more_info_button"] ?? null)) {
            // line 49
            echo "        <button type=\"button\" class=\"find-more-button eu-cookie-compliance-more-button\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_info_button"] ?? null)), "html", null, true);
            echo "</button>
      ";
        }
        // line 51
        echo "    </div>

    ";
        // line 53
        if (($context["cookie_categories"] ?? null)) {
            // line 54
            echo "      <div id=\"eu-cookie-compliance-categories\" class=\"eu-cookie-compliance-categories\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cookie_categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 56
                echo "          <div class=\"eu-cookie-compliance-category\">
            <div>
              <input type=\"checkbox\" name=\"cookie-categories\" id=\"cookie-category-";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\"
                     value=\"";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\"
                     ";
                // line 60
                if (twig_in_filter($this->getAttribute($context["category"], "checkbox_default_state", []), [0 => "checked", 1 => "required"])) {
                    echo " checked ";
                }
                // line 61
                echo "                     ";
                if (($this->getAttribute($context["category"], "checkbox_default_state", []) == "required")) {
                    echo " disabled ";
                }
                echo " >
              <label for=\"cookie-category-";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["category"], "label", [])), "html", null, true);
                echo "</label>
            </div>
            ";
                // line 64
                if ($this->getAttribute($context["category"], "description", [])) {
                    // line 65
                    echo "              <div class=\"eu-cookie-compliance-category-description\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["category"], "description", [])), "html", null, true);
                    echo "</div>
            ";
                }
                // line 67
                echo "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
            if (($context["save_preferences_button_label"] ?? null)) {
                // line 70
                echo "          <div class=\"eu-cookie-compliance-categories-buttons\">
            <button type=\"button\"
                    class=\"eu-cookie-compliance-save-preferences-button\">";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_preferences_button_label"] ?? null)), "html", null, true);
                echo "</button>
          </div>
        ";
            }
            // line 75
            echo "      </div>
    ";
        }
        // line 77
        echo "
    <div id=\"popup-buttons\" class=\"eu-cookie-compliance-buttons";
        // line 78
        if (($context["cookie_categories"] ?? null)) {
            echo " eu-cookie-compliance-has-categories";
        }
        echo "\">
      <button type=\"button\" class=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary_button_class"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["agree_button"] ?? null)), "html", null, true);
        echo "</button>
      ";
        // line 80
        if (($context["secondary_button_label"] ?? null)) {
            // line 81
            echo "        <button type=\"button\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_class"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_button_label"] ?? null)), "html", null, true);
            echo "</button>
      ";
        }
        // line 83
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 83,  177 => 81,  175 => 80,  169 => 79,  163 => 78,  160 => 77,  156 => 75,  150 => 72,  146 => 70,  143 => 69,  136 => 67,  130 => 65,  128 => 64,  121 => 62,  114 => 61,  110 => 60,  106 => 59,  102 => 58,  98 => 56,  94 => 55,  91 => 54,  89 => 53,  85 => 51,  79 => 49,  77 => 48,  73 => 47,  66 => 44,  64 => 42,  63 => 39,  57 => 37,  55 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/eu_cookie_compliance/templates/eu_cookie_compliance_popup_info.html.twig");
    }
}
