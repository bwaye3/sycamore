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

/* themes/gavias_kunco/templates/page/html.html.twig */
class __TwigTemplate_289a30f1b8d3235d4ec3a81248a06f266de638edccfc8111ffa4b8620cb15c21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 40, "set" => 57, "include" => 88];
        $filters = ["escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 59, "t" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null)), "html", null, true);
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null)), "html", null, true);
        echo "/css/update.css\" media=\"screen\" />

    ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null)));
        echo "

    ";
        // line 40
        if (($context["customize_css"] ?? null)) {
            // line 41
            echo "      <style type=\"text/css\">
        ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null)));
            echo "
      </style>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (($context["customize_styles"] ?? null)) {
            // line 47
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null)));
            echo "
    ";
        }
        // line 49
        echo "
      <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
      <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
      <link rel=\"manifest\" href=\"/site.webmanifest\">

  </head>

  ";
        // line 57
        $context["body_classes"] = [0 => ((        // line 58
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 59
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 60
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 61
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null))))) : (""))];
        // line 64
        echo "
  <body";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 71
        if (($context["preloader"] ?? null)) {
            echo " 
      <div id=\"jpreContent\" >
        <div id=\"jprecontent-inner\">
          <div class=\"preloader-wrapper active\">
            <img src=\"";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null)), "html", null, true);
            echo "/images/preloader/preloader-12.gif\" alt=\"\" />
          </div>  
        </div>
      </div>
    ";
        }
        // line 79
        echo "  

    ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    
    ";
        // line 86
        if (($context["addon_template"] ?? null)) {
            // line 87
            echo "      <div class=\"permission-save-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 88
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_kunco/templates/page/html.html.twig", 88)->display($context);
            // line 89
            echo "      </div>  
    ";
        }
        // line 91
        echo "    
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 91,  193 => 89,  191 => 88,  186 => 87,  184 => 86,  179 => 84,  175 => 83,  171 => 82,  167 => 81,  163 => 79,  155 => 75,  148 => 71,  142 => 68,  136 => 65,  133 => 64,  131 => 61,  130 => 60,  129 => 59,  128 => 58,  127 => 57,  117 => 49,  111 => 47,  109 => 46,  106 => 45,  100 => 42,  97 => 41,  95 => 40,  90 => 38,  85 => 36,  81 => 35,  76 => 33,  71 => 31,  67 => 30,  63 => 29,  58 => 27,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/page/html.html.twig", "/Users/bradleywaye/Sites/local.sycamoretrust.org/themes/gavias_kunco/templates/page/html.html.twig");
    }
}
